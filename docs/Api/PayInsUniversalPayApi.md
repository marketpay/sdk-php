# Swagger\Client\PayInsUniversalPayApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**payInsUniversalPayGetUniversalPayTokenization**](PayInsUniversalPayApi.md#payInsUniversalPayGetUniversalPayTokenization) | **GET** /v2.1/PayInsUniversalPay/token/{TokenId} | 
[**payInsUniversalPayUniversalPayGetPayment**](PayInsUniversalPayApi.md#payInsUniversalPayUniversalPayGetPayment) | **GET** /v2.1/PayInsUniversalPay/payments/{PayInId} | 
[**payInsUniversalPayUniversalPayPostPaymentByWeb**](PayInsUniversalPayApi.md#payInsUniversalPayUniversalPayPostPaymentByWeb) | **POST** /v2.1/PayInsUniversalPay/payments/web | 
[**payInsUniversalPayUniversalPayPostRefund**](PayInsUniversalPayApi.md#payInsUniversalPayUniversalPayPostRefund) | **POST** /v2.1/PayInsUniversalPay/payments/{PayInId}/refunds | 
[**payInsUniversalPayUniversalPaySaveCard**](PayInsUniversalPayApi.md#payInsUniversalPayUniversalPaySaveCard) | **POST** /v2.1/PayInsUniversalPay/token/web | 


# **payInsUniversalPayGetUniversalPayTokenization**
> \Swagger\Client\Model\UniversalPayTokenizationResponse payInsUniversalPayGetUniversalPayTokenization($token_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\PayInsUniversalPayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token_id = 789; // int | 

try {
    $result = $apiInstance->payInsUniversalPayGetUniversalPayTokenization($token_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayInsUniversalPayApi->payInsUniversalPayGetUniversalPayTokenization: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token_id** | **int**|  |

### Return type

[**\Swagger\Client\Model\UniversalPayTokenizationResponse**](../Model/UniversalPayTokenizationResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;odata.metadata=minimal;odata.streaming=true, application/json;odata.metadata=minimal;odata.streaming=false, application/json;odata.metadata=minimal, application/json;odata.metadata=full;odata.streaming=true, application/json;odata.metadata=full;odata.streaming=false, application/json;odata.metadata=full, application/json;odata.metadata=none;odata.streaming=true, application/json;odata.metadata=none;odata.streaming=false, application/json;odata.metadata=none, application/json;odata.streaming=true, application/json;odata.streaming=false, application/json, application/xml, application/prs.odatatestxx-odata, text/plain, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **payInsUniversalPayUniversalPayGetPayment**
> \Swagger\Client\Model\UniversalPayPayInsResponse payInsUniversalPayUniversalPayGetPayment($pay_in_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\PayInsUniversalPayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pay_in_id = 789; // int | 

try {
    $result = $apiInstance->payInsUniversalPayUniversalPayGetPayment($pay_in_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayInsUniversalPayApi->payInsUniversalPayUniversalPayGetPayment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pay_in_id** | **int**|  |

### Return type

[**\Swagger\Client\Model\UniversalPayPayInsResponse**](../Model/UniversalPayPayInsResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;odata.metadata=minimal;odata.streaming=true, application/json;odata.metadata=minimal;odata.streaming=false, application/json;odata.metadata=minimal, application/json;odata.metadata=full;odata.streaming=true, application/json;odata.metadata=full;odata.streaming=false, application/json;odata.metadata=full, application/json;odata.metadata=none;odata.streaming=true, application/json;odata.metadata=none;odata.streaming=false, application/json;odata.metadata=none, application/json;odata.streaming=true, application/json;odata.streaming=false, application/json, application/xml, application/prs.odatatestxx-odata, text/plain, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **payInsUniversalPayUniversalPayPostPaymentByWeb**
> \Swagger\Client\Model\UniversalPayPayByWebResponse payInsUniversalPayUniversalPayPostPaymentByWeb($universal_pay_pay_in)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\PayInsUniversalPayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$universal_pay_pay_in = new \Swagger\Client\Model\UniversalPayPayByWebPost(); // \Swagger\Client\Model\UniversalPayPayByWebPost | 

try {
    $result = $apiInstance->payInsUniversalPayUniversalPayPostPaymentByWeb($universal_pay_pay_in);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayInsUniversalPayApi->payInsUniversalPayUniversalPayPostPaymentByWeb: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **universal_pay_pay_in** | [**\Swagger\Client\Model\UniversalPayPayByWebPost**](../Model/UniversalPayPayByWebPost.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\UniversalPayPayByWebResponse**](../Model/UniversalPayPayByWebResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json;odata.metadata=minimal;odata.streaming=true, application/json;odata.metadata=minimal;odata.streaming=false, application/json;odata.metadata=minimal, application/json;odata.metadata=full;odata.streaming=true, application/json;odata.metadata=full;odata.streaming=false, application/json;odata.metadata=full, application/json;odata.metadata=none;odata.streaming=true, application/json;odata.metadata=none;odata.streaming=false, application/json;odata.metadata=none, application/json;odata.streaming=true, application/json;odata.streaming=false, application/json, application/xml, application/prs.odatatestxx-odata, application/json-patch+json, text/json, application/_*+json
 - **Accept**: application/json;odata.metadata=minimal;odata.streaming=true, application/json;odata.metadata=minimal;odata.streaming=false, application/json;odata.metadata=minimal, application/json;odata.metadata=full;odata.streaming=true, application/json;odata.metadata=full;odata.streaming=false, application/json;odata.metadata=full, application/json;odata.metadata=none;odata.streaming=true, application/json;odata.metadata=none;odata.streaming=false, application/json;odata.metadata=none, application/json;odata.streaming=true, application/json;odata.streaming=false, application/json, application/xml, application/prs.odatatestxx-odata, text/plain, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **payInsUniversalPayUniversalPayPostRefund**
> \Swagger\Client\Model\UniversalPayRefundResponse payInsUniversalPayUniversalPayPostRefund($pay_in_id, $universal_pay_refund)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\PayInsUniversalPayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pay_in_id = 789; // int | 
$universal_pay_refund = new \Swagger\Client\Model\UniversalPayRefundPost(); // \Swagger\Client\Model\UniversalPayRefundPost | 

try {
    $result = $apiInstance->payInsUniversalPayUniversalPayPostRefund($pay_in_id, $universal_pay_refund);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayInsUniversalPayApi->payInsUniversalPayUniversalPayPostRefund: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pay_in_id** | **int**|  |
 **universal_pay_refund** | [**\Swagger\Client\Model\UniversalPayRefundPost**](../Model/UniversalPayRefundPost.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\UniversalPayRefundResponse**](../Model/UniversalPayRefundResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json;odata.metadata=minimal;odata.streaming=true, application/json;odata.metadata=minimal;odata.streaming=false, application/json;odata.metadata=minimal, application/json;odata.metadata=full;odata.streaming=true, application/json;odata.metadata=full;odata.streaming=false, application/json;odata.metadata=full, application/json;odata.metadata=none;odata.streaming=true, application/json;odata.metadata=none;odata.streaming=false, application/json;odata.metadata=none, application/json;odata.streaming=true, application/json;odata.streaming=false, application/json, application/xml, application/prs.odatatestxx-odata, application/json-patch+json, text/json, application/_*+json
 - **Accept**: application/json;odata.metadata=minimal;odata.streaming=true, application/json;odata.metadata=minimal;odata.streaming=false, application/json;odata.metadata=minimal, application/json;odata.metadata=full;odata.streaming=true, application/json;odata.metadata=full;odata.streaming=false, application/json;odata.metadata=full, application/json;odata.metadata=none;odata.streaming=true, application/json;odata.metadata=none;odata.streaming=false, application/json;odata.metadata=none, application/json;odata.streaming=true, application/json;odata.streaming=false, application/json, application/xml, application/prs.odatatestxx-odata, text/plain, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **payInsUniversalPayUniversalPaySaveCard**
> \Swagger\Client\Model\UniversalPayTokenizeByWebResponse payInsUniversalPayUniversalPaySaveCard($universal_pay_save_card)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\PayInsUniversalPayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$universal_pay_save_card = new \Swagger\Client\Model\UniversalPayTokenRequestPost(); // \Swagger\Client\Model\UniversalPayTokenRequestPost | 

try {
    $result = $apiInstance->payInsUniversalPayUniversalPaySaveCard($universal_pay_save_card);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayInsUniversalPayApi->payInsUniversalPayUniversalPaySaveCard: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **universal_pay_save_card** | [**\Swagger\Client\Model\UniversalPayTokenRequestPost**](../Model/UniversalPayTokenRequestPost.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\UniversalPayTokenizeByWebResponse**](../Model/UniversalPayTokenizeByWebResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json;odata.metadata=minimal;odata.streaming=true, application/json;odata.metadata=minimal;odata.streaming=false, application/json;odata.metadata=minimal, application/json;odata.metadata=full;odata.streaming=true, application/json;odata.metadata=full;odata.streaming=false, application/json;odata.metadata=full, application/json;odata.metadata=none;odata.streaming=true, application/json;odata.metadata=none;odata.streaming=false, application/json;odata.metadata=none, application/json;odata.streaming=true, application/json;odata.streaming=false, application/json, application/xml, application/prs.odatatestxx-odata, application/json-patch+json, text/json, application/_*+json
 - **Accept**: application/json;odata.metadata=minimal;odata.streaming=true, application/json;odata.metadata=minimal;odata.streaming=false, application/json;odata.metadata=minimal, application/json;odata.metadata=full;odata.streaming=true, application/json;odata.metadata=full;odata.streaming=false, application/json;odata.metadata=full, application/json;odata.metadata=none;odata.streaming=true, application/json;odata.metadata=none;odata.streaming=false, application/json;odata.metadata=none, application/json;odata.streaming=true, application/json;odata.streaming=false, application/json, application/xml, application/prs.odatatestxx-odata, text/plain, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

