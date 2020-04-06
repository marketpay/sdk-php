# BankAccountUsResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_number** | **string** | The account number of the bank account. US account numbers must be digits only | [optional] 
**aba** | **string** | The ABA of the bank account. Must be numbers only, and 9 digits long | [optional] 
**deposit_account_type** | **string** | The type of account | [optional] 
**type** | **string** | The type of bank account | [optional] 
**owner_address** | [**\MarketPay\Model\Address**](Address.md) |  | [optional] 
**owner_name** | **string** | The name of the owner of the bank account | [optional] 
**user_id** | **string** | The object owner&#39;s UserId | [optional] 
**active** | **bool** | Whether the bank account is active or not | [optional] 
**bank_account_number** | **string** | Whatever type, the IBAN or Other should be mapped to that (most tools can´t deserialize polimorphic array of BankAccountResponse)  So we need the number in a common property | [optional] 
**id** | **string** | The item&#39;s ID | [optional] 
**creation_date** | **int** | When the item was created | [optional] 
**tag** | **string** | Custom data that you can add to this item | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


