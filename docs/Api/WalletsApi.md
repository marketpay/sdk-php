# Swagger\Client\WalletsApi

All URIs are relative to *https://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**walletsGet**](WalletsApi.md#walletsGet) | **GET** /v2.01/Wallets/{WalletId} | 
[**walletsGetTransactionList**](WalletsApi.md#walletsGetTransactionList) | **GET** /v2.01/Wallets/{WalletId}/transactions | 
[**walletsPost**](WalletsApi.md#walletsPost) | **POST** /v2.01/Wallets | 
[**walletsPut**](WalletsApi.md#walletsPut) | **PUT** /v2.01/Wallets/{WalletId} | 


# **walletsGet**
> \Swagger\Client\Model\WalletResponse walletsGet($wallet_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\WalletsApi();
$wallet_id = 789; // int | 

try {
    $result = $api_instance->walletsGet($wallet_id);
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

[**\Swagger\Client\Model\WalletResponse**](../Model/WalletResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **walletsGetTransactionList**
> \Swagger\Client\Model\TransactionResponse[] walletsGetTransactionList($wallet_id, $page, $per_page)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\WalletsApi();
$wallet_id = 789; // int | 
$page = 56; // int | 
$per_page = 56; // int | 

try {
    $result = $api_instance->walletsGetTransactionList($wallet_id, $page, $per_page);
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

### Return type

[**\Swagger\Client\Model\TransactionResponse[]**](../Model/TransactionResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **walletsPost**
> \Swagger\Client\Model\WalletResponse walletsPost($wallet)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\WalletsApi();
$wallet = new \Swagger\Client\Model\WalletPost(); // \Swagger\Client\Model\WalletPost | 

try {
    $result = $api_instance->walletsPost($wallet);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletsApi->walletsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **wallet** | [**\Swagger\Client\Model\WalletPost**](../Model/\Swagger\Client\Model\WalletPost.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\WalletResponse**](../Model/WalletResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/json-patch+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **walletsPut**
> \Swagger\Client\Model\WalletResponse walletsPut($wallet_id, $wallet)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\WalletsApi();
$wallet_id = 789; // int | 
$wallet = new \Swagger\Client\Model\WalletPut(); // \Swagger\Client\Model\WalletPut | 

try {
    $result = $api_instance->walletsPut($wallet_id, $wallet);
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
 **wallet** | [**\Swagger\Client\Model\WalletPut**](../Model/\Swagger\Client\Model\WalletPut.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\WalletResponse**](../Model/WalletResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/json-patch+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)
