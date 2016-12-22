# Swagger\Client\PayInsRedsysApi

All URIs are relative to *https://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**payInsRedsysGetPayment**](PayInsRedsysApi.md#payInsRedsysGetPayment) | **GET** /v2.01/PayInsRedsys/payments/{PayInId} | View a Redsys payment
[**payInsRedsysGetPreauthorization**](PayInsRedsysApi.md#payInsRedsysGetPreauthorization) | **GET** /v2.01/PayInsRedsys/preauthorizations/{PreauthorizationId} | View a Redsys Preauthorization
[**payInsRedsysPostPayByWeb**](PayInsRedsysApi.md#payInsRedsysPostPayByWeb) | **POST** /v2.01/PayInsRedsys/payments/web | Create a Redsys PayIn Request
[**payInsRedsysPostPreauthorizationCancellation**](PayInsRedsysApi.md#payInsRedsysPostPreauthorizationCancellation) | **POST** /v2.01/PayInsRedsys/preauthorizations/{PreauthorizationId}/cancellation | Cancels a Preauthorization
[**payInsRedsysPostPreauthorizationConfirmation**](PayInsRedsysApi.md#payInsRedsysPostPreauthorizationConfirmation) | **POST** /v2.01/PayInsRedsys/preauthorizations/{PreauthorizationId}/confirmation | Confirms a Preauthorization
[**payInsRedsysPostPreauthorizeByWeb**](PayInsRedsysApi.md#payInsRedsysPostPreauthorizeByWeb) | **POST** /v2.01/PayInsRedsys/preauthorizations/web | Create a Redsys Preauthorization Request
[**payInsRedsysPostRefund**](PayInsRedsysApi.md#payInsRedsysPostRefund) | **POST** /v2.01/PayInsRedsys/payments/{PayInId}/refunds | Create a Redsys Payment Refund


# **payInsRedsysGetPayment**
> \Swagger\Client\Model\PayInsResponse payInsRedsysGetPayment($pay_in_id)

View a Redsys payment



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\PayInsRedsysApi();
$pay_in_id = 789; // int | The Id of a payment

try {
    $result = $api_instance->payInsRedsysGetPayment($pay_in_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayInsRedsysApi->payInsRedsysGetPayment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pay_in_id** | **int**| The Id of a payment |

### Return type

[**\Swagger\Client\Model\PayInsResponse**](../Model/PayInsResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **payInsRedsysGetPreauthorization**
> \Swagger\Client\Model\PreauthorizeResponse payInsRedsysGetPreauthorization($preauthorization_id)

View a Redsys Preauthorization



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\PayInsRedsysApi();
$preauthorization_id = 789; // int | The Id of a Redsys Preauthorization

try {
    $result = $api_instance->payInsRedsysGetPreauthorization($preauthorization_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayInsRedsysApi->payInsRedsysGetPreauthorization: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **preauthorization_id** | **int**| The Id of a Redsys Preauthorization |

### Return type

[**\Swagger\Client\Model\PreauthorizeResponse**](../Model/PreauthorizeResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **payInsRedsysPostPayByWeb**
> \Swagger\Client\Model\PayByWebResponse payInsRedsysPostPayByWeb($redsys_pay_in)

Create a Redsys PayIn Request

Prepares a payment on Redsys. The data returned is used to show the Redsys interface to the user.  Once the payment is done, the user will be redirected to one of UrlOk or UrlKo passed parameters.  In order to redirect the user, a Post request with Content-Type of application/x-www-form-urlencoded must be executed from the user's browser.  Below there is an example of a request where the params surrounded by curly braces have to be replaced with the response's params.  curl -X POST -H \"Content-Type: application/x-www-form-urlencoded\" -H \"Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*_/_*;q=0.8\" -H \"Cache-Control: no-cache\" -H \"Postman-Token: c313f10b-0de1-227e-53d2-f721f25cd79d\" -d 'Ds_SignatureVersion={Ds_SignatureVersion}&amp;Ds_MerchantParameters={Ds_MerchantParameters}&amp;Ds_Signature={Ds_Signature}' \"{Url}\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\PayInsRedsysApi();
$redsys_pay_in = new \Swagger\Client\Model\PayByWebPost(); // \Swagger\Client\Model\PayByWebPost | Redsys PayIn Request Object params

try {
    $result = $api_instance->payInsRedsysPostPayByWeb($redsys_pay_in);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayInsRedsysApi->payInsRedsysPostPayByWeb: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **redsys_pay_in** | [**\Swagger\Client\Model\PayByWebPost**](../Model/\Swagger\Client\Model\PayByWebPost.md)| Redsys PayIn Request Object params | [optional]

### Return type

[**\Swagger\Client\Model\PayByWebResponse**](../Model/PayByWebResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/json-patch+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **payInsRedsysPostPreauthorizationCancellation**
> \Swagger\Client\Model\PreauthorizationCancellationResponse payInsRedsysPostPreauthorizationCancellation($preauthorization_id, $preauthorization_cancellation)

Cancels a Preauthorization



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\PayInsRedsysApi();
$preauthorization_id = 789; // int | The Id of a Redsys PreauthorizationCancellation
$preauthorization_cancellation = new \Swagger\Client\Model\PreauthorizationCancellationPost(); // \Swagger\Client\Model\PreauthorizationCancellationPost | PreauthorizationCancellation Object params

try {
    $result = $api_instance->payInsRedsysPostPreauthorizationCancellation($preauthorization_id, $preauthorization_cancellation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayInsRedsysApi->payInsRedsysPostPreauthorizationCancellation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **preauthorization_id** | **int**| The Id of a Redsys PreauthorizationCancellation |
 **preauthorization_cancellation** | [**\Swagger\Client\Model\PreauthorizationCancellationPost**](../Model/\Swagger\Client\Model\PreauthorizationCancellationPost.md)| PreauthorizationCancellation Object params | [optional]

### Return type

[**\Swagger\Client\Model\PreauthorizationCancellationResponse**](../Model/PreauthorizationCancellationResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/json-patch+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **payInsRedsysPostPreauthorizationConfirmation**
> \Swagger\Client\Model\PreauthorizationConfirmationResponse payInsRedsysPostPreauthorizationConfirmation($preauthorization_id, $preauthorization_confirmation)

Confirms a Preauthorization



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\PayInsRedsysApi();
$preauthorization_id = 789; // int | The Id of a Redsys PreauthorizationConfirmation
$preauthorization_confirmation = new \Swagger\Client\Model\PreauthorizationConfirmationPost(); // \Swagger\Client\Model\PreauthorizationConfirmationPost | PreauthorizationConfirmation Object params

try {
    $result = $api_instance->payInsRedsysPostPreauthorizationConfirmation($preauthorization_id, $preauthorization_confirmation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayInsRedsysApi->payInsRedsysPostPreauthorizationConfirmation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **preauthorization_id** | **int**| The Id of a Redsys PreauthorizationConfirmation |
 **preauthorization_confirmation** | [**\Swagger\Client\Model\PreauthorizationConfirmationPost**](../Model/\Swagger\Client\Model\PreauthorizationConfirmationPost.md)| PreauthorizationConfirmation Object params | [optional]

### Return type

[**\Swagger\Client\Model\PreauthorizationConfirmationResponse**](../Model/PreauthorizationConfirmationResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/json-patch+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **payInsRedsysPostPreauthorizeByWeb**
> \Swagger\Client\Model\PreauthorizeByWebResponse payInsRedsysPostPreauthorizeByWeb($redsys_preauthorization)

Create a Redsys Preauthorization Request

Prepares a preauthorization on Redsys. The data returned is used to show the Redsys interface to the user.  Once the preauthoriation is done, the user will be redirected to one of UrlOk or UrlKo passed parameters.  In order to redirect the user, a Post request with Content-Type of application/x-www-form-urlencoded must be executed from the user's browser.  Below there is an example of a request where the params surrounded by curly braces have to be replaced with the response's params.  curl -X POST -H \"Content-Type: application/x-www-form-urlencoded\" -H \"Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*_/_*;q=0.8\" -H \"Cache-Control: no-cache\" -H \"Postman-Token: c313f10b-0de1-227e-53d2-f721f25cd79d\" -d 'Ds_SignatureVersion={Ds_SignatureVersion}&amp;Ds_MerchantParameters={Ds_MerchantParameters}&amp;Ds_Signature={Ds_Signature}' \"{Url}\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\PayInsRedsysApi();
$redsys_preauthorization = new \Swagger\Client\Model\PreauthorizeByWebPost(); // \Swagger\Client\Model\PreauthorizeByWebPost | RedsysPreauthorization Object params

try {
    $result = $api_instance->payInsRedsysPostPreauthorizeByWeb($redsys_preauthorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayInsRedsysApi->payInsRedsysPostPreauthorizeByWeb: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **redsys_preauthorization** | [**\Swagger\Client\Model\PreauthorizeByWebPost**](../Model/\Swagger\Client\Model\PreauthorizeByWebPost.md)| RedsysPreauthorization Object params | [optional]

### Return type

[**\Swagger\Client\Model\PreauthorizeByWebResponse**](../Model/PreauthorizeByWebResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/json-patch+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **payInsRedsysPostRefund**
> \Swagger\Client\Model\RefundResponse payInsRedsysPostRefund($pay_in_id, $redsys_refund)

Create a Redsys Payment Refund

A PayIn Refund is a request to reimburse a user on their payment card. The money which has already been paid will automatically go back to the user’s bank account.              Minimum amount to refund is 1€.              If you're doing a partial Refund, note that you can only refund the same amount on the same transaction once per day (this is to prevent unintended duplicate refunds). After 24h you can do another refund of the same amount on the same transaction. If it is a different amount on the same transaction, there is not this limit.              If you do not specify DebitedFunds and Fees parameters, it will automatically fully refund the PayIn. However if you do provide one or the other, you must provide both. Note that Fees must be negative if you wish to refund them - adding a positive value for the Fees is a way to charge your customers for the Refund (in the same way you might for a PayIn, Transfer or any other Transaction

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\PayInsRedsysApi();
$pay_in_id = 789; // int | The Id of a PayIn
$redsys_refund = new \Swagger\Client\Model\RefundPost(); // \Swagger\Client\Model\RefundPost | Refund Object params

try {
    $result = $api_instance->payInsRedsysPostRefund($pay_in_id, $redsys_refund);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayInsRedsysApi->payInsRedsysPostRefund: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pay_in_id** | **int**| The Id of a PayIn |
 **redsys_refund** | [**\Swagger\Client\Model\RefundPost**](../Model/\Swagger\Client\Model\RefundPost.md)| Refund Object params | [optional]

### Return type

[**\Swagger\Client\Model\RefundResponse**](../Model/RefundResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/json-patch+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

