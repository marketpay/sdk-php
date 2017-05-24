<?php

namespace MarketPay;

use MangoPay\ApiPayOuts as MangoPayApiPayOuts;

class ApiPayOuts extends MangoPayApiPayOuts
{
    public function Create($payOut, $idempotencyKey = null)
    {
        return $this->CreateObject('payouts_bankwire_create', $payOut, '\MangoPay\PayOut', null, null, $idempotencyKey);
    }
}