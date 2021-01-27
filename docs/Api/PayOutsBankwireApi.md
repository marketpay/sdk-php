# MarketPay\PayOutsBankwireApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**payOutsBankwireGet**](PayOutsBankwireApi.md#payOutsBankwireGet) | **GET** /v2.1/PayOutsBankwire/payments/{PayOutId} | 
[**payOutsBankwireGetList**](PayOutsBankwireApi.md#payOutsBankwireGetList) | **GET** /v2.1/PayOutsBankwire/payments | 
[**payOutsBankwirePayOutBankwireCancellation**](PayOutsBankwireApi.md#payOutsBankwirePayOutBankwireCancellation) | **POST** /v2.1/PayOutsBankwire/payments/{PayOutId}/cancellation | 
[**payOutsBankwirePayOutBankwireConfirmation**](PayOutsBankwireApi.md#payOutsBankwirePayOutBankwireConfirmation) | **POST** /v2.1/PayOutsBankwire/payments/{PayOutId}/confirmation | 
[**payOutsBankwirePost**](PayOutsBankwireApi.md#payOutsBankwirePost) | **POST** /v2.1/PayOutsBankwire/payments/direct | 


# **payOutsBankwireGet**
> \MarketPay\Model\PayOutBankwireResponse payOutsBankwireGet($pay_out_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = MarketPay\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new MarketPay\Api\PayOutsBankwireApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pay_out_id = 789; // int | 

try {
    $result = $apiInstance->payOutsBankwireGet($pay_out_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayOutsBankwireApi->payOutsBankwireGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pay_out_id** | **int**|  |

### Return type

[**\MarketPay\Model\PayOutBankwireResponse**](../Model/PayOutBankwireResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **payOutsBankwireGetList**
> \MarketPay\Model\PayOutBankwireCoreResponseResponseList payOutsBankwireGetList($page, $per_page, $before_date, $after_date)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = MarketPay\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new MarketPay\Api\PayOutsBankwireApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | 
$per_page = 56; // int | 
$before_date = 789; // int | 
$after_date = 789; // int | 

try {
    $result = $apiInstance->payOutsBankwireGetList($page, $per_page, $before_date, $after_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayOutsBankwireApi->payOutsBankwireGetList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**|  | [optional]
 **per_page** | **int**|  | [optional]
 **before_date** | **int**|  | [optional]
 **after_date** | **int**|  | [optional]

### Return type

[**\MarketPay\Model\PayOutBankwireCoreResponseResponseList**](../Model/PayOutBankwireCoreResponseResponseList.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **payOutsBankwirePayOutBankwireCancellation**
> \MarketPay\Model\PayOutBankwireCancellationResponse payOutsBankwirePayOutBankwireCancellation($pay_out_id, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = MarketPay\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new MarketPay\Api\PayOutsBankwireApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pay_out_id = 789; // int | 
$body = new \MarketPay\Model\PayOutBankwireCancellationPost(); // \MarketPay\Model\PayOutBankwireCancellationPost | 

try {
    $result = $apiInstance->payOutsBankwirePayOutBankwireCancellation($pay_out_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayOutsBankwireApi->payOutsBankwirePayOutBankwireCancellation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pay_out_id** | **int**|  |
 **body** | [**\MarketPay\Model\PayOutBankwireCancellationPost**](../Model/PayOutBankwireCancellationPost.md)|  | [optional]

### Return type

[**\MarketPay\Model\PayOutBankwireCancellationResponse**](../Model/PayOutBankwireCancellationResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **payOutsBankwirePayOutBankwireConfirmation**
> \MarketPay\Model\PayOutBankwireConfirmationResponse payOutsBankwirePayOutBankwireConfirmation($pay_out_id, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = MarketPay\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new MarketPay\Api\PayOutsBankwireApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pay_out_id = 789; // int | 
$body = new \MarketPay\Model\PayOutBankwireConfirmationPost(); // \MarketPay\Model\PayOutBankwireConfirmationPost | 

try {
    $result = $apiInstance->payOutsBankwirePayOutBankwireConfirmation($pay_out_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayOutsBankwireApi->payOutsBankwirePayOutBankwireConfirmation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pay_out_id** | **int**|  |
 **body** | [**\MarketPay\Model\PayOutBankwireConfirmationPost**](../Model/PayOutBankwireConfirmationPost.md)|  | [optional]

### Return type

[**\MarketPay\Model\PayOutBankwireConfirmationResponse**](../Model/PayOutBankwireConfirmationResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **payOutsBankwirePost**
> \MarketPay\Model\PayOutBankwireResponse payOutsBankwirePost($body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = MarketPay\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new MarketPay\Api\PayOutsBankwireApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \MarketPay\Model\PayOutBankwirePost(); // \MarketPay\Model\PayOutBankwirePost | 

try {
    $result = $apiInstance->payOutsBankwirePost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayOutsBankwireApi->payOutsBankwirePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\MarketPay\Model\PayOutBankwirePost**](../Model/PayOutBankwirePost.md)|  | [optional]

### Return type

[**\MarketPay\Model\PayOutBankwireResponse**](../Model/PayOutBankwireResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

