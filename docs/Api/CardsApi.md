# Swagger\Client\CardsApi

All URIs are relative to *https://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cardsGet**](CardsApi.md#cardsGet) | **GET** /v2.01/Cards/{CardId} | 
[**cardsPut**](CardsApi.md#cardsPut) | **PUT** /v2.01/Cards/{CardId} | 


# **cardsGet**
> \Swagger\Client\Model\CardResponse cardsGet($card_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\CardsApi();
$card_id = 789; // int | 

try {
    $result = $api_instance->cardsGet($card_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardsApi->cardsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **card_id** | **int**|  |

### Return type

[**\Swagger\Client\Model\CardResponse**](../Model/CardResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cardsPut**
> \Swagger\Client\Model\CardResponse cardsPut($card_id, $card)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\CardsApi();
$card_id = 789; // int | 
$card = new \Swagger\Client\Model\CardPut(); // \Swagger\Client\Model\CardPut | 

try {
    $result = $api_instance->cardsPut($card_id, $card);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardsApi->cardsPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **card_id** | **int**|  |
 **card** | [**\Swagger\Client\Model\CardPut**](../Model/\Swagger\Client\Model\CardPut.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\CardResponse**](../Model/CardResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/json-patch+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

