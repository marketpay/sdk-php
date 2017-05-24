<?php

namespace MarketPay;

use MangoPay\Transaction;

class RedsysPayIn extends Transaction
{
    public $Tag;

    public $SaveCard;

    public $CardId;

    public $AuthorId;

    public $CreditedWalletId;

    public $StatementDescriptor;

    public $UrlOk;

    public $UrlKo;

    public $DebitedFunds;

    public $Fees;

    public $PayInId;

    public $PreauthorizationId;

    public $Url;

    public $Ds_SignatureVersion;

    public $Ds_MerchantParameters;

    public $Ds_Signature;
}