<?php

namespace MarketPay;

use MangoPay\ApiUsers as MangoPayApiUsers;

class ApiUsers extends MangoPayApiUsers
{
    public function Create($user, $idempotencyKey = null)
    {
        $response = $this->CreateObject('users_createnaturals', $user, null, null, null, $idempotencyKey);
        return $this->GetUserResponse($response);
    }

    private function GetUserResponse($response)
    {
        return $this->CastResponseToEntity($response, '\MarketPay\UserNatural');
    }
}