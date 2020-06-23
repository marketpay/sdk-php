# MarketPay\PayInsClientApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**payInsClientPluginClientCancelRefund**](PayInsClientApi.md#payInsClientPluginClientCancelRefund) | **POST** /v2.1/PayInsClient/refunds/{RefundId}/cancel | 
[**payInsClientPluginClientConfirmPayIn**](PayInsClientApi.md#payInsClientPluginClientConfirmPayIn) | **POST** /v2.1/PayInsClient/payments/{PayInId}/confirm | 
[**payInsClientPluginClientConfirmRefund**](PayInsClientApi.md#payInsClientPluginClientConfirmRefund) | **POST** /v2.1/PayInsClient/refunds/{RefundId}/confirm | 
[**payInsClientPluginClientGetPayment**](PayInsClientApi.md#payInsClientPluginClientGetPayment) | **GET** /v2.1/PayInsClient/payments/{PayInId} | 
[**payInsClientPluginClientGetRefund**](PayInsClientApi.md#payInsClientPluginClientGetRefund) | **GET** /v2.1/PayInsClient/refunds/{RefundId} | 
[**payInsClientPluginClientPayInCreatePost**](PayInsClientApi.md#payInsClientPluginClientPayInCreatePost) | **POST** /v2.1/PayInsClient/payments | 
[**payInsClientPluginClientPostRefund**](PayInsClientApi.md#payInsClientPluginClientPostRefund) | **POST** /v2.1/PayInsClient/payments/{PayInId}/refunds | 


# **payInsClientPluginClientCancelRefund**
> \MarketPay\Model\PluginPayInResponse payInsClientPluginClientCancelRefund($refund_id, $body)



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
$refund_id = 789; // int | 
$body = new \MarketPay\Model\PluginRefundPostCancel(); // \MarketPay\Model\PluginRefundPostCancel | 

try {
    $result = $apiInstance->payInsClientPluginClientCancelRefund($refund_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayInsClientApi->payInsClientPluginClientCancelRefund: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **refund_id** | **int**|  |
 **body** | [**\MarketPay\Model\PluginRefundPostCancel**](../Model/PluginRefundPostCancel.md)|  | [optional]

### Return type

[**\MarketPay\Model\PluginPayInResponse**](../Model/PluginPayInResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **payInsClientPluginClientConfirmPayIn**
> \MarketPay\Model\PluginPayInResponse payInsClientPluginClientConfirmPayIn($pay_in_id, $body)



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
$body = new \MarketPay\Model\PluginPayInPostConfirm(); // \MarketPay\Model\PluginPayInPostConfirm | 

try {
    $result = $apiInstance->payInsClientPluginClientConfirmPayIn($pay_in_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayInsClientApi->payInsClientPluginClientConfirmPayIn: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pay_in_id** | **int**|  |
 **body** | [**\MarketPay\Model\PluginPayInPostConfirm**](../Model/PluginPayInPostConfirm.md)|  | [optional]

### Return type

[**\MarketPay\Model\PluginPayInResponse**](../Model/PluginPayInResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **payInsClientPluginClientConfirmRefund**
> \MarketPay\Model\PluginPayInResponse payInsClientPluginClientConfirmRefund($refund_id, $body)



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
$refund_id = 789; // int | 
$body = new \MarketPay\Model\PluginRefundPostConfirm(); // \MarketPay\Model\PluginRefundPostConfirm | 

try {
    $result = $apiInstance->payInsClientPluginClientConfirmRefund($refund_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayInsClientApi->payInsClientPluginClientConfirmRefund: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **refund_id** | **int**|  |
 **body** | [**\MarketPay\Model\PluginRefundPostConfirm**](../Model/PluginRefundPostConfirm.md)|  | [optional]

### Return type

[**\MarketPay\Model\PluginPayInResponse**](../Model/PluginPayInResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **payInsClientPluginClientGetPayment**
> \MarketPay\Model\PluginPayInResponse payInsClientPluginClientGetPayment($pay_in_id)



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

[**\MarketPay\Model\PluginPayInResponse**](../Model/PluginPayInResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **payInsClientPluginClientGetRefund**
> \MarketPay\Model\PluginRefundResponse payInsClientPluginClientGetRefund($refund_id)



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
$refund_id = 789; // int | 

try {
    $result = $apiInstance->payInsClientPluginClientGetRefund($refund_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayInsClientApi->payInsClientPluginClientGetRefund: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **refund_id** | **int**|  |

### Return type

[**\MarketPay\Model\PluginRefundResponse**](../Model/PluginRefundResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **payInsClientPluginClientPayInCreatePost**
> \MarketPay\Model\PluginPayInResponse payInsClientPluginClientPayInCreatePost($x_webhook, $body)



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
$x_webhook = "x_webhook_example"; // string | 
$body = new \MarketPay\Model\PluginPayInPost(); // \MarketPay\Model\PluginPayInPost | 

try {
    $result = $apiInstance->payInsClientPluginClientPayInCreatePost($x_webhook, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayInsClientApi->payInsClientPluginClientPayInCreatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_webhook** | **string**|  | [optional]
 **body** | [**\MarketPay\Model\PluginPayInPost**](../Model/PluginPayInPost.md)|  | [optional]

### Return type

[**\MarketPay\Model\PluginPayInResponse**](../Model/PluginPayInResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **payInsClientPluginClientPostRefund**
> \MarketPay\Model\PluginRefundResponse payInsClientPluginClientPostRefund($pay_in_id, $x_webhook, $body)



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
$x_webhook = "x_webhook_example"; // string | 
$body = new \MarketPay\Model\PluginRefundPost(); // \MarketPay\Model\PluginRefundPost | 

try {
    $result = $apiInstance->payInsClientPluginClientPostRefund($pay_in_id, $x_webhook, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayInsClientApi->payInsClientPluginClientPostRefund: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pay_in_id** | **int**|  |
 **x_webhook** | **string**|  | [optional]
 **body** | [**\MarketPay\Model\PluginRefundPost**](../Model/PluginRefundPost.md)|  | [optional]

### Return type

[**\MarketPay\Model\PluginRefundResponse**](../Model/PluginRefundResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

