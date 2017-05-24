<?php

namespace MarketPay\Libraries;

use MangoPay\Libraries\RequestType;
use MangoPay\Libraries\ApiBase as MangoPayApiBase;

class ApiBase extends MangoPayApiBase
{
    private $_marketPayMethods = array(
        'redsyspayins_create' => array( '/PayInsRedsys/payments/web', RequestType::POST ),
        'redsyspayins_getintent' => array( '/PayInsRedsys/payments/%s', RequestType::GET ),
        'redsyspayins_refund' => array( '/PayInsRedsys/payments/%s/refunds', RequestType::POST ),
        'redsysprepay_create' => array( '/PayInsRedsys/preauthorizations/web', RequestType::POST ),
        'redsysprepay_getintent' => array( '/PayInsRedsys/preauthorizations/%s', RequestType::GET ),
        'redsysprepay_confirm' => array( '/PayInsRedsys/preauthorizations/%s/confirmation', RequestType::POST ),
        'redsysprepay_cancel' => array( '/PayInsRedsys/preauthorizations/%s/cancellation', RequestType::POST )
    );

    protected function GetRequestUrl($key)
    {
        return $this->_marketPayMethods[$key][0];
    }

    protected function GetRequestType($key)
    {
        return $this->_marketPayMethods[$key][1];
    }

}