# Swagger\Client\PluginTransferClientApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**pluginTransferClientPluginClientConfirmPayIn**](PluginTransferClientApi.md#pluginTransferClientPluginClientConfirmPayIn) | **POST** /v2.1/PayInsClient/payments/{IntentId}/confirm | 
[**pluginTransferClientPluginClientGetPayment**](PluginTransferClientApi.md#pluginTransferClientPluginClientGetPayment) | **GET** /v2.1/PayInsClient/payments/{PayInId} | 
[**pluginTransferClientPluginClientPayInCreatePost**](PluginTransferClientApi.md#pluginTransferClientPluginClientPayInCreatePost) | **POST** /v2.1/PayInsClient/payments | 


# **pluginTransferClientPluginClientConfirmPayIn**
> \Swagger\Client\Model\PluginPayInsResponse pluginTransferClientPluginClientConfirmPayIn($intent_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\PluginTransferClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$intent_id = 789; // int | 

try {
    $result = $apiInstance->pluginTransferClientPluginClientConfirmPayIn($intent_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PluginTransferClientApi->pluginTransferClientPluginClientConfirmPayIn: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **intent_id** | **int**|  |

### Return type

[**\Swagger\Client\Model\PluginPayInsResponse**](../Model/PluginPayInsResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;odata.metadata=minimal;odata.streaming=true, application/json;odata.metadata=minimal;odata.streaming=false, application/json;odata.metadata=minimal, application/json;odata.metadata=full;odata.streaming=true, application/json;odata.metadata=full;odata.streaming=false, application/json;odata.metadata=full, application/json;odata.metadata=none;odata.streaming=true, application/json;odata.metadata=none;odata.streaming=false, application/json;odata.metadata=none, application/json;odata.streaming=true, application/json;odata.streaming=false, application/json, application/xml, application/prs.odatatestxx-odata, text/plain, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pluginTransferClientPluginClientGetPayment**
> \Swagger\Client\Model\PluginPayInsResponse pluginTransferClientPluginClientGetPayment($pay_in_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\PluginTransferClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pay_in_id = 789; // int | 

try {
    $result = $apiInstance->pluginTransferClientPluginClientGetPayment($pay_in_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PluginTransferClientApi->pluginTransferClientPluginClientGetPayment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pay_in_id** | **int**|  |

### Return type

[**\Swagger\Client\Model\PluginPayInsResponse**](../Model/PluginPayInsResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;odata.metadata=minimal;odata.streaming=true, application/json;odata.metadata=minimal;odata.streaming=false, application/json;odata.metadata=minimal, application/json;odata.metadata=full;odata.streaming=true, application/json;odata.metadata=full;odata.streaming=false, application/json;odata.metadata=full, application/json;odata.metadata=none;odata.streaming=true, application/json;odata.metadata=none;odata.streaming=false, application/json;odata.metadata=none, application/json;odata.streaming=true, application/json;odata.streaming=false, application/json, application/xml, application/prs.odatatestxx-odata, text/plain, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pluginTransferClientPluginClientPayInCreatePost**
> \Swagger\Client\Model\PluginPayInsResponse pluginTransferClientPluginClientPayInCreatePost($plugin_pay_in)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\PluginTransferClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$plugin_pay_in = new \Swagger\Client\Model\PluginPayInPost(); // \Swagger\Client\Model\PluginPayInPost | 

try {
    $result = $apiInstance->pluginTransferClientPluginClientPayInCreatePost($plugin_pay_in);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PluginTransferClientApi->pluginTransferClientPluginClientPayInCreatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **plugin_pay_in** | [**\Swagger\Client\Model\PluginPayInPost**](../Model/PluginPayInPost.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\PluginPayInsResponse**](../Model/PluginPayInsResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json;odata.metadata=minimal;odata.streaming=true, application/json;odata.metadata=minimal;odata.streaming=false, application/json;odata.metadata=minimal, application/json;odata.metadata=full;odata.streaming=true, application/json;odata.metadata=full;odata.streaming=false, application/json;odata.metadata=full, application/json;odata.metadata=none;odata.streaming=true, application/json;odata.metadata=none;odata.streaming=false, application/json;odata.metadata=none, application/json;odata.streaming=true, application/json;odata.streaming=false, application/json, application/xml, application/prs.odatatestxx-odata, application/json-patch+json, text/json, application/_*+json
 - **Accept**: application/json;odata.metadata=minimal;odata.streaming=true, application/json;odata.metadata=minimal;odata.streaming=false, application/json;odata.metadata=minimal, application/json;odata.metadata=full;odata.streaming=true, application/json;odata.metadata=full;odata.streaming=false, application/json;odata.metadata=full, application/json;odata.metadata=none;odata.streaming=true, application/json;odata.metadata=none;odata.streaming=false, application/json;odata.metadata=none, application/json;odata.streaming=true, application/json;odata.streaming=false, application/json, application/xml, application/prs.odatatestxx-odata, text/plain, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

