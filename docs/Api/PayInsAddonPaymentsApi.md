# MarketPay\PayInsAddonPaymentsApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**payInsAddonPaymentsAddonPaymentsGetPayment**](PayInsAddonPaymentsApi.md#payInsAddonPaymentsAddonPaymentsGetPayment) | **GET** /v2.1/PayInsAddonPayments/payments/{PayInId} | 
[**payInsAddonPaymentsAddonPaymentsGetPreauthorization**](PayInsAddonPaymentsApi.md#payInsAddonPaymentsAddonPaymentsGetPreauthorization) | **GET** /v2.1/PayInsAddonPayments/preauthorizations/{PreauthorizationId} | 
[**payInsAddonPaymentsAddonPaymentsPostPaymentByWeb**](PayInsAddonPaymentsApi.md#payInsAddonPaymentsAddonPaymentsPostPaymentByWeb) | **POST** /v2.1/PayInsAddonPayments/payments/web | 
[**payInsAddonPaymentsAddonPaymentsPostPaymentDirect**](PayInsAddonPaymentsApi.md#payInsAddonPaymentsAddonPaymentsPostPaymentDirect) | **POST** /v2.1/PayInsAddonPayments/payments/direct | 
[**payInsAddonPaymentsAddonPaymentsPostPreauthorizationByWeb**](PayInsAddonPaymentsApi.md#payInsAddonPaymentsAddonPaymentsPostPreauthorizationByWeb) | **POST** /v2.1/PayInsAddonPayments/preauthorizations/web | 
[**payInsAddonPaymentsAddonPaymentsPostPreauthorizationCancellation**](PayInsAddonPaymentsApi.md#payInsAddonPaymentsAddonPaymentsPostPreauthorizationCancellation) | **POST** /v2.1/PayInsAddonPayments/preauthorizations/{PreauthorizationId}/cancellation | 
[**payInsAddonPaymentsAddonPaymentsPostPreauthorizationConfirmation**](PayInsAddonPaymentsApi.md#payInsAddonPaymentsAddonPaymentsPostPreauthorizationConfirmation) | **POST** /v2.1/PayInsAddonPayments/preauthorizations/{PreauthorizationId}/confirmation | 
[**payInsAddonPaymentsAddonPaymentsPostRefund**](PayInsAddonPaymentsApi.md#payInsAddonPaymentsAddonPaymentsPostRefund) | **POST** /v2.1/PayInsAddonPayments/payments/{PayInId}/refunds | 


# **payInsAddonPaymentsAddonPaymentsGetPayment**
> \MarketPay\Model\AddonPaymentsPayInsResponse payInsAddonPaymentsAddonPaymentsGetPayment($pay_in_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = MarketPay\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new MarketPay\Api\PayInsAddonPaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pay_in_id = 789; // int | 

try {
    $result = $apiInstance->payInsAddonPaymentsAddonPaymentsGetPayment($pay_in_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayInsAddonPaymentsApi->payInsAddonPaymentsAddonPaymentsGetPayment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pay_in_id** | **int**|  |

### Return type

[**\MarketPay\Model\AddonPaymentsPayInsResponse**](../Model/AddonPaymentsPayInsResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **payInsAddonPaymentsAddonPaymentsGetPreauthorization**
> \MarketPay\Model\AddonPaymentsPreauthorizeResponse payInsAddonPaymentsAddonPaymentsGetPreauthorization($preauthorization_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = MarketPay\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new MarketPay\Api\PayInsAddonPaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$preauthorization_id = 789; // int | 

try {
    $result = $apiInstance->payInsAddonPaymentsAddonPaymentsGetPreauthorization($preauthorization_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayInsAddonPaymentsApi->payInsAddonPaymentsAddonPaymentsGetPreauthorization: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **preauthorization_id** | **int**|  |

### Return type

[**\MarketPay\Model\AddonPaymentsPreauthorizeResponse**](../Model/AddonPaymentsPreauthorizeResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **payInsAddonPaymentsAddonPaymentsPostPaymentByWeb**
> \MarketPay\Model\AddonPaymentsPayByWebResponse payInsAddonPaymentsAddonPaymentsPostPaymentByWeb($x_webhook, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = MarketPay\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new MarketPay\Api\PayInsAddonPaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_webhook = "x_webhook_example"; // string | 
$body = new \MarketPay\Model\AddonPaymentsPayByWebPost(); // \MarketPay\Model\AddonPaymentsPayByWebPost | 

try {
    $result = $apiInstance->payInsAddonPaymentsAddonPaymentsPostPaymentByWeb($x_webhook, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayInsAddonPaymentsApi->payInsAddonPaymentsAddonPaymentsPostPaymentByWeb: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_webhook** | **string**|  | [optional]
 **body** | [**\MarketPay\Model\AddonPaymentsPayByWebPost**](../Model/AddonPaymentsPayByWebPost.md)|  | [optional]

### Return type

[**\MarketPay\Model\AddonPaymentsPayByWebResponse**](../Model/AddonPaymentsPayByWebResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **payInsAddonPaymentsAddonPaymentsPostPaymentDirect**
> \MarketPay\Model\AddonPaymentsPayDirectResponse payInsAddonPaymentsAddonPaymentsPostPaymentDirect($body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = MarketPay\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new MarketPay\Api\PayInsAddonPaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \MarketPay\Model\AddonPaymentsPayDirectPost(); // \MarketPay\Model\AddonPaymentsPayDirectPost | 

try {
    $result = $apiInstance->payInsAddonPaymentsAddonPaymentsPostPaymentDirect($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayInsAddonPaymentsApi->payInsAddonPaymentsAddonPaymentsPostPaymentDirect: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\MarketPay\Model\AddonPaymentsPayDirectPost**](../Model/AddonPaymentsPayDirectPost.md)|  | [optional]

### Return type

[**\MarketPay\Model\AddonPaymentsPayDirectResponse**](../Model/AddonPaymentsPayDirectResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **payInsAddonPaymentsAddonPaymentsPostPreauthorizationByWeb**
> \MarketPay\Model\AddonPaymentsPreauthorizeByWebResponse payInsAddonPaymentsAddonPaymentsPostPreauthorizationByWeb($body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = MarketPay\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new MarketPay\Api\PayInsAddonPaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \MarketPay\Model\AddonPaymentsPreauthorizeByWebPost(); // \MarketPay\Model\AddonPaymentsPreauthorizeByWebPost | 

try {
    $result = $apiInstance->payInsAddonPaymentsAddonPaymentsPostPreauthorizationByWeb($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayInsAddonPaymentsApi->payInsAddonPaymentsAddonPaymentsPostPreauthorizationByWeb: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\MarketPay\Model\AddonPaymentsPreauthorizeByWebPost**](../Model/AddonPaymentsPreauthorizeByWebPost.md)|  | [optional]

### Return type

[**\MarketPay\Model\AddonPaymentsPreauthorizeByWebResponse**](../Model/AddonPaymentsPreauthorizeByWebResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **payInsAddonPaymentsAddonPaymentsPostPreauthorizationCancellation**
> \MarketPay\Model\AddonPaymentsPreauthorizationCancellationResponse payInsAddonPaymentsAddonPaymentsPostPreauthorizationCancellation($preauthorization_id, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = MarketPay\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new MarketPay\Api\PayInsAddonPaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$preauthorization_id = 789; // int | 
$body = new \MarketPay\Model\AddonPaymentsPreauthorizationCancellationPost(); // \MarketPay\Model\AddonPaymentsPreauthorizationCancellationPost | 

try {
    $result = $apiInstance->payInsAddonPaymentsAddonPaymentsPostPreauthorizationCancellation($preauthorization_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayInsAddonPaymentsApi->payInsAddonPaymentsAddonPaymentsPostPreauthorizationCancellation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **preauthorization_id** | **int**|  |
 **body** | [**\MarketPay\Model\AddonPaymentsPreauthorizationCancellationPost**](../Model/AddonPaymentsPreauthorizationCancellationPost.md)|  | [optional]

### Return type

[**\MarketPay\Model\AddonPaymentsPreauthorizationCancellationResponse**](../Model/AddonPaymentsPreauthorizationCancellationResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **payInsAddonPaymentsAddonPaymentsPostPreauthorizationConfirmation**
> \MarketPay\Model\AddonPaymentsPreauthorizationConfirmationResponse payInsAddonPaymentsAddonPaymentsPostPreauthorizationConfirmation($preauthorization_id, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = MarketPay\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new MarketPay\Api\PayInsAddonPaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$preauthorization_id = 789; // int | 
$body = new \MarketPay\Model\AddonPaymentsPreauthorizationConfirmationPost(); // \MarketPay\Model\AddonPaymentsPreauthorizationConfirmationPost | 

try {
    $result = $apiInstance->payInsAddonPaymentsAddonPaymentsPostPreauthorizationConfirmation($preauthorization_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayInsAddonPaymentsApi->payInsAddonPaymentsAddonPaymentsPostPreauthorizationConfirmation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **preauthorization_id** | **int**|  |
 **body** | [**\MarketPay\Model\AddonPaymentsPreauthorizationConfirmationPost**](../Model/AddonPaymentsPreauthorizationConfirmationPost.md)|  | [optional]

### Return type

[**\MarketPay\Model\AddonPaymentsPreauthorizationConfirmationResponse**](../Model/AddonPaymentsPreauthorizationConfirmationResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **payInsAddonPaymentsAddonPaymentsPostRefund**
> \MarketPay\Model\AddonPaymentsRefundResponse payInsAddonPaymentsAddonPaymentsPostRefund($pay_in_id, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = MarketPay\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new MarketPay\Api\PayInsAddonPaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pay_in_id = 789; // int | 
$body = new \MarketPay\Model\AddonPaymentsRefundPost(); // \MarketPay\Model\AddonPaymentsRefundPost | 

try {
    $result = $apiInstance->payInsAddonPaymentsAddonPaymentsPostRefund($pay_in_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayInsAddonPaymentsApi->payInsAddonPaymentsAddonPaymentsPostRefund: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pay_in_id** | **int**|  |
 **body** | [**\MarketPay\Model\AddonPaymentsRefundPost**](../Model/AddonPaymentsRefundPost.md)|  | [optional]

### Return type

[**\MarketPay\Model\AddonPaymentsRefundResponse**](../Model/AddonPaymentsRefundResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

