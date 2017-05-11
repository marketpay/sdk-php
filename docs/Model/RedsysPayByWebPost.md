# RedsysPayByWebPost

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**tag** | **string** | Custom data that you can add to this item | [optional] 
**save_card** | **bool** | Whether to save or not the card for future use. SaveCard and CardId are mutually exclusive | [optional] 
**card_id** | **string** | The id of a previous saved card. SaveCard and CardId are mutually exclusive | [optional] 
**credited_wallet_id** | **string** | The ID of the wallet where money will be credited | 
**statement_descriptor** | **string** | A custom description to appear on the user&#39;s bank statement. It can be up to 10 characters long, and can only include alphanumeric characters or spaces | [optional] 
**success_url** | **string** | Dirección (relativa a la tienda) a la que redirigirá cuando se haya completado el pago. | 
**url_ok** | **string** | Url to redirect the browser in case the payment is completed successfully | [optional] 
**cancel_url** | **string** | Dirección (relativa a la tienda) a la que redirigirá en caso de error en el pago. | 
**url_ko** | **string** | Url to redirect the browser in case the payment is not completed successfully | [optional] 
**debited_funds** | [**\Swagger\Client\Model\InlineResponse2001DebitedFunds**](InlineResponse2001DebitedFunds.md) |  | [optional] 
**fees** | [**\Swagger\Client\Model\InlineResponse2001DebitedFunds**](InlineResponse2001DebitedFunds.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


