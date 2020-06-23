# MarketPay\PayInsPluginApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**payInsPluginPluginClientGetPayIn**](PayInsPluginApi.md#payInsPluginPluginClientGetPayIn) | **GET** /v2.1/PayInsPlugin/payments/{PayInId} | 
[**payInsPluginPluginClientPayInPost**](PayInsPluginApi.md#payInsPluginPluginClientPayInPost) | **POST** /v2.1/PayInsPlugin/payments | 


# **payInsPluginPluginClientGetPayIn**
> \MarketPay\Model\PluginPayInResponse payInsPluginPluginClientGetPayIn($pay_in_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = MarketPay\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new MarketPay\Api\PayInsPluginApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pay_in_id = 789; // int | 

try {
    $result = $apiInstance->payInsPluginPluginClientGetPayIn($pay_in_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayInsPluginApi->payInsPluginPluginClientGetPayIn: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pay_in_id** | **int**|  |

### Return type

[**\MarketPay\Model\PluginPayInResponse**](../Model/PluginPayInResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **payInsPluginPluginClientPayInPost**
> \MarketPay\Model\PluginPayInResponse payInsPluginPluginClientPayInPost($body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = MarketPay\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new MarketPay\Api\PayInsPluginApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \MarketPay\Model\PluginPayInPost(); // \MarketPay\Model\PluginPayInPost | 

try {
    $result = $apiInstance->payInsPluginPluginClientPayInPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayInsPluginApi->payInsPluginPluginClientPayInPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\MarketPay\Model\PluginPayInPost**](../Model/PluginPayInPost.md)|  | [optional]

### Return type

[**\MarketPay\Model\PluginPayInResponse**](../Model/PluginPayInResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

