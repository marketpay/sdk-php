<?php

namespace MarketPay;

use MangoPay\MangoPayApi;

class MarketPayApi extends MangoPayApi
{
    public function __construct()
    {
        parent::__construct();

        $this->RedsysPayIns = new ApiRedsysPayIns($this);
        $this->Users = new ApiUsers($this);
        $this->PayOuts = new ApiPayOuts($this);
    }

}