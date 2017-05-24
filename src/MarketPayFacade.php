<?php

namespace MarketPay;

use Illuminate\Support\Facades\Facade;

class MarketPayFacade extends Facade
{
    private static $availableMethods = array(
        'AuthenticationManager',
        'Responses',
        'Clients',
        'Users',
        'Wallets',
        'Transfers',
        'PayIns',
        'RedsysPayIns',
        'PayOuts',
        'Refunds',
        'CardRegistrations',
        'Cards',
        'Events',
        'Hooks',
        'CardPreAuthorizations',
        'KycDocuments',
        'Disputes',
        'DisputeDocuments'
    );

    protected static function getFacadeAccessor()
    {
        return 'marketpay';
    }

    public static function __callStatic($name, $args)
    {
        if (in_array($name, self::$availableMethods, true))
        {
            return self::getFacadeRoot()->$name;
        }

        $trace = debug_backtrace();
        $error = 'Undefined property via __callStatic(): %s in %s on line %u';

        trigger_error(sprintf($error, $name, $trace[0]['file'], $trace[0]['line']), E_USER_NOTICE);

        return;
    }

}