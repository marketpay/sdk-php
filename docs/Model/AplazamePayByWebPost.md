# AplazamePayByWebPost

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**tag** | **string** | Custom data that you can add to this item | [optional] 
**user_id** | **int** | Whether to save or not the card for future use. SaveCard and CardId are mutually exclusive | [optional] 
**credited_wallet_id** | **string** | The ID of the wallet where money will be credited | [optional] 
**debited_funds** | [**\Swagger\Client\Model\InlineResponse2001DebitedFunds**](InlineResponse2001DebitedFunds.md) |  | [optional] 
**fees** | [**\Swagger\Client\Model\InlineResponse2001DebitedFunds**](InlineResponse2001DebitedFunds.md) |  | [optional] 
**shipping** | [**\Swagger\Client\Model\InlineResponse2001DebitedFunds**](InlineResponse2001DebitedFunds.md) |  | [optional] 
**cancel_url** | **string** | Dirección (relativa a la tienda) a la que redirigirá en caso de error en el pago. | 
**success_url** | **string** | Dirección (relativa a la tienda) a la que redirigirá cuando se haya completado el pago. | 
**checkout_url** | **string** | Dirección a la que se redirigirá el usuario si escoge volver a la tienda (por omisión &#39;/&#39;). | [optional] 
**order_items** | [**\Swagger\Client\Model\V201PayInsAplazamepaymentswebOrderItems[]**](V201PayInsAplazamepaymentswebOrderItems.md) |  | 
**customer** | [**\Swagger\Client\Model\V201PayInsAplazamepaymentswebCustomer**](V201PayInsAplazamepaymentswebCustomer.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


