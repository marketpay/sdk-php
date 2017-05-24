<?php

namespace MarketPay;

use MangoPay\Libraries\Dto;

class RedsysIntent extends Dto
{
    public $Status;

    public $CardId;

    public $Id;

    public $Provider;
}