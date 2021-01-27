# PayInBankwireRefundResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**debited_funds** | [**\MarketPay\Model\Money**](Money.md) |  | [optional] 
**credited_funds** | [**\MarketPay\Model\Money**](Money.md) |  | [optional] 
**fees** | [**\MarketPay\Model\Money**](Money.md) |  | [optional] 
**debited_wallet_id** | **string** | The ID of the wallet that was debited | [optional] 
**author_id** | **string** | A user&#39;s ID | [optional] 
**statement_descriptor** | **string** | A custom description to appear on the user&#39;s bank statement. It can be up to 10 characters long, and can only include alphanumeric characters or spaces | [optional] 
**bank_account_id** | **string** |  | [optional] 
**nature** | **string** | The nature of the transaction | [optional] 
**status** | **string** | The status of the transaction | [optional] 
**execution_date** | **int** | When the transaction happened | [optional] 
**result_code** | **string** | The result code | [optional] 
**result_message** | **string** | A verbal explanation of the ResultCode | [optional] 
**type** | **string** | The type of the transaction | [optional] 
**initial_transaction_id** | **string** | The initial transaction ID | [optional] 
**initial_transaction_type** | **string** | The initial transaction type | [optional] 
**refund_reason** | [**\MarketPay\Model\RefundReason**](RefundReason.md) |  | [optional] 
**id** | **string** | The item&#39;s ID | [optional] 
**creation_date** | **int** | When the item was created | [optional] 
**tag** | **string** | Custom data that you can add to this item | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


