<?php

namespace Api\Notification\Services\Adapters;


use Api\Notification\Services\Interfaces\SmsAdapterInterface;

class SabaNovinAdapter implements SmsAdapterInterface
{
    public function single($mobile, $message, $gateway): bool
    {
        $url = $this->getUrl();
        $gateway = $this->getGateway($gateway);

        $response = \Http::post($url, [
            'gateway' => $gateway,
            'to' => $mobile,
            'text' => $this->addText($message)
        ]);

        if (!$response->successful())
        {
            $this->failedMessageCreate($gateway,[$mobile],[$message],$response->body(),$url,$response->status(),'Single');
            return false;
        }

        $status = json_decode($response->body(), true)["status"]['code'];
        $success = ($status == 200);

        if (!$success)
            $this->failedMessageCreate($gateway,[$mobile],[$message],$response->body(),$url,$status,'Single');

        return $success;
    }

    public function group($mobiles, $messages , $gateway): void
    {
        $url = $this->getUrl('Group');
        $gateway = $this->getGateway($gateway);

        try {
            $response = \Http::post($url, [
                'gateway' => $gateway,
                "to" => $mobiles,
                "text" => $this->addText($messages)
            ]);

            if (!$response->successful())
                $this->failedMessageCreate($gateway,$mobiles,$messages,"",$url,$response->status(),'Group');

        } catch (\Exception $e) {
            $this->failedMessageCreate($gateway,$mobiles,$messages,$e->getMessage(),$url,500,'Group');
        }


        $res = json_decode($response->body(), true);

        if (!isset($res['status']['code']))
            $this->failedMessageCreate($gateway,$mobiles,$messages,"",$url,500,'Group');

        if ($res['status']['code'] !== 200)
            $this->failedMessageCreate($gateway,$mobiles,$messages,$response->body(),$url,$res['status']['code'],'Group');
    }

    public function getToken(): string
    {
        return "sa3765348541:VG6ybFKym2gz4fJ2NAOLEhDEIeU92WOsZUVN";
//        return SmsProvider::query()->where('operator' , "SabaNovin")->first()->token;
    }

    public function getGateway($gateway): string
    {
        $gateway = "10005040";
//        if ($gateway == '')
//            $gateway = SmsProvider::query()->where('operator' , "SabaNovin")->first()->main_gateway;

        return $gateway;
    }

    public function getUrl($type = 'Single'): string
    {
        if ($type == 'Group')
            return 'https://api.sabanovin.com/v1/' . $this->getToken() . '/sms/send_array.json';

        return 'https://api.sabanovin.com/v1/' . $this->getToken() . '/sms/send.json';
    }

    public function failedMessageCreate($gateway, $mobiles, $messages, $body, $url , $status, $type): void
    {
//        \DB::table("failed_sms_messages")->insert([
//            "gateway" => $gateway,
//            "mobiles" => $mobiles,
//            "messages" => $messages,
//            'status' => $status,
//            'body' => $body,
//            'url' => $url,
//            'type' => $type,
//            'sender' => "SabaNovin",
//            'created_at' => now()->format("Y-m-d H:i:s")
//        ]);
    }

    public function addText($message)
    {
        if (!is_array($message))
        {
            return urldecode($message . PHP_EOL . PHP_EOL . 'لغو11');
        }
        else
        {
            return array_map(function ($item){
                return urldecode($item . PHP_EOL . PHP_EOL . 'لغو11');
            },$message);
        }
    }
}
