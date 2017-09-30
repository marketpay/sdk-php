# MarketPay\PayOutsBankwireApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**payOutsBankwireGet**](PayOutsBankwireApi.md#payOutsBankwireGet) | **GET** /v2.01/PayOutsBankwire/payments/{PayOutId} | View a Bankwire PayOut
[**payOutsBankwirePost**](PayOutsBankwireApi.md#payOutsBankwirePost) | **POST** /v2.01/PayOutsBankwire/payments/direct | Create a Bankwire PayOut


# **payOutsBankwireGet**
> \MarketPay\Model\PayOutBankwireResponse payOutsBankwireGet($pay_out_id)

View a Bankwire PayOut

View a Bankwire PayOut

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
MarketPay\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new MarketPay\Api\PayOutsBankwireApi();
$pay_out_id = 789; // int | The Id of a payment

try {
    $result = $api_instance->payOutsBankwireGet($pay_out_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayOutsBankwireApi->payOutsBankwireGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pay_out_id** | **int**| The Id of a payment |

### Return type

[**\MarketPay\Model\PayOutBankwireResponse**](../Model/PayOutBankwireResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **payOutsBankwirePost**
> \MarketPay\Model\PayOutBankwireResponse payOutsBankwirePost($bankwire_pay_out)

Create a Bankwire PayOut

Create a Bankwire PayOut.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
MarketPay\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new MarketPay\Api\PayOutsBankwireApi();
$bankwire_pay_out = new \MarketPay\Model\PayOutBankwirePost(); // \MarketPay\Model\PayOutBankwirePost | Redsys PayIn Request Object params

try {
    $result = $api_instance->payOutsBankwirePost($bankwire_pay_out);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayOutsBankwireApi->payOutsBankwirePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bankwire_pay_out** | [**\MarketPay\Model\PayOutBankwirePost**](../Model/PayOutBankwirePost.md)| Redsys PayIn Request Object params | [optional]

### Return type

[**\MarketPay\Model\PayOutBankwireResponse**](../Model/PayOutBankwireResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/json-patch+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

