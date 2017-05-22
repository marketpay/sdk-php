# UniversalPayTokenRequestPost

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**token_request** | [**\Swagger\Client\Model\PayInUniversalTokenRequest**](PayInUniversalTokenRequest.md) |  | [optional] 
**tag** | **string** | Custom data that you can add to this item | [optional] 
**credited_wallet_id** | **string** | The ID of the wallet where money will be credited | 
**secure_mode** | **string** |  | [optional] 
**success_url** | **string** | Url to redirect the browser in case the payment is completed successfully | [optional] 
**cancel_url** | **string** | Url to redirect the browser in case the payment is not completed successfully | [optional] 
**auto_return** | **bool** | Defaults to false (show thank you page) Forced to true for iframe | [optional] 
**language** | **string** | Valid values are ES, EN, FR | [optional] 
**customer** | [**\Swagger\Client\Model\CustomerDetail**](CustomerDetail.md) |  | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


