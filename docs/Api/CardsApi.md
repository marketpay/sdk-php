# Swagger\Client\CardsApi

All URIs are relative to *https://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cardsGet**](CardsApi.md#cardsGet) | **GET** /v2.01/Cards/{CardId} | View a Card
[**cardsPut**](CardsApi.md#cardsPut) | **PUT** /v2.01/Cards/{CardId} | Deactivate a Card


# **cardsGet**
> \Swagger\Client\Model\InlineResponse200 cardsGet($card_id)

View a Card

In order to save cards, the next methods are currently available:              - Redsys Payment: Set the value of the SaveCard to true.              - Redsys Preauthorization: Set the value of the SaveCard to true.              In order to use previously saved cards, the next methods are currently available:              - Redsys Payment: Set the value of CardId. The card must belong to the user that owns the wallet where the payment will be credited.              - Redsys Preauthorization: Set the value of CardId. The card must belong to the user that owns the wallet where the payment will be credited once the preauthorization is confirmed.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\CardsApi();
$card_id = 789; // int | The Id of a card

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
 **card_id** | **int**| The Id of a card |

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cardsPut**
> \Swagger\Client\Model\InlineResponse200 cardsPut($card_id, $card)

Deactivate a Card

Note that once deactivated, a card can't be reactivated afterwards

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\CardsApi();
$card_id = 789; // int | The Id of a card
$card = new \Swagger\Client\Model\Card(); // \Swagger\Client\Model\Card | Card Object params

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
 **card_id** | **int**| The Id of a card |
 **card** | [**\Swagger\Client\Model\Card**](../Model/\Swagger\Client\Model\Card.md)| Card Object params | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/json-patch+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

