# MarketPay\MeApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**meFeaturesList**](MeApi.md#meFeaturesList) | **GET** /v2.1/Me/Features | 
[**meGet**](MeApi.md#meGet) | **GET** /v2.1/Me | 
[**meGetList**](MeApi.md#meGetList) | **GET** /v2.1/Me/Fees | 
[**meGetPayIns**](MeApi.md#meGetPayIns) | **GET** /v2.1/Me/TransferMethods/available/payins | 
[**meGet_0**](MeApi.md#meGet_0) | **GET** /v2.1/Me/Fees/{Currency} | 


# **meFeaturesList**
> \MarketPay\Model\FeatureResponse[] meFeaturesList()



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = MarketPay\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new MarketPay\Api\MeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->meFeaturesList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeApi->meFeaturesList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\MarketPay\Model\FeatureResponse[]**](../Model/FeatureResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **meGet**
> \MarketPay\Model\MeResponse meGet()



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = MarketPay\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new MarketPay\Api\MeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->meGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeApi->meGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\MarketPay\Model\MeResponse**](../Model/MeResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **meGetList**
> \MarketPay\Model\WalletClientInstrumentResponseResponseList meGetList($page, $per_page)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = MarketPay\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new MarketPay\Api\MeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | 
$per_page = 56; // int | 

try {
    $result = $apiInstance->meGetList($page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeApi->meGetList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**|  | [optional]
 **per_page** | **int**|  | [optional]

### Return type

[**\MarketPay\Model\WalletClientInstrumentResponseResponseList**](../Model/WalletClientInstrumentResponseResponseList.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **meGetPayIns**
> \MarketPay\Model\TransferMethodsResponseResponseList meGetPayIns($page, $per_page, $currency)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = MarketPay\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new MarketPay\Api\MeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | 
$per_page = 56; // int | 
$currency = "currency_example"; // string | 

try {
    $result = $apiInstance->meGetPayIns($page, $per_page, $currency);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeApi->meGetPayIns: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**|  | [optional]
 **per_page** | **int**|  | [optional]
 **currency** | **string**|  | [optional]

### Return type

[**\MarketPay\Model\TransferMethodsResponseResponseList**](../Model/TransferMethodsResponseResponseList.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **meGet_0**
> \MarketPay\Model\WalletClientInstrumentResponse meGet_0($currency)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = MarketPay\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new MarketPay\Api\MeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$currency = "currency_example"; // string | 

try {
    $result = $apiInstance->meGet_0($currency);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeApi->meGet_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **currency** | **string**|  |

### Return type

[**\MarketPay\Model\WalletClientInstrumentResponse**](../Model/WalletClientInstrumentResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

