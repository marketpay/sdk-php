# MarketPay\WalletsApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**walletsGet**](WalletsApi.md#walletsGet) | **GET** /v2.1/Wallets/{WalletId} | 
[**walletsGetBalance**](WalletsApi.md#walletsGetBalance) | **GET** /v2.1/Wallets/{WalletId}/Balance | 
[**walletsGetList**](WalletsApi.md#walletsGetList) | **GET** /v2.1/Wallets | 
[**walletsGetTransactionList**](WalletsApi.md#walletsGetTransactionList) | **GET** /v2.1/Wallets/{WalletId}/transactions | 
[**walletsPost**](WalletsApi.md#walletsPost) | **POST** /v2.1/Wallets | 
[**walletsPut**](WalletsApi.md#walletsPut) | **PUT** /v2.1/Wallets/{WalletId} | 
[**walletsQueryBalancesByIds**](WalletsApi.md#walletsQueryBalancesByIds) | **POST** /v2.1/Wallets/QueryBalancesByIds | 


# **walletsGet**
> \MarketPay\Model\WalletResponse walletsGet($wallet_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = MarketPay\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new MarketPay\Api\WalletsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$wallet_id = 789; // int | 

try {
    $result = $apiInstance->walletsGet($wallet_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletsApi->walletsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **wallet_id** | **int**|  |

### Return type

[**\MarketPay\Model\WalletResponse**](../Model/WalletResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **walletsGetBalance**
> \MarketPay\Model\WalletBalanceResponseList walletsGetBalance($wallet_id, $before_date, $after_date)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = MarketPay\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new MarketPay\Api\WalletsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$wallet_id = 789; // int | 
$before_date = 789; // int | 
$after_date = 789; // int | 

try {
    $result = $apiInstance->walletsGetBalance($wallet_id, $before_date, $after_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletsApi->walletsGetBalance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **wallet_id** | **int**|  |
 **before_date** | **int**|  | [optional]
 **after_date** | **int**|  | [optional]

### Return type

[**\MarketPay\Model\WalletBalanceResponseList**](../Model/WalletBalanceResponseList.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **walletsGetList**
> \MarketPay\Model\WalletResponseResponseList walletsGetList($page, $per_page)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = MarketPay\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new MarketPay\Api\WalletsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | 
$per_page = 56; // int | 

try {
    $result = $apiInstance->walletsGetList($page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletsApi->walletsGetList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**|  | [optional]
 **per_page** | **int**|  | [optional]

### Return type

[**\MarketPay\Model\WalletResponseResponseList**](../Model/WalletResponseResponseList.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **walletsGetTransactionList**
> \MarketPay\Model\TransactionResponse[] walletsGetTransactionList($wallet_id, $page, $per_page, $before_date, $after_date, $sort)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = MarketPay\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new MarketPay\Api\WalletsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$wallet_id = 789; // int | 
$page = 56; // int | 
$per_page = 56; // int | 
$before_date = 789; // int | 
$after_date = 789; // int | 
$sort = "sort_example"; // string | 

try {
    $result = $apiInstance->walletsGetTransactionList($wallet_id, $page, $per_page, $before_date, $after_date, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletsApi->walletsGetTransactionList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **wallet_id** | **int**|  |
 **page** | **int**|  | [optional]
 **per_page** | **int**|  | [optional]
 **before_date** | **int**|  | [optional]
 **after_date** | **int**|  | [optional]
 **sort** | **string**|  | [optional]

### Return type

[**\MarketPay\Model\TransactionResponse[]**](../Model/TransactionResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **walletsPost**
> \MarketPay\Model\WalletResponse walletsPost($body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = MarketPay\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new MarketPay\Api\WalletsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \MarketPay\Model\WalletPost(); // \MarketPay\Model\WalletPost | 

try {
    $result = $apiInstance->walletsPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletsApi->walletsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\MarketPay\Model\WalletPost**](../Model/WalletPost.md)|  | [optional]

### Return type

[**\MarketPay\Model\WalletResponse**](../Model/WalletResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **walletsPut**
> \MarketPay\Model\WalletResponse walletsPut($wallet_id, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = MarketPay\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new MarketPay\Api\WalletsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$wallet_id = 789; // int | 
$body = new \MarketPay\Model\WalletPut(); // \MarketPay\Model\WalletPut | 

try {
    $result = $apiInstance->walletsPut($wallet_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletsApi->walletsPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **wallet_id** | **int**|  |
 **body** | [**\MarketPay\Model\WalletPut**](../Model/WalletPut.md)|  | [optional]

### Return type

[**\MarketPay\Model\WalletResponse**](../Model/WalletResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **walletsQueryBalancesByIds**
> \MarketPay\Model\WalletBalance[] walletsQueryBalancesByIds($body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = MarketPay\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new MarketPay\Api\WalletsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \MarketPay\Model\WalletQueryBalancesByIdsPost(); // \MarketPay\Model\WalletQueryBalancesByIdsPost | 

try {
    $result = $apiInstance->walletsQueryBalancesByIds($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletsApi->walletsQueryBalancesByIds: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\MarketPay\Model\WalletQueryBalancesByIdsPost**](../Model/WalletQueryBalancesByIdsPost.md)|  | [optional]

### Return type

[**\MarketPay\Model\WalletBalance[]**](../Model/WalletBalance.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

