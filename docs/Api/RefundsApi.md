# Swagger\Client\RefundsApi

All URIs are relative to *https://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**refundsRefundGet**](RefundsApi.md#refundsRefundGet) | **GET** /v2.01/Refunds/{RefundId} | 


# **refundsRefundGet**
> \Swagger\Client\Model\RedsysRefundResponse refundsRefundGet($refund_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\RefundsApi();
$refund_id = 789; // int | 

try {
    $result = $api_instance->refundsRefundGet($refund_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RefundsApi->refundsRefundGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **refund_id** | **int**|  |

### Return type

[**\Swagger\Client\Model\RedsysRefundResponse**](../Model/RedsysRefundResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

