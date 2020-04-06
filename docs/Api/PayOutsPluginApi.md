# MarketPay\PayOutsPluginApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**payOutsPluginPluginPayOutPost**](PayOutsPluginApi.md#payOutsPluginPluginPayOutPost) | **POST** /v2.1/PayOutsPlugin | 
[**payOutsPluginPlugingGetPayOut**](PayOutsPluginApi.md#payOutsPluginPlugingGetPayOut) | **GET** /v2.1/PayOutsPlugin/{PayOutId} | 


# **payOutsPluginPluginPayOutPost**
> \MarketPay\Model\PluginPayOutResponse payOutsPluginPluginPayOutPost($body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = MarketPay\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new MarketPay\Api\PayOutsPluginApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \MarketPay\Model\PluginPayOutPost(); // \MarketPay\Model\PluginPayOutPost | 

try {
    $result = $apiInstance->payOutsPluginPluginPayOutPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayOutsPluginApi->payOutsPluginPluginPayOutPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\MarketPay\Model\PluginPayOutPost**](../Model/PluginPayOutPost.md)|  | [optional]

### Return type

[**\MarketPay\Model\PluginPayOutResponse**](../Model/PluginPayOutResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **payOutsPluginPlugingGetPayOut**
> \MarketPay\Model\PluginPayOutResponse payOutsPluginPlugingGetPayOut($pay_out_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = MarketPay\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new MarketPay\Api\PayOutsPluginApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pay_out_id = 789; // int | 

try {
    $result = $apiInstance->payOutsPluginPlugingGetPayOut($pay_out_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayOutsPluginApi->payOutsPluginPlugingGetPayOut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pay_out_id** | **int**|  |

### Return type

[**\MarketPay\Model\PluginPayOutResponse**](../Model/PluginPayOutResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

