# Swagger\Client\PayInsAplazameApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**payInsAplazameAplazameGetPayment**](PayInsAplazameApi.md#payInsAplazameAplazameGetPayment) | **GET** /v2.01/PayInsAplazame/payments/{PayInId} | 
[**payInsAplazameAplazamePostPaymentByWeb**](PayInsAplazameApi.md#payInsAplazameAplazamePostPaymentByWeb) | **POST** /v2.01/PayInsAplazame/payments/web | 
[**payInsAplazameRefund**](PayInsAplazameApi.md#payInsAplazameRefund) | **POST** /v2.01/PayInsAplazame/payments/{PayInId}/refunds | 


# **payInsAplazameAplazameGetPayment**
> \Swagger\Client\Model\AplazamePayInsResponse payInsAplazameAplazameGetPayment($pay_in_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\PayInsAplazameApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pay_in_id = "pay_in_id_example"; // string | 

try {
    $result = $apiInstance->payInsAplazameAplazameGetPayment($pay_in_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayInsAplazameApi->payInsAplazameAplazameGetPayment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pay_in_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\AplazamePayInsResponse**](../Model/AplazamePayInsResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **payInsAplazameAplazamePostPaymentByWeb**
> \Swagger\Client\Model\AplazamePayByWebResponse payInsAplazameAplazamePostPaymentByWeb($aplazame_pay_in)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\PayInsAplazameApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$aplazame_pay_in = new \Swagger\Client\Model\AplazamePayByWebPost(); // \Swagger\Client\Model\AplazamePayByWebPost | 

try {
    $result = $apiInstance->payInsAplazameAplazamePostPaymentByWeb($aplazame_pay_in);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayInsAplazameApi->payInsAplazameAplazamePostPaymentByWeb: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **aplazame_pay_in** | [**\Swagger\Client\Model\AplazamePayByWebPost**](../Model/AplazamePayByWebPost.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\AplazamePayByWebResponse**](../Model/AplazamePayByWebResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **payInsAplazameRefund**
> \Swagger\Client\Model\AplazameRefundResponse payInsAplazameRefund($pay_in_id, $aplazame_refund)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\PayInsAplazameApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pay_in_id = "pay_in_id_example"; // string | 
$aplazame_refund = new \Swagger\Client\Model\AplazameRefundPaymentPost(); // \Swagger\Client\Model\AplazameRefundPaymentPost | 

try {
    $result = $apiInstance->payInsAplazameRefund($pay_in_id, $aplazame_refund);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayInsAplazameApi->payInsAplazameRefund: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pay_in_id** | **string**|  |
 **aplazame_refund** | [**\Swagger\Client\Model\AplazameRefundPaymentPost**](../Model/AplazameRefundPaymentPost.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\AplazameRefundResponse**](../Model/AplazameRefundResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

