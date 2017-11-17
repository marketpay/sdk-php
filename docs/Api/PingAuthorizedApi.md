# MarketPay\PingAuthorizedApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**pingAuthorizedGet**](PingAuthorizedApi.md#pingAuthorizedGet) | **GET** /v2.01/PingAuthorized | 


# **pingAuthorizedGet**
> pingAuthorizedGet()



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
MarketPay\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new MarketPay\Api\PingAuthorizedApi();

try {
    $api_instance->pingAuthorizedGet();
} catch (Exception $e) {
    echo 'Exception when calling PingAuthorizedApi->pingAuthorizedGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

