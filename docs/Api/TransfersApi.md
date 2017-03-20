# Swagger\Client\TransfersApi

All URIs are relative to *https://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**transfersGet**](TransfersApi.md#transfersGet) | **GET** /v2.01/Transfers/{TransferId} | 
[**transfersPost**](TransfersApi.md#transfersPost) | **POST** /v2.01/Transfers | 


# **transfersGet**
> \Swagger\Client\Model\TransferResponse transfersGet($transfer_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\TransfersApi();
$transfer_id = 789; // int | 

try {
    $result = $api_instance->transfersGet($transfer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransfersApi->transfersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transfer_id** | **int**|  |

### Return type

[**\Swagger\Client\Model\TransferResponse**](../Model/TransferResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **transfersPost**
> \Swagger\Client\Model\TransferResponse transfersPost($transfer)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\TransfersApi();
$transfer = new \Swagger\Client\Model\TransferPost(); // \Swagger\Client\Model\TransferPost | 

try {
    $result = $api_instance->transfersPost($transfer);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransfersApi->transfersPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transfer** | [**\Swagger\Client\Model\TransferPost**](../Model/\Swagger\Client\Model\TransferPost.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\TransferResponse**](../Model/TransferResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/json-patch+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

