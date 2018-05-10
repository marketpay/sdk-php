# Swagger\Client\PayInsAddonPaymentsApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**payInsAddonPaymentsAddonPaymentsGetPayment**](PayInsAddonPaymentsApi.md#payInsAddonPaymentsAddonPaymentsGetPayment) | **GET** /v2.01/PayInsAddonPayments/payments/{PayInId} | 
[**payInsAddonPaymentsAddonPaymentsGetPreauthorization**](PayInsAddonPaymentsApi.md#payInsAddonPaymentsAddonPaymentsGetPreauthorization) | **GET** /v2.01/PayInsAddonPayments/preauthorizations/{PreauthorizationId} | 
[**payInsAddonPaymentsAddonPaymentsPostPaymentByWeb**](PayInsAddonPaymentsApi.md#payInsAddonPaymentsAddonPaymentsPostPaymentByWeb) | **POST** /v2.01/PayInsAddonPayments/payments/web | 
[**payInsAddonPaymentsAddonPaymentsPostPreauthorizationByWeb**](PayInsAddonPaymentsApi.md#payInsAddonPaymentsAddonPaymentsPostPreauthorizationByWeb) | **POST** /v2.01/PayInsAddonPayments/preauthorizations/web | 
[**payInsAddonPaymentsAddonPaymentsPostPreauthorizationCancellation**](PayInsAddonPaymentsApi.md#payInsAddonPaymentsAddonPaymentsPostPreauthorizationCancellation) | **POST** /v2.01/PayInsAddonPayments/preauthorizations/{PreauthorizationId}/cancellation | 
[**payInsAddonPaymentsAddonPaymentsPostPreauthorizationConfirmation**](PayInsAddonPaymentsApi.md#payInsAddonPaymentsAddonPaymentsPostPreauthorizationConfirmation) | **POST** /v2.01/PayInsAddonPayments/preauthorizations/{PreauthorizationId}/confirmation | 
[**payInsAddonPaymentsAddonPaymentsPostRefund**](PayInsAddonPaymentsApi.md#payInsAddonPaymentsAddonPaymentsPostRefund) | **POST** /v2.01/PayInsAddonPayments/payments/{PayInId}/refunds | 


# **payInsAddonPaymentsAddonPaymentsGetPayment**
> \Swagger\Client\Model\AddonPaymentsPayInsResponse payInsAddonPaymentsAddonPaymentsGetPayment($pay_in_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\PayInsAddonPaymentsApi(
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

[**\Swagger\Client\Model\AddonPaymentsPayInsResponse**](../Model/AddonPaymentsPayInsResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **payInsAddonPaymentsAddonPaymentsGetPreauthorization**
> \Swagger\Client\Model\AddonPaymentsPreauthorizeResponse payInsAddonPaymentsAddonPaymentsGetPreauthorization($preauthorization_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\PayInsAddonPaymentsApi(
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

[**\Swagger\Client\Model\AddonPaymentsPreauthorizeResponse**](../Model/AddonPaymentsPreauthorizeResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **payInsAddonPaymentsAddonPaymentsPostPaymentByWeb**
> \Swagger\Client\Model\AddonPaymentsPayByWebResponse payInsAddonPaymentsAddonPaymentsPostPaymentByWeb($x_webhook, $addon_payments_pay_in)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\PayInsAddonPaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_webhook = "x_webhook_example"; // string | 
$addon_payments_pay_in = new \Swagger\Client\Model\AddonPaymentsPayByWebPost(); // \Swagger\Client\Model\AddonPaymentsPayByWebPost | 

try {
    $result = $apiInstance->payInsAddonPaymentsAddonPaymentsPostPaymentByWeb($x_webhook, $addon_payments_pay_in);
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
 **addon_payments_pay_in** | [**\Swagger\Client\Model\AddonPaymentsPayByWebPost**](../Model/AddonPaymentsPayByWebPost.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\AddonPaymentsPayByWebResponse**](../Model/AddonPaymentsPayByWebResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **payInsAddonPaymentsAddonPaymentsPostPreauthorizationByWeb**
> \Swagger\Client\Model\AddonPaymentsPreauthorizeByWebResponse payInsAddonPaymentsAddonPaymentsPostPreauthorizationByWeb($addon_payments_preauthorization)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\PayInsAddonPaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$addon_payments_preauthorization = new \Swagger\Client\Model\AddonPaymentsPreauthorizeByWebPost(); // \Swagger\Client\Model\AddonPaymentsPreauthorizeByWebPost | 

try {
    $result = $apiInstance->payInsAddonPaymentsAddonPaymentsPostPreauthorizationByWeb($addon_payments_preauthorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayInsAddonPaymentsApi->payInsAddonPaymentsAddonPaymentsPostPreauthorizationByWeb: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **addon_payments_preauthorization** | [**\Swagger\Client\Model\AddonPaymentsPreauthorizeByWebPost**](../Model/AddonPaymentsPreauthorizeByWebPost.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\AddonPaymentsPreauthorizeByWebResponse**](../Model/AddonPaymentsPreauthorizeByWebResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **payInsAddonPaymentsAddonPaymentsPostPreauthorizationCancellation**
> \Swagger\Client\Model\AddonPaymentsPreauthorizationCancellationResponse payInsAddonPaymentsAddonPaymentsPostPreauthorizationCancellation($preauthorization_id, $addon_payments_preauthorization_cancellation)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\PayInsAddonPaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$preauthorization_id = 789; // int | 
$addon_payments_preauthorization_cancellation = new \Swagger\Client\Model\AddonPaymentsPreauthorizationCancellationPost(); // \Swagger\Client\Model\AddonPaymentsPreauthorizationCancellationPost | 

try {
    $result = $apiInstance->payInsAddonPaymentsAddonPaymentsPostPreauthorizationCancellation($preauthorization_id, $addon_payments_preauthorization_cancellation);
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
 **addon_payments_preauthorization_cancellation** | [**\Swagger\Client\Model\AddonPaymentsPreauthorizationCancellationPost**](../Model/AddonPaymentsPreauthorizationCancellationPost.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\AddonPaymentsPreauthorizationCancellationResponse**](../Model/AddonPaymentsPreauthorizationCancellationResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **payInsAddonPaymentsAddonPaymentsPostPreauthorizationConfirmation**
> \Swagger\Client\Model\AddonPaymentsPreauthorizationConfirmationResponse payInsAddonPaymentsAddonPaymentsPostPreauthorizationConfirmation($preauthorization_id, $addon_payments_preauthorization_confirmation)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\PayInsAddonPaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$preauthorization_id = 789; // int | 
$addon_payments_preauthorization_confirmation = new \Swagger\Client\Model\AddonPaymentsPreauthorizationConfirmationPost(); // \Swagger\Client\Model\AddonPaymentsPreauthorizationConfirmationPost | 

try {
    $result = $apiInstance->payInsAddonPaymentsAddonPaymentsPostPreauthorizationConfirmation($preauthorization_id, $addon_payments_preauthorization_confirmation);
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
 **addon_payments_preauthorization_confirmation** | [**\Swagger\Client\Model\AddonPaymentsPreauthorizationConfirmationPost**](../Model/AddonPaymentsPreauthorizationConfirmationPost.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\AddonPaymentsPreauthorizationConfirmationResponse**](../Model/AddonPaymentsPreauthorizationConfirmationResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **payInsAddonPaymentsAddonPaymentsPostRefund**
> \Swagger\Client\Model\AddonPaymentsRefundResponse payInsAddonPaymentsAddonPaymentsPostRefund($pay_in_id, $addon_payments_refund)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\PayInsAddonPaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pay_in_id = 789; // int | 
$addon_payments_refund = new \Swagger\Client\Model\AddonPaymentsRefundPost(); // \Swagger\Client\Model\AddonPaymentsRefundPost | 

try {
    $result = $apiInstance->payInsAddonPaymentsAddonPaymentsPostRefund($pay_in_id, $addon_payments_refund);
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
 **addon_payments_refund** | [**\Swagger\Client\Model\AddonPaymentsRefundPost**](../Model/AddonPaymentsRefundPost.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\AddonPaymentsRefundResponse**](../Model/AddonPaymentsRefundResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

