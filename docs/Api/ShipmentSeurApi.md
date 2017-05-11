# Swagger\Client\ShipmentSeurApi

All URIs are relative to *https://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**shipmentSeurSeurCancelShipment**](ShipmentSeurApi.md#shipmentSeurSeurCancelShipment) | **POST** /v2.01/ShipmentSeur/shipments/{ShipmentId}/cancellation | Cancels a shipment
[**shipmentSeurSeurCreateShipment**](ShipmentSeurApi.md#shipmentSeurSeurCreateShipment) | **POST** /v2.01/ShipmentSeur/shipments | Creates a shipment
[**shipmentSeurSeurGetShipment**](ShipmentSeurApi.md#shipmentSeurSeurGetShipment) | **GET** /v2.01/ShipmentSeur/shipments/{ShipmentId} | Cancels a shipment


# **shipmentSeurSeurCancelShipment**
> \Swagger\Client\Model\InlineResponse20013 shipmentSeurSeurCancelShipment($shipment_id)

Cancels a shipment

Cancels a shipment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\ShipmentSeurApi();
$shipment_id = 789; // int | The Id of a Shipment

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
 **shipment_id** | **int**| The Id of a Shipment |

### Return type

[**\Swagger\Client\Model\InlineResponse20013**](../Model/InlineResponse20013.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **shipmentSeurSeurCreateShipment**
> \Swagger\Client\Model\InlineResponse20012 shipmentSeurSeurCreateShipment($shipment)

Creates a shipment

Creates a shipment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\ShipmentSeurApi();
$shipment = new \Swagger\Client\Model\Shipment(); // \Swagger\Client\Model\Shipment | Seur Shipment Object params

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
 **shipment** | [**\Swagger\Client\Model\Shipment**](../Model/\Swagger\Client\Model\Shipment.md)| Seur Shipment Object params | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20012**](../Model/InlineResponse20012.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/json-patch+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **shipmentSeurSeurGetShipment**
> \Swagger\Client\Model\InlineResponse20012 shipmentSeurSeurGetShipment($shipment_id)

Cancels a shipment

Cancels a shipment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\ShipmentSeurApi();
$shipment_id = 789; // int | The Id of a Shipment

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
 **shipment_id** | **int**| The Id of a Shipment |

### Return type

[**\Swagger\Client\Model\InlineResponse20012**](../Model/InlineResponse20012.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

