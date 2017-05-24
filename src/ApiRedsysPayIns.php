<?php

namespace MarketPay;

use MarketPay\Libraries\ApiBase;

class ApiRedsysPayIns extends ApiBase
{
    public function Create(RedsysPayIn $redsysPayIn)
    {
        return $this->CreateObject('redsyspayins_create', $redsysPayIn, '\MarketPay\RedsysPayIn');
    }

    public function GetIntent($intentId)
    {
        return $this->CreateObject('redsyspayins_getintent', null, '\MarketPay\RedsysIntent', $intentId);
    }

    public function CreateRefund($payInId, RedsysRefund $redsysRefund)
    {
        return $this->CreateObject('redsyspayins_refund', $redsysRefund, '\MarketPay\RedsysRefund', $payInId);
    }

    public function CreatePrepay(RedsysPayIn $redsysPayIn)
    {
        return $this->CreateObject('redsysprepay_create', $redsysPayIn, '\MarketPay\RedsysPayIn');
    }

    public function GetIntentPrepay($intentId)
    {
        return $this->CreateObject('redsysprepay_getintent', null, '\MarketPay\RedsysIntent', $intentId);
    }

    public function ConfirmPrepay($preauthorizationId, RedsysPayIn $redsysPayIn)
    {
        return $this->CreateObject('redsysprepay_confirm', $redsysPayIn, '\MarketPay\RedsysPayIn', $preauthorizationId);
    }

    public function CancelPrepay($preauthorizationId)
    {
        return $this->CreateObject('redsysprepay_cancel', new RedsysPayIn, '\MarketPay\RedsysPayIn', $preauthorizationId);
    }

}