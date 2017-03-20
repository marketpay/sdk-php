# Swagger\Client\UsersApi

All URIs are relative to *https://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**usersGet**](UsersApi.md#usersGet) | **GET** /v2.01/Users/{UserId} | 
[**usersGetBankAccount**](UsersApi.md#usersGetBankAccount) | **GET** /v2.01/Users/{UserId}/bankaccounts/{BankAccountId} | 
[**usersGetBankAccountList**](UsersApi.md#usersGetBankAccountList) | **GET** /v2.01/Users/{UserId}/bankaccounts | 
[**usersGetCardList**](UsersApi.md#usersGetCardList) | **GET** /v2.01/Users/{UserId}/cards | 
[**usersGetLegal**](UsersApi.md#usersGetLegal) | **GET** /v2.01/Users/legal/{UserId} | 
[**usersGetList**](UsersApi.md#usersGetList) | **GET** /v2.01/Users | 
[**usersGetNatural**](UsersApi.md#usersGetNatural) | **GET** /v2.01/Users/natural/{UserId} | 
[**usersGetTransactionList**](UsersApi.md#usersGetTransactionList) | **GET** /v2.01/Users/{UserId}/transactions | 
[**usersGetWalletList**](UsersApi.md#usersGetWalletList) | **GET** /v2.01/Users/{UserId}/wallets | 
[**usersPostBankAccountCa**](UsersApi.md#usersPostBankAccountCa) | **POST** /v2.01/Users/{UserId}/bankaccounts/CA | 
[**usersPostBankAccountGb**](UsersApi.md#usersPostBankAccountGb) | **POST** /v2.01/Users/{UserId}/bankaccounts/GB | 
[**usersPostBankAccountIban**](UsersApi.md#usersPostBankAccountIban) | **POST** /v2.01/Users/{UserId}/bankaccounts/IBAN | 
[**usersPostBankAccountOther**](UsersApi.md#usersPostBankAccountOther) | **POST** /v2.01/Users/{UserId}/bankaccounts/OTHER | 
[**usersPostBankAccountUs**](UsersApi.md#usersPostBankAccountUs) | **POST** /v2.01/Users/{UserId}/bankaccounts/US | 
[**usersPostLegal**](UsersApi.md#usersPostLegal) | **POST** /v2.01/Users/legal | 
[**usersPostNatural**](UsersApi.md#usersPostNatural) | **POST** /v2.01/Users/natural | 
[**usersPutLegal**](UsersApi.md#usersPutLegal) | **PUT** /v2.01/Users/legal/{UserId} | 
[**usersPutNatural**](UsersApi.md#usersPutNatural) | **PUT** /v2.01/Users/natural/{UserId} | 


# **usersGet**
> \Swagger\Client\Model\UserResponse usersGet($user_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\UsersApi();
$user_id = 789; // int | 

try {
    $result = $api_instance->usersGet($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**|  |

### Return type

[**\Swagger\Client\Model\UserResponse**](../Model/UserResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **usersGetBankAccount**
> \Swagger\Client\Model\BankAccountResponse usersGetBankAccount($user_id, $bank_account_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\UsersApi();
$user_id = 56; // int | 
$bank_account_id = 56; // int | 

try {
    $result = $api_instance->usersGetBankAccount($user_id, $bank_account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersGetBankAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**|  |
 **bank_account_id** | **int**|  |

### Return type

[**\Swagger\Client\Model\BankAccountResponse**](../Model/BankAccountResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **usersGetBankAccountList**
> \Swagger\Client\Model\BankAccountResponse[] usersGetBankAccountList($user_id, $page, $per_page)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\UsersApi();
$user_id = 789; // int | 
$page = 56; // int | 
$per_page = 56; // int | 

try {
    $result = $api_instance->usersGetBankAccountList($user_id, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersGetBankAccountList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**|  |
 **page** | **int**|  | [optional]
 **per_page** | **int**|  | [optional]

### Return type

[**\Swagger\Client\Model\BankAccountResponse[]**](../Model/BankAccountResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **usersGetCardList**
> \Swagger\Client\Model\CardResponse[] usersGetCardList($user_id, $page, $per_page)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\UsersApi();
$user_id = 789; // int | 
$page = 56; // int | 
$per_page = 56; // int | 

try {
    $result = $api_instance->usersGetCardList($user_id, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersGetCardList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**|  |
 **page** | **int**|  | [optional]
 **per_page** | **int**|  | [optional]

### Return type

[**\Swagger\Client\Model\CardResponse[]**](../Model/CardResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **usersGetLegal**
> \Swagger\Client\Model\UserLegalResponse usersGetLegal($user_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\UsersApi();
$user_id = 789; // int | 

try {
    $result = $api_instance->usersGetLegal($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersGetLegal: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**|  |

### Return type

[**\Swagger\Client\Model\UserLegalResponse**](../Model/UserLegalResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **usersGetList**
> \Swagger\Client\Model\UserResponse[] usersGetList($page, $per_page)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\UsersApi();
$page = 56; // int | 
$per_page = 56; // int | 

try {
    $result = $api_instance->usersGetList($page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersGetList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**|  | [optional]
 **per_page** | **int**|  | [optional]

### Return type

[**\Swagger\Client\Model\UserResponse[]**](../Model/UserResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **usersGetNatural**
> \Swagger\Client\Model\UserNaturalResponse usersGetNatural($user_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\UsersApi();
$user_id = 789; // int | 

try {
    $result = $api_instance->usersGetNatural($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersGetNatural: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**|  |

### Return type

[**\Swagger\Client\Model\UserNaturalResponse**](../Model/UserNaturalResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **usersGetTransactionList**
> \Swagger\Client\Model\TransactionResponse[] usersGetTransactionList($user_id, $page, $per_page)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\UsersApi();
$user_id = 789; // int | 
$page = 56; // int | 
$per_page = 56; // int | 

try {
    $result = $api_instance->usersGetTransactionList($user_id, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersGetTransactionList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**|  |
 **page** | **int**|  | [optional]
 **per_page** | **int**|  | [optional]

### Return type

[**\Swagger\Client\Model\TransactionResponse[]**](../Model/TransactionResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **usersGetWalletList**
> \Swagger\Client\Model\WalletResponse[] usersGetWalletList($user_id, $page, $per_page)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\UsersApi();
$user_id = 789; // int | 
$page = 56; // int | 
$per_page = 56; // int | 

try {
    $result = $api_instance->usersGetWalletList($user_id, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersGetWalletList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**|  |
 **page** | **int**|  | [optional]
 **per_page** | **int**|  | [optional]

### Return type

[**\Swagger\Client\Model\WalletResponse[]**](../Model/WalletResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **usersPostBankAccountCa**
> \Swagger\Client\Model\BankAccountResponseCa usersPostBankAccountCa($user_id, $bank_account_ca)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\UsersApi();
$user_id = 789; // int | 
$bank_account_ca = new \Swagger\Client\Model\BankAccountCaPost(); // \Swagger\Client\Model\BankAccountCaPost | 

try {
    $result = $api_instance->usersPostBankAccountCa($user_id, $bank_account_ca);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersPostBankAccountCa: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**|  |
 **bank_account_ca** | [**\Swagger\Client\Model\BankAccountCaPost**](../Model/\Swagger\Client\Model\BankAccountCaPost.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\BankAccountResponseCa**](../Model/BankAccountResponseCa.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/json-patch+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **usersPostBankAccountGb**
> \Swagger\Client\Model\BankAccountResponseGb usersPostBankAccountGb($user_id, $bank_account_gb)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\UsersApi();
$user_id = 789; // int | 
$bank_account_gb = new \Swagger\Client\Model\BankAccountGbPost(); // \Swagger\Client\Model\BankAccountGbPost | 

try {
    $result = $api_instance->usersPostBankAccountGb($user_id, $bank_account_gb);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersPostBankAccountGb: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**|  |
 **bank_account_gb** | [**\Swagger\Client\Model\BankAccountGbPost**](../Model/\Swagger\Client\Model\BankAccountGbPost.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\BankAccountResponseGb**](../Model/BankAccountResponseGb.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/json-patch+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **usersPostBankAccountIban**
> \Swagger\Client\Model\BankAccountResponseIban usersPostBankAccountIban($user_id, $bank_account_iban)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\UsersApi();
$user_id = 789; // int | 
$bank_account_iban = new \Swagger\Client\Model\BankAccountIbanPost(); // \Swagger\Client\Model\BankAccountIbanPost | 

try {
    $result = $api_instance->usersPostBankAccountIban($user_id, $bank_account_iban);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersPostBankAccountIban: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**|  |
 **bank_account_iban** | [**\Swagger\Client\Model\BankAccountIbanPost**](../Model/\Swagger\Client\Model\BankAccountIbanPost.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\BankAccountResponseIban**](../Model/BankAccountResponseIban.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/json-patch+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **usersPostBankAccountOther**
> \Swagger\Client\Model\BankAccountResponseOther usersPostBankAccountOther($user_id, $bank_account_other)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\UsersApi();
$user_id = 789; // int | 
$bank_account_other = new \Swagger\Client\Model\BankAccountOtherPost(); // \Swagger\Client\Model\BankAccountOtherPost | 

try {
    $result = $api_instance->usersPostBankAccountOther($user_id, $bank_account_other);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersPostBankAccountOther: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**|  |
 **bank_account_other** | [**\Swagger\Client\Model\BankAccountOtherPost**](../Model/\Swagger\Client\Model\BankAccountOtherPost.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\BankAccountResponseOther**](../Model/BankAccountResponseOther.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/json-patch+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **usersPostBankAccountUs**
> \Swagger\Client\Model\BankAccountResponseUs usersPostBankAccountUs($user_id, $bank_account_us)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\UsersApi();
$user_id = 789; // int | 
$bank_account_us = new \Swagger\Client\Model\BankAccountUsPost(); // \Swagger\Client\Model\BankAccountUsPost | 

try {
    $result = $api_instance->usersPostBankAccountUs($user_id, $bank_account_us);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersPostBankAccountUs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**|  |
 **bank_account_us** | [**\Swagger\Client\Model\BankAccountUsPost**](../Model/\Swagger\Client\Model\BankAccountUsPost.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\BankAccountResponseUs**](../Model/BankAccountResponseUs.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/json-patch+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **usersPostLegal**
> \Swagger\Client\Model\UserLegalResponse usersPostLegal($user_legal)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\UsersApi();
$user_legal = new \Swagger\Client\Model\UserLegalPost(); // \Swagger\Client\Model\UserLegalPost | 

try {
    $result = $api_instance->usersPostLegal($user_legal);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersPostLegal: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_legal** | [**\Swagger\Client\Model\UserLegalPost**](../Model/\Swagger\Client\Model\UserLegalPost.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\UserLegalResponse**](../Model/UserLegalResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/json-patch+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **usersPostNatural**
> \Swagger\Client\Model\UserNaturalResponse usersPostNatural($user_natural)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\UsersApi();
$user_natural = new \Swagger\Client\Model\UserNaturalPost(); // \Swagger\Client\Model\UserNaturalPost | 

try {
    $result = $api_instance->usersPostNatural($user_natural);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersPostNatural: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_natural** | [**\Swagger\Client\Model\UserNaturalPost**](../Model/\Swagger\Client\Model\UserNaturalPost.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\UserNaturalResponse**](../Model/UserNaturalResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/json-patch+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **usersPutLegal**
> \Swagger\Client\Model\UserLegalResponse usersPutLegal($user_id, $user_legal)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\UsersApi();
$user_id = 789; // int | 
$user_legal = new \Swagger\Client\Model\UserLegalPut(); // \Swagger\Client\Model\UserLegalPut | 

try {
    $result = $api_instance->usersPutLegal($user_id, $user_legal);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersPutLegal: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**|  |
 **user_legal** | [**\Swagger\Client\Model\UserLegalPut**](../Model/\Swagger\Client\Model\UserLegalPut.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\UserLegalResponse**](../Model/UserLegalResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/json-patch+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **usersPutNatural**
> \Swagger\Client\Model\UserNaturalResponse usersPutNatural($user_id, $user_natural)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\UsersApi();
$user_id = 789; // int | 
$user_natural = new \Swagger\Client\Model\UserNaturalPut(); // \Swagger\Client\Model\UserNaturalPut | 

try {
    $result = $api_instance->usersPutNatural($user_id, $user_natural);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersPutNatural: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**|  |
 **user_natural** | [**\Swagger\Client\Model\UserNaturalPut**](../Model/\Swagger\Client\Model\UserNaturalPut.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\UserNaturalResponse**](../Model/UserNaturalResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/json-patch+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

