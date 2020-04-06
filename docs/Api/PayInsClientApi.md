# MarketPay\PayInsClientApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**payInsClientPluginClientConfirmPayIn**](PayInsClientApi.md#payInsClientPluginClientConfirmPayIn) | **POST** /v2.1/PayInsClient/payments/{IntentId}/confirm | 
[**payInsClientPluginClientGetPayment**](PayInsClientApi.md#payInsClientPluginClientGetPayment) | **GET** /v2.1/PayInsClient/payments/{PayInId} | 
[**payInsClientPluginClientPayInCreatePost**](PayInsClientApi.md#payInsClientPluginClientPayInCreatePost) | **POST** /v2.1/PayInsClient/payments | 


# **payInsClientPluginClientConfirmPayIn**
> \MarketPay\Model\PluginPayInsResponse payInsClientPluginClientConfirmPayIn($intent_id, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = MarketPay\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new MarketPay\Api\PayInsClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$intent_id = 789; // int | 
$body = new \MarketPay\Model\PluginPayInPostConfirm(); // \MarketPay\Model\PluginPayInPostConfirm | 

try {
    $result = $apiInstance->payInsClientPluginClientConfirmPayIn($intent_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayInsClientApi->payInsClientPluginClientConfirmPayIn: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **intent_id** | **int**|  |
 **body** | [**\MarketPay\Model\PluginPayInPostConfirm**](../Model/PluginPayInPostConfirm.md)|  | [optional]

### Return type

[**\MarketPay\Model\PluginPayInsResponse**](../Model/PluginPayInsResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **payInsClientPluginClientGetPayment**
> \MarketPay\Model\PluginPayInsResponse payInsClientPluginClientGetPayment($pay_in_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = MarketPay\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new MarketPay\Api\PayInsClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pay_in_id = 789; // int | 

try {
    $result = $apiInstance->payInsClientPluginClientGetPayment($pay_in_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayInsClientApi->payInsClientPluginClientGetPayment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pay_in_id** | **int**|  |

### Return type

[**\MarketPay\Model\PluginPayInsResponse**](../Model/PluginPayInsResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **payInsClientPluginClientPayInCreatePost**
> \MarketPay\Model\PluginPayInsResponse payInsClientPluginClientPayInCreatePost($body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = MarketPay\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new MarketPay\Api\PayInsClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \MarketPay\Model\PluginPayInPost(); // \MarketPay\Model\PluginPayInPost | 

try {
    $result = $apiInstance->payInsClientPluginClientPayInCreatePost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayInsClientApi->payInsClientPluginClientPayInCreatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\MarketPay\Model\PluginPayInPost**](../Model/PluginPayInPost.md)|  | [optional]

### Return type

[**\MarketPay\Model\PluginPayInsResponse**](../Model/PluginPayInsResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

