# Swagger\Client\ShipmentSeurApi

All URIs are relative to *https://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**shipmentSeurSeurCancelShipment**](ShipmentSeurApi.md#shipmentSeurSeurCancelShipment) | **POST** /v2.01/ShipmentSeur/shipments/{ShipmentId}/cancellation | 
[**shipmentSeurSeurCreateShipment**](ShipmentSeurApi.md#shipmentSeurSeurCreateShipment) | **POST** /v2.01/ShipmentSeur/shipments | 
[**shipmentSeurSeurGetShipment**](ShipmentSeurApi.md#shipmentSeurSeurGetShipment) | **GET** /v2.01/ShipmentSeur/shipments/{ShipmentId} | 


# **shipmentSeurSeurCancelShipment**
> \Swagger\Client\Model\ShipmentCancellationResponse shipmentSeurSeurCancelShipment($shipment_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\ShipmentSeurApi();
$shipment_id = 789; // int | 

try {
    $result = $api_instance->shipmentSeurSeurCancelShipment($shipment_id);
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

[**\Swagger\Client\Model\ShipmentCancellationResponse**](../Model/ShipmentCancellationResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **shipmentSeurSeurCreateShipment**
> \Swagger\Client\Model\ShipmentResponse shipmentSeurSeurCreateShipment($shipment)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\ShipmentSeurApi();
$shipment = new \Swagger\Client\Model\ShipmentPost(); // \Swagger\Client\Model\ShipmentPost | 

try {
    $result = $api_instance->shipmentSeurSeurCreateShipment($shipment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentSeurApi->shipmentSeurSeurCreateShipment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shipment** | [**\Swagger\Client\Model\ShipmentPost**](../Model/\Swagger\Client\Model\ShipmentPost.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ShipmentResponse**](../Model/ShipmentResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/json-patch+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **shipmentSeurSeurGetShipment**
> \Swagger\Client\Model\ShipmentResponse shipmentSeurSeurGetShipment($shipment_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\ShipmentSeurApi();
$shipment_id = 789; // int | 

try {
    $result = $api_instance->shipmentSeurSeurGetShipment($shipment_id);
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

[**\Swagger\Client\Model\ShipmentResponse**](../Model/ShipmentResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

