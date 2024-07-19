<?php

namespace Api\Notification\Services\Interfaces;

interface SmsAdapterInterface
{
    public function single($mobile, $message , $gateway) :bool;
    public function group($mobiles , $messages , $gateway) :void;
    public function getToken() :string;
    public function getGateway($gateway) :string;
    public function getUrl($type = 'Single') :string;
    public function failedMessageCreate($gateway , $mobiles , $messages , $body , $url , $status , $type) :void;
}
