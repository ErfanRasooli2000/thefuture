<?php

namespace Api\Notification\Services\Adapters;

use Api\Notification\Services\Interfaces\SmsAdapterInterface;

class PishgamanAdapter implements SmsAdapterInterface
{
    public function single($mobile, $message, $gateway): bool
    {
        $url = $this->getUrl();
        $gateway = $this->getGateway($gateway);

        $response = $this->sendMessagePishgaman($url,$gateway,[$mobile],[$message]);

        if (!$response->successful())
        {
            $this->failedMessageCreate($gateway,[$mobile],[$message],$response->body(),$url,$response->status(),'Single');
            return false;
        }

        $status = $response->json()["statusCode"];

        if ($status !== 1)
        {
            $this->failedMessageCreate($gateway,[$mobile],[$message],$response->body(),$url,$status,'Single');
            return false;
        }

        return true;
    }

    public function group($mobiles, $messages, $gateway): void
    {
        $url = $this->getUrl();
        $gateway = $this->getGateway($gateway);

        $response = $this->sendMessagePishgaman($url,$gateway,$mobiles,$messages);

        if (!$response->successful())
            $this->failedMessageCreate($gateway,$mobiles,$messages,$response->body(),$url,$response->status(),'Group');

        $status = $response->json()["statusCode"];

        if ($status !== 2)
            $this->failedMessageCreate($gateway,$mobiles,$messages,$response->body(),$url,$status,'Group');
    }

    public function getToken(): string
    {
//        return SmsProvider::query()->where('operator' , "Pishgaman")->first()->token;
    }

    public function getGateway($gateway): string
    {
//        if ($gateway == '')
//            $gateway = SmsProvider::query()->where('operator' , "Pishgaman")->first()->main_gateway;

        return $gateway;
    }

    public function getUrl($type = 'Single'): string
    {
        return 'https://smsapi.pishgamrayan.com/Messages/Send';
    }

    public function failedMessageCreate($gateway, $mobiles, $messages, $body, $url, $status, $type): void
    {
        \DB::table("failed_sms_messages")->insert([
            "gateway" => $gateway,
            "mobiles" => $mobiles,
            "messages" => $messages,
            'status' => $status,
            'body' => $body,
            'url' => $url,
            'type' => $type,
            'sender' => "Pishgaman",
            'created_at' => now()->format("Y-m-d H:i:s")
        ]);
    }

    private function sendMessagePishgaman($url,$gateway , $mobiles, $messages)
    {
        return \Http::withHeaders([
            'Authorization' => $this->getToken()
        ])->post($url , [
            'senderNumber'    =>  $gateway,
            'recipientNumbers'        =>  $mobiles,
            'messageBodies'      =>  $messages
        ]);
    }
}
