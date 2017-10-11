# MarketPay\PayInsRedsysApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**payInsRedsysRedsysGetPayment**](PayInsRedsysApi.md#payInsRedsysRedsysGetPayment) | **GET** /v2.01/PayInsRedsys/payments/{PayInId} | View a Redsys payment
[**payInsRedsysRedsysGetPreauthorization**](PayInsRedsysApi.md#payInsRedsysRedsysGetPreauthorization) | **GET** /v2.01/PayInsRedsys/preauthorizations/{PreauthorizationId} | View a Redsys Preauthorization
[**payInsRedsysRedsysPostPaymentByWeb**](PayInsRedsysApi.md#payInsRedsysRedsysPostPaymentByWeb) | **POST** /v2.01/PayInsRedsys/payments/web | Create a Redsys PayIn Request
[**payInsRedsysRedsysPostPreauthorizationByWeb**](PayInsRedsysApi.md#payInsRedsysRedsysPostPreauthorizationByWeb) | **POST** /v2.01/PayInsRedsys/preauthorizations/web | Create a Redsys Preauthorization Request
[**payInsRedsysRedsysPostPreauthorizationCancellation**](PayInsRedsysApi.md#payInsRedsysRedsysPostPreauthorizationCancellation) | **POST** /v2.01/PayInsRedsys/preauthorizations/{PreauthorizationId}/cancellation | Cancels a Preauthorization
[**payInsRedsysRedsysPostPreauthorizationConfirmation**](PayInsRedsysApi.md#payInsRedsysRedsysPostPreauthorizationConfirmation) | **POST** /v2.01/PayInsRedsys/preauthorizations/{PreauthorizationId}/confirmation | Confirms a Preauthorization
[**payInsRedsysRedsysPostRefund**](PayInsRedsysApi.md#payInsRedsysRedsysPostRefund) | **POST** /v2.01/PayInsRedsys/payments/{PayInId}/refunds | Create a Redsys Payment Refund


# **payInsRedsysRedsysGetPayment**
> \MarketPay\Model\RedsysPayInsResponse payInsRedsysRedsysGetPayment($pay_in_id)

View a Redsys payment



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
MarketPay\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new MarketPay\Api\PayInsRedsysApi();
$pay_in_id = 789; // int | The Id of a payment

try {
    $result = $api_instance->payInsRedsysRedsysGetPayment($pay_in_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayInsRedsysApi->payInsRedsysRedsysGetPayment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pay_in_id** | **int**| The Id of a payment |

### Return type

[**\MarketPay\Model\RedsysPayInsResponse**](../Model/RedsysPayInsResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **payInsRedsysRedsysGetPreauthorization**
> \MarketPay\Model\RedsysPreauthorizeResponse payInsRedsysRedsysGetPreauthorization($preauthorization_id)

View a Redsys Preauthorization



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
MarketPay\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new MarketPay\Api\PayInsRedsysApi();
$preauthorization_id = 789; // int | The Id of a Redsys Preauthorization

try {
    $result = $api_instance->payInsRedsysRedsysGetPreauthorization($preauthorization_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayInsRedsysApi->payInsRedsysRedsysGetPreauthorization: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **preauthorization_id** | **int**| The Id of a Redsys Preauthorization |

### Return type

[**\MarketPay\Model\RedsysPreauthorizeResponse**](../Model/RedsysPreauthorizeResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **payInsRedsysRedsysPostPaymentByWeb**
> \MarketPay\Model\RedsysPayByWebResponse payInsRedsysRedsysPostPaymentByWeb($x_webhook, $redsys_pay_in)

Create a Redsys PayIn Request

Prepares a payment on Redsys. The data returned is used to show the Redsys interface to the user.  Once the payment is done, the user will be redirected to one of UrlOk or UrlKo passed parameters.  In order to redirect the user, a Post request with Content-Type of application/x-www-form-urlencoded must be executed from the user's browser.  Below there is an example of a request where the params surrounded by curly braces have to be replaced with the response's params.  curl -X POST -H \"Content-Type: application/x-www-form-urlencoded\" -H \"Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*_/_*;q=0.8\" -H \"Cache-Control: no-cache\" -H \"Postman-Token: c313f10b-0de1-227e-53d2-f721f25cd79d\" -d 'Ds_SignatureVersion={Ds_SignatureVersion}&amp;Ds_MerchantParameters={Ds_MerchantParameters}&amp;Ds_Signature={Ds_Signature}' \"{Url}\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
MarketPay\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new MarketPay\Api\PayInsRedsysApi();
$x_webhook = "x_webhook_example"; // string | 
$redsys_pay_in = new \MarketPay\Model\RedsysPayByWebPost(); // \MarketPay\Model\RedsysPayByWebPost | Redsys PayIn Request Object params

try {
    $result = $api_instance->payInsRedsysRedsysPostPaymentByWeb($x_webhook, $redsys_pay_in);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayInsRedsysApi->payInsRedsysRedsysPostPaymentByWeb: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_webhook** | **string**|  | [optional]
 **redsys_pay_in** | [**\MarketPay\Model\RedsysPayByWebPost**](../Model/RedsysPayByWebPost.md)| Redsys PayIn Request Object params | [optional]

### Return type

[**\MarketPay\Model\RedsysPayByWebResponse**](../Model/RedsysPayByWebResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **payInsRedsysRedsysPostPreauthorizationByWeb**
> \MarketPay\Model\RedsysPreauthorizeByWebResponse payInsRedsysRedsysPostPreauthorizationByWeb($redsys_preauthorization)

Create a Redsys Preauthorization Request

Prepares a preauthorization on Redsys. The data returned is used to show the Redsys interface to the user.  Once the preauthoriation is done, the user will be redirected to one of UrlOk or UrlKo passed parameters.  In order to redirect the user, a Post request with Content-Type of application/x-www-form-urlencoded must be executed from the user's browser.  Below there is an example of a request where the params surrounded by curly braces have to be replaced with the response's params.  curl -X POST -H \"Content-Type: application/x-www-form-urlencoded\" -H \"Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*_/_*;q=0.8\" -H \"Cache-Control: no-cache\" -H \"Postman-Token: c313f10b-0de1-227e-53d2-f721f25cd79d\" -d 'Ds_SignatureVersion={Ds_SignatureVersion}&amp;Ds_MerchantParameters={Ds_MerchantParameters}&amp;Ds_Signature={Ds_Signature}' \"{Url}\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
MarketPay\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new MarketPay\Api\PayInsRedsysApi();
$redsys_preauthorization = new \MarketPay\Model\RedsysPreauthorizeByWebPost(); // \MarketPay\Model\RedsysPreauthorizeByWebPost | RedsysPreauthorization Object params

try {
    $result = $api_instance->payInsRedsysRedsysPostPreauthorizationByWeb($redsys_preauthorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayInsRedsysApi->payInsRedsysRedsysPostPreauthorizationByWeb: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **redsys_preauthorization** | [**\MarketPay\Model\RedsysPreauthorizeByWebPost**](../Model/RedsysPreauthorizeByWebPost.md)| RedsysPreauthorization Object params | [optional]

### Return type

[**\MarketPay\Model\RedsysPreauthorizeByWebResponse**](../Model/RedsysPreauthorizeByWebResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **payInsRedsysRedsysPostPreauthorizationCancellation**
> \MarketPay\Model\RedsysPreauthorizationCancellationResponse payInsRedsysRedsysPostPreauthorizationCancellation($preauthorization_id, $redsys_preauthorization_cancellation)

Cancels a Preauthorization



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
MarketPay\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new MarketPay\Api\PayInsRedsysApi();
$preauthorization_id = 789; // int | The Id of a Redsys Preauthorization
$redsys_preauthorization_cancellation = new \MarketPay\Model\RedsysPreauthorizationCancellationPost(); // \MarketPay\Model\RedsysPreauthorizationCancellationPost | PreauthorizationCancellation Object params

try {
    $result = $api_instance->payInsRedsysRedsysPostPreauthorizationCancellation($preauthorization_id, $redsys_preauthorization_cancellation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayInsRedsysApi->payInsRedsysRedsysPostPreauthorizationCancellation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **preauthorization_id** | **int**| The Id of a Redsys Preauthorization |
 **redsys_preauthorization_cancellation** | [**\MarketPay\Model\RedsysPreauthorizationCancellationPost**](../Model/RedsysPreauthorizationCancellationPost.md)| PreauthorizationCancellation Object params | [optional]

### Return type

[**\MarketPay\Model\RedsysPreauthorizationCancellationResponse**](../Model/RedsysPreauthorizationCancellationResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **payInsRedsysRedsysPostPreauthorizationConfirmation**
> \MarketPay\Model\RedsysPreauthorizationConfirmationResponse payInsRedsysRedsysPostPreauthorizationConfirmation($preauthorization_id, $redsys_preauthorization_confirmation)

Confirms a Preauthorization



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
MarketPay\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new MarketPay\Api\PayInsRedsysApi();
$preauthorization_id = 789; // int | The Id of a Redsys Preauthorization
$redsys_preauthorization_confirmation = new \MarketPay\Model\RedsysPreauthorizationConfirmationPost(); // \MarketPay\Model\RedsysPreauthorizationConfirmationPost | PreauthorizationConfirmation Object params

try {
    $result = $api_instance->payInsRedsysRedsysPostPreauthorizationConfirmation($preauthorization_id, $redsys_preauthorization_confirmation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayInsRedsysApi->payInsRedsysRedsysPostPreauthorizationConfirmation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **preauthorization_id** | **int**| The Id of a Redsys Preauthorization |
 **redsys_preauthorization_confirmation** | [**\MarketPay\Model\RedsysPreauthorizationConfirmationPost**](../Model/RedsysPreauthorizationConfirmationPost.md)| PreauthorizationConfirmation Object params | [optional]

### Return type

[**\MarketPay\Model\RedsysPreauthorizationConfirmationResponse**](../Model/RedsysPreauthorizationConfirmationResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **payInsRedsysRedsysPostRefund**
> \MarketPay\Model\RedsysRefundResponse payInsRedsysRedsysPostRefund($pay_in_id, $redsys_refund)

Create a Redsys Payment Refund

A PayIn Refund is a request to reimburse a user on their payment card. The money which has already been paid will automatically go back to the user’s bank account.              Minimum amount to refund is 1€.              If you're doing a partial Refund, note that you can only refund the same amount on the same transaction once per day (this is to prevent unintended duplicate refunds). After 24h you can do another refund of the same amount on the same transaction. If it is a different amount on the same transaction, there is not this limit.              If you do not specify DebitedFunds and Fees parameters, it will automatically fully refund the PayIn. However if you do provide one or the other, you must provide both. Note that Fees must be negative if you wish to refund them - adding a positive value for the Fees is a way to charge your customers for the Refund (in the same way you might for a PayIn, Transfer or any other Transaction

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
MarketPay\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new MarketPay\Api\PayInsRedsysApi();
$pay_in_id = 789; // int | The Id of a PayIn
$redsys_refund = new \MarketPay\Model\RedsysRefundPost(); // \MarketPay\Model\RedsysRefundPost | Refund Object params

try {
    $result = $api_instance->payInsRedsysRedsysPostRefund($pay_in_id, $redsys_refund);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayInsRedsysApi->payInsRedsysRedsysPostRefund: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pay_in_id** | **int**| The Id of a PayIn |
 **redsys_refund** | [**\MarketPay\Model\RedsysRefundPost**](../Model/RedsysRefundPost.md)| Refund Object params | [optional]

### Return type

[**\MarketPay\Model\RedsysRefundResponse**](../Model/RedsysRefundResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

