# MarketPay\ShipmentSeurApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**shipmentSeurSeurCancelShipment**](ShipmentSeurApi.md#shipmentSeurSeurCancelShipment) | **POST** /v2.01/ShipmentSeur/shipments/{ShipmentId}/cancellation | Cancels a shipment
[**shipmentSeurSeurCreateShipment**](ShipmentSeurApi.md#shipmentSeurSeurCreateShipment) | **POST** /v2.01/ShipmentSeur/shipments | Creates a shipment
[**shipmentSeurSeurGetShipment**](ShipmentSeurApi.md#shipmentSeurSeurGetShipment) | **GET** /v2.01/ShipmentSeur/shipments/{ShipmentId} | Cancels a shipment


# **shipmentSeurSeurCancelShipment**
> \MarketPay\Model\SeurShipmentCancellationResponse shipmentSeurSeurCancelShipment($shipment_id)

Cancels a shipment

Cancels a shipment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
MarketPay\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new MarketPay\Api\ShipmentSeurApi();
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

[**\MarketPay\Model\SeurShipmentCancellationResponse**](../Model/SeurShipmentCancellationResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **shipmentSeurSeurCreateShipment**
> \MarketPay\Model\SeurShipmentResponse shipmentSeurSeurCreateShipment($shipment)

Creates a shipment

Creates a shipment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
MarketPay\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new MarketPay\Api\ShipmentSeurApi();
$shipment = new \MarketPay\Model\SeurShipmentPost(); // \MarketPay\Model\SeurShipmentPost | Seur Shipment Object params

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
 **shipment** | [**\MarketPay\Model\SeurShipmentPost**](../Model/SeurShipmentPost.md)| Seur Shipment Object params | [optional]

### Return type

[**\MarketPay\Model\SeurShipmentResponse**](../Model/SeurShipmentResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/json-patch+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **shipmentSeurSeurGetShipment**
> \MarketPay\Model\SeurShipmentResponse shipmentSeurSeurGetShipment($shipment_id)

Cancels a shipment

Cancels a shipment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
MarketPay\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new MarketPay\Api\ShipmentSeurApi();
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

[**\MarketPay\Model\SeurShipmentResponse**](../Model/SeurShipmentResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

