# PayOutBankwireCoreResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**client** | [**\MarketPay\Model\ClientData**](ClientData.md) |  | [optional] 
**author_id** | **string** |  | [optional] 
**credited_user_id** | **string** |  | [optional] 
**debited_funds** | [**\MarketPay\Model\Money**](Money.md) |  | [optional] 
**credited_funds** | [**\MarketPay\Model\Money**](Money.md) |  | [optional] 
**fees** | [**\MarketPay\Model\Money**](Money.md) |  | [optional] 
**status** | **string** |  | [optional] 
**result_code** | **string** |  | [optional] 
**result_message** | **string** |  | [optional] 
**execution_date** | **int** |  | [optional] 
**type** | **string** |  | [optional] 
**nature** | **string** |  | [optional] 
**debited_wallet_id** | **string** |  | [optional] 
**credited_wallet_id** | **string** |  | [optional] 
**payment_type** | **string** |  | [optional] 
**bank_wire_ref** | **string** |  | [optional] 
**user_response** | [**\MarketPay\Model\PayOutBankwireUserResponse**](PayOutBankwireUserResponse.md) |  | [optional] 
**bank_account_origin** | [**\MarketPay\Model\TpgBankwirePayOutConfigResponse**](TpgBankwirePayOutConfigResponse.md) |  | [optional] 
**bank_account** | [**\MarketPay\Model\BankAccountResponseAsChild**](BankAccountResponseAsChild.md) |  | [optional] 
**id** | **string** | The item&#39;s ID | [optional] 
**creation_date** | **int** | When the item was created | [optional] 
**tag** | **string** | Custom data that you can add to this item | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


