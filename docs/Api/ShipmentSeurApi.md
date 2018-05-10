# Swagger\Client\ShipmentSeurApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**shipmentSeurSeurCancelShipment**](ShipmentSeurApi.md#shipmentSeurSeurCancelShipment) | **POST** /v2.01/ShipmentSeur/shipments/{ShipmentId}/cancellation | 
[**shipmentSeurSeurCreateShipment**](ShipmentSeurApi.md#shipmentSeurSeurCreateShipment) | **POST** /v2.01/ShipmentSeur/shipments | 
[**shipmentSeurSeurGetShipment**](ShipmentSeurApi.md#shipmentSeurSeurGetShipment) | **GET** /v2.01/ShipmentSeur/shipments/{ShipmentId} | 


# **shipmentSeurSeurCancelShipment**
> \Swagger\Client\Model\SeurShipmentCancellationResponse shipmentSeurSeurCancelShipment($shipment_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ShipmentSeurApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shipment_id = 789; // int | 

try {
    $result = $apiInstance->shipmentSeurSeurCancelShipment($shipment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentSeurApi->shipmentSeurSeurCancelShipment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shipment_id** | **int**|  |

### Return type

[**\Swagger\Client\Model\SeurShipmentCancellationResponse**](../Model/SeurShipmentCancellationResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **shipmentSeurSeurCreateShipment**
> \Swagger\Client\Model\SeurShipmentResponse shipmentSeurSeurCreateShipment($shipment)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ShipmentSeurApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shipment = new \Swagger\Client\Model\SeurShipmentPost(); // \Swagger\Client\Model\SeurShipmentPost | 

try {
    $result = $apiInstance->shipmentSeurSeurCreateShipment($shipment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentSeurApi->shipmentSeurSeurCreateShipment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shipment** | [**\Swagger\Client\Model\SeurShipmentPost**](../Model/SeurShipmentPost.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\SeurShipmentResponse**](../Model/SeurShipmentResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **shipmentSeurSeurGetShipment**
> \Swagger\Client\Model\SeurShipmentResponse shipmentSeurSeurGetShipment($shipment_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ShipmentSeurApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shipment_id = 789; // int | 

try {
    $result = $apiInstance->shipmentSeurSeurGetShipment($shipment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentSeurApi->shipmentSeurSeurGetShipment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shipment_id** | **int**|  |

### Return type

[**\Swagger\Client\Model\SeurShipmentResponse**](../Model/SeurShipmentResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

