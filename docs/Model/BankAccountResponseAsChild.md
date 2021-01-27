# BankAccountResponseAsChild

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ca_branch_code** | **string** | The branch code of the bank where the bank account. Must be numbers only, and 5 digits long | [optional] 
**ca_institution_number** | **string** | The institution number of the bank account. Must be numbers only, and 3 or 4 digits long | [optional] 
**ca_account_number** | **string** | The account number of the bank account. Must be numbers only. Canadian account numbers must be a maximum of 20 digits | [optional] 
**ca_bank_name** | **string** | The name of the bank where the account is held. Must be letters or numbers only and maximum 50 characters long | [optional] 
**gb_sort_code** | **string** | The sort code of the bank account. Must be numbers only, and 6 digits long | [optional] 
**gb_account_number** | **string** | The account number of the bank account. Must be numbers only. GB account numbers must be 8 digits long | [optional] 
**iban_iban** | **string** | The IBAN of the bank account | [optional] 
**iban_bic** | **string** | The BIC of the bank account | [optional] 
**other_country** | **string** | The Country where the bank account is held | [optional] 
**other_bic** | **string** | The BIC of the bank account | [optional] 
**other_account_number** | **string** | The account number of the bank account. Must be numbers only. Canadian account numbers must be a maximum of 20 digits | [optional] 
**us_account_number** | **string** | The account number of the bank account. US account numbers must be digits only | [optional] 
**usaba** | **string** | The ABA of the bank account. Must be numbers only, and 9 digits long | [optional] 
**us_deposit_account_type** | **string** | The type of account | [optional] 
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


