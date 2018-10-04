# KycNaturalUserDataDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**email** | [**\Swagger\Client\Model\PropertyValidationString**](PropertyValidationString.md) |  | [optional] 
**first_name** | [**\Swagger\Client\Model\PropertyValidationString**](PropertyValidationString.md) | The name of the user | [optional] 
**last_name** | [**\Swagger\Client\Model\PropertyValidationString**](PropertyValidationString.md) | The last name of the user | [optional] 
**address** | [**\Swagger\Client\Model\TAddressValidationResult**](TAddressValidationResult.md) | The address | [optional] 
**telephone** | [**\Swagger\Client\Model\TTelephoneValidationResult**](TTelephoneValidationResult.md) |  | [optional] 
**birthday** | [**\Swagger\Client\Model\PropertyValidationDateNullable**](PropertyValidationDateNullable.md) | The date of birth of the user - be careful to set the right timezone (should be UTC) to avoid 00h becoming 23h (and hence interpreted as the day before) | [optional] 
**nationality** | [**\Swagger\Client\Model\PropertyValidationCountry**](PropertyValidationCountry.md) | The user’s nationality. ISO 3166-1 alpha-2 format is expected | [optional] 
**country_of_residence** | [**\Swagger\Client\Model\PropertyValidationCountry**](PropertyValidationCountry.md) | The user’s country of residence. ISO 3166-1 alpha-2 format is expected | [optional] 
**occupation** | [**\Swagger\Client\Model\PropertyValidationString**](PropertyValidationString.md) | User’s occupation, ie. Work | [optional] 
**id_card** | [**\Swagger\Client\Model\PropertyValidationString**](PropertyValidationString.md) |  | [optional] 
**id_card_document** | [**\Swagger\Client\Model\TKycFileDetails**](TKycFileDetails.md) | Identity card file reference | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


