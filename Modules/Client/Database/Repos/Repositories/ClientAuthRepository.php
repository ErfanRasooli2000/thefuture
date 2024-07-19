<?php

namespace Api\Client\Database\Repos\Repositories;

use Api\Auth\Enums\OtpTypeEnum;
use Api\Auth\Models\Otp;
use Api\Client\Database\Repos\Contracts\ClientAuthRepositoryInterface;
use Api\Client\Models\Client;
use Api\Notification\Services\Facades\SmsFacade;

class ClientAuthRepository implements ClientAuthRepositoryInterface
{
    public function __construct(
        protected Client $model
    ){}

    public function loginSendCode(array $inputs): void
    {
        \DB::transaction(function () use ($inputs){
            $client = $this->model
                ->newQuery()
                ->firstOrCreate(['mobile'=>$inputs['mobile']]);

            $client->profile()->create();

            $code = mt_rand(100000,999999);

            $client->otp()->create([
                'code' => $code,
                'expires_at' => now()->addMinutes(3),
                'type' => OtpTypeEnum::Client_Login->value,
            ]);
        });

//        $result = SmsFacade::single($client->mobile , "کد ورود به سیستم: ".$code , null);
$result=true;
        if (!$result)
            throw new \Exception('در ارسال کد ورود خطایی رخ داده');
    }

    public function doLogin(array $inputs): array
    {
        $client = $this->model
            ->newQuery()
            ->where('mobile',$inputs['mobile'])
            ->first();

        $otp = Otp::query()
            ->where('causer_id',$client->id)
            ->where('causer_type' , Client::class)
            ->where('expires_at', '>' , now())
            ->where('is_used' , 0)
            ->where('code' , $inputs['code'])
            ->first();

        if ($otp)
        {
            $otp->used();

            return [
                'client' => $client,
                'status' => true
            ];
        }

        return ['status' => false];
    }
}
