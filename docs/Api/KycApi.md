# MarketPay\KycApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**kycDeleteLegalBoardMember**](KycApi.md#kycDeleteLegalBoardMember) | **DELETE** /v2.1/Kyc/users/legal/{UserId}/boardmembers/{BoardMemberId} | 
[**kycDeleteLegalShareHolderNatural**](KycApi.md#kycDeleteLegalShareHolderNatural) | **DELETE** /v2.1/Kyc/users/legal/{UserId}/shareholders/natural/{ShareHolderId} | 
[**kycGetFile**](KycApi.md#kycGetFile) | **GET** /v2.1/Kyc/document/{DocumentId} | 
[**kycGetLegal**](KycApi.md#kycGetLegal) | **GET** /v2.1/Kyc/users/legal/{UserId} | View a Legal User
[**kycGetLegalBoardMember**](KycApi.md#kycGetLegalBoardMember) | **GET** /v2.1/Kyc/users/legal/{UserId}/boardmembers/{BoardMemberId} | 
[**kycGetLegalBoardMembers**](KycApi.md#kycGetLegalBoardMembers) | **GET** /v2.1/Kyc/users/legal/{UserId}/boardmembers | 
[**kycGetLegalList**](KycApi.md#kycGetLegalList) | **GET** /v2.1/Kyc/users/legal | List all Legal User
[**kycGetLegalShareHolderNatural**](KycApi.md#kycGetLegalShareHolderNatural) | **GET** /v2.1/Kyc/users/legal/{UserId}/shareholders/natural/{ShareHolderId} | 
[**kycGetLegalShareHolders**](KycApi.md#kycGetLegalShareHolders) | **GET** /v2.1/Kyc/users/legal/{UserId}/shareholders/natural | 
[**kycGetNaturaList**](KycApi.md#kycGetNaturaList) | **GET** /v2.1/Kyc/users/natural | List all Natural User
[**kycGetNatural**](KycApi.md#kycGetNatural) | **GET** /v2.1/Kyc/users/natural/{UserId} | View a Natural User
[**kycGetValidation**](KycApi.md#kycGetValidation) | **GET** /v2.1/Kyc/users/natural/{UserId}/validation | 
[**kycGetValidationLegal**](KycApi.md#kycGetValidationLegal) | **GET** /v2.1/Kyc/users/legal/{UserId}/validation | 
[**kycPostDocument**](KycApi.md#kycPostDocument) | **POST** /v2.1/Kyc/users/{UserId}/documents/new/{DocumentType} | Uploads a new document and uploads a file. If the document already exists it will be replaced.
[**kycPostDocumentBoardMember**](KycApi.md#kycPostDocumentBoardMember) | **POST** /v2.1/Kyc/users/legal/{UserId}/boardmember/{BoardMemberId}/documents/new/{DocumentType} | Uploads a new document. If the document already exists it will be replaced.
[**kycPostDocumentShareholder**](KycApi.md#kycPostDocumentShareholder) | **POST** /v2.1/Kyc/users/legal/{UserId}/shareholder/{ShareholderId}/documents/new/{DocumentType} | Uploads a new document and uploads a file. If the document already exists it will be replaced.
[**kycPostLegal**](KycApi.md#kycPostLegal) | **POST** /v2.1/Kyc/users/legal/{UserId} | Update a Legal User Kyc Data
[**kycPostLegalBoardMember**](KycApi.md#kycPostLegalBoardMember) | **POST** /v2.1/Kyc/users/legal/{UserId}/boardmembers | 
[**kycPostLegalShareHolder**](KycApi.md#kycPostLegalShareHolder) | **POST** /v2.1/Kyc/users/legal/{UserId}/shareholders/natural | 
[**kycPostNatural**](KycApi.md#kycPostNatural) | **POST** /v2.1/Kyc/users/natural/{UserId} | Update a Natural User Kyc Data
[**kycPutDocument**](KycApi.md#kycPutDocument) | **PUT** /v2.1/Kyc/users/{UserId}/documents/add/{DocumentType} | Adds files to a document.
[**kycPutDocumentBoardMember**](KycApi.md#kycPutDocumentBoardMember) | **PUT** /v2.1/Kyc/users/legal/{UserId}/boardmember/{BoardMemberId}/documents/add/{DocumentType} | Uploads a new document. If the document already exists it will be replaced.
[**kycPutDocumentShareholder**](KycApi.md#kycPutDocumentShareholder) | **PUT** /v2.1/Kyc/users/legal/{UserId}/shareholder/{ShareholderId}/documents/add/{DocumentType} | Adds files to a document.
[**kycPutLegal**](KycApi.md#kycPutLegal) | **PUT** /v2.1/Kyc/users/legal/{UserId} | Update a Legal User
[**kycPutLegalBoardMember**](KycApi.md#kycPutLegalBoardMember) | **PUT** /v2.1/Kyc/users/legal/{UserId}/boardmembers/{BoardMemberId} | 
[**kycPutLegalShareHolder**](KycApi.md#kycPutLegalShareHolder) | **PUT** /v2.1/Kyc/users/legal/{UserId}/shareholders/natural/{ShareHolderId} | 
[**kycPutRequest**](KycApi.md#kycPutRequest) | **PUT** /v2.1/Kyc/users/natural/{UserId}/requestValidation | 
[**kycPutRequestLegal**](KycApi.md#kycPutRequestLegal) | **PUT** /v2.1/Kyc/users/legal/{UserId}/requestValidation | 


# **kycDeleteLegalBoardMember**
> string kycDeleteLegalBoardMember($board_member_id, $user_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = MarketPay\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new MarketPay\Api\KycApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$board_member_id = 789; // int | 
$user_id = "user_id_example"; // string | 

try {
    $result = $apiInstance->kycDeleteLegalBoardMember($board_member_id, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KycApi->kycDeleteLegalBoardMember: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **board_member_id** | **int**|  |
 **user_id** | **string**|  |

### Return type

**string**

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;odata.metadata=minimal;odata.streaming=true, application/json;odata.metadata=minimal;odata.streaming=false, application/json;odata.metadata=minimal, application/json;odata.metadata=full;odata.streaming=true, application/json;odata.metadata=full;odata.streaming=false, application/json;odata.metadata=full, application/json;odata.metadata=none;odata.streaming=true, application/json;odata.metadata=none;odata.streaming=false, application/json;odata.metadata=none, application/json;odata.streaming=true, application/json;odata.streaming=false, application/json, application/xml, application/prs.odatatestxx-odata, text/plain, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **kycDeleteLegalShareHolderNatural**
> string kycDeleteLegalShareHolderNatural($user_id, $share_holder_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = MarketPay\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new MarketPay\Api\KycApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 789; // int | 
$share_holder_id = 789; // int | 

try {
    $result = $apiInstance->kycDeleteLegalShareHolderNatural($user_id, $share_holder_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KycApi->kycDeleteLegalShareHolderNatural: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**|  |
 **share_holder_id** | **int**|  |

### Return type

**string**

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;odata.metadata=minimal;odata.streaming=true, application/json;odata.metadata=minimal;odata.streaming=false, application/json;odata.metadata=minimal, application/json;odata.metadata=full;odata.streaming=true, application/json;odata.metadata=full;odata.streaming=false, application/json;odata.metadata=full, application/json;odata.metadata=none;odata.streaming=true, application/json;odata.metadata=none;odata.streaming=false, application/json;odata.metadata=none, application/json;odata.streaming=true, application/json;odata.streaming=false, application/json, application/xml, application/prs.odatatestxx-odata, text/plain, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **kycGetFile**
> \SplFileObject kycGetFile($document_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = MarketPay\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new MarketPay\Api\KycApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$document_id = 789; // int | 

try {
    $result = $apiInstance->kycGetFile($document_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KycApi->kycGetFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **document_id** | **int**|  |

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **kycGetLegal**
> \MarketPay\Model\KycUserValidationLevelLegalResponse kycGetLegal($user_id)

View a Legal User



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = MarketPay\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new MarketPay\Api\KycApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 789; // int | The Id of a legal user

try {
    $result = $apiInstance->kycGetLegal($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KycApi->kycGetLegal: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The Id of a legal user |

### Return type

[**\MarketPay\Model\KycUserValidationLevelLegalResponse**](../Model/KycUserValidationLevelLegalResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;odata.metadata=minimal;odata.streaming=true, application/json;odata.metadata=minimal;odata.streaming=false, application/json;odata.metadata=minimal, application/json;odata.metadata=full;odata.streaming=true, application/json;odata.metadata=full;odata.streaming=false, application/json;odata.metadata=full, application/json;odata.metadata=none;odata.streaming=true, application/json;odata.metadata=none;odata.streaming=false, application/json;odata.metadata=none, application/json;odata.streaming=true, application/json;odata.streaming=false, application/json, application/xml, application/prs.odatatestxx-odata, text/plain, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **kycGetLegalBoardMember**
> \MarketPay\Model\KycUserValidationBoardMemberListItemResponse kycGetLegalBoardMember($board_member_id, $user_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = MarketPay\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new MarketPay\Api\KycApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$board_member_id = 789; // int | 
$user_id = "user_id_example"; // string | 

try {
    $result = $apiInstance->kycGetLegalBoardMember($board_member_id, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KycApi->kycGetLegalBoardMember: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **board_member_id** | **int**|  |
 **user_id** | **string**|  |

### Return type

[**\MarketPay\Model\KycUserValidationBoardMemberListItemResponse**](../Model/KycUserValidationBoardMemberListItemResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;odata.metadata=minimal;odata.streaming=true, application/json;odata.metadata=minimal;odata.streaming=false, application/json;odata.metadata=minimal, application/json;odata.metadata=full;odata.streaming=true, application/json;odata.metadata=full;odata.streaming=false, application/json;odata.metadata=full, application/json;odata.metadata=none;odata.streaming=true, application/json;odata.metadata=none;odata.streaming=false, application/json;odata.metadata=none, application/json;odata.streaming=true, application/json;odata.streaming=false, application/json, application/xml, application/prs.odatatestxx-odata, text/plain, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **kycGetLegalBoardMembers**
> \MarketPay\Model\KycUserValidationLevelLegalBoardMembersListResponse kycGetLegalBoardMembers($user_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = MarketPay\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new MarketPay\Api\KycApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 789; // int | 

try {
    $result = $apiInstance->kycGetLegalBoardMembers($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KycApi->kycGetLegalBoardMembers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**|  |

### Return type

[**\MarketPay\Model\KycUserValidationLevelLegalBoardMembersListResponse**](../Model/KycUserValidationLevelLegalBoardMembersListResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;odata.metadata=minimal;odata.streaming=true, application/json;odata.metadata=minimal;odata.streaming=false, application/json;odata.metadata=minimal, application/json;odata.metadata=full;odata.streaming=true, application/json;odata.metadata=full;odata.streaming=false, application/json;odata.metadata=full, application/json;odata.metadata=none;odata.streaming=true, application/json;odata.metadata=none;odata.streaming=false, application/json;odata.metadata=none, application/json;odata.streaming=true, application/json;odata.streaming=false, application/json, application/xml, application/prs.odatatestxx-odata, text/plain, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **kycGetLegalList**
> \MarketPay\Model\ResponseListKycUserValidationLevelLegalResponse kycGetLegalList($page, $per_page, $name_contains, $fiscal_id_contains)

List all Legal User



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = MarketPay\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new MarketPay\Api\KycApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | The page number of results you wish to return
$per_page = 56; // int | The number of results to return per page
$name_contains = "name_contains_example"; // string | 
$fiscal_id_contains = "fiscal_id_contains_example"; // string | 

try {
    $result = $apiInstance->kycGetLegalList($page, $per_page, $name_contains, $fiscal_id_contains);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KycApi->kycGetLegalList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| The page number of results you wish to return | [optional]
 **per_page** | **int**| The number of results to return per page | [optional]
 **name_contains** | **string**|  | [optional]
 **fiscal_id_contains** | **string**|  | [optional]

### Return type

[**\MarketPay\Model\ResponseListKycUserValidationLevelLegalResponse**](../Model/ResponseListKycUserValidationLevelLegalResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;odata.metadata=minimal;odata.streaming=true, application/json;odata.metadata=minimal;odata.streaming=false, application/json;odata.metadata=minimal, application/json;odata.metadata=full;odata.streaming=true, application/json;odata.metadata=full;odata.streaming=false, application/json;odata.metadata=full, application/json;odata.metadata=none;odata.streaming=true, application/json;odata.metadata=none;odata.streaming=false, application/json;odata.metadata=none, application/json;odata.streaming=true, application/json;odata.streaming=false, application/json, application/xml, application/prs.odatatestxx-odata, text/plain, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **kycGetLegalShareHolderNatural**
> \MarketPay\Model\KycUserValidationShareHolderListItemResponseNatural kycGetLegalShareHolderNatural($user_id, $share_holder_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = MarketPay\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new MarketPay\Api\KycApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 789; // int | 
$share_holder_id = 789; // int | 

try {
    $result = $apiInstance->kycGetLegalShareHolderNatural($user_id, $share_holder_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KycApi->kycGetLegalShareHolderNatural: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**|  |
 **share_holder_id** | **int**|  |

### Return type

[**\MarketPay\Model\KycUserValidationShareHolderListItemResponseNatural**](../Model/KycUserValidationShareHolderListItemResponseNatural.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;odata.metadata=minimal;odata.streaming=true, application/json;odata.metadata=minimal;odata.streaming=false, application/json;odata.metadata=minimal, application/json;odata.metadata=full;odata.streaming=true, application/json;odata.metadata=full;odata.streaming=false, application/json;odata.metadata=full, application/json;odata.metadata=none;odata.streaming=true, application/json;odata.metadata=none;odata.streaming=false, application/json;odata.metadata=none, application/json;odata.streaming=true, application/json;odata.streaming=false, application/json, application/xml, application/prs.odatatestxx-odata, text/plain, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **kycGetLegalShareHolders**
> \MarketPay\Model\KycUserValidationLevelLegalShareHoldersListResponse kycGetLegalShareHolders($user_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = MarketPay\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new MarketPay\Api\KycApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 789; // int | 

try {
    $result = $apiInstance->kycGetLegalShareHolders($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KycApi->kycGetLegalShareHolders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**|  |

### Return type

[**\MarketPay\Model\KycUserValidationLevelLegalShareHoldersListResponse**](../Model/KycUserValidationLevelLegalShareHoldersListResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;odata.metadata=minimal;odata.streaming=true, application/json;odata.metadata=minimal;odata.streaming=false, application/json;odata.metadata=minimal, application/json;odata.metadata=full;odata.streaming=true, application/json;odata.metadata=full;odata.streaming=false, application/json;odata.metadata=full, application/json;odata.metadata=none;odata.streaming=true, application/json;odata.metadata=none;odata.streaming=false, application/json;odata.metadata=none, application/json;odata.streaming=true, application/json;odata.streaming=false, application/json, application/xml, application/prs.odatatestxx-odata, text/plain, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **kycGetNaturaList**
> \MarketPay\Model\ResponseListKycUserValidationLevelNaturalResponse kycGetNaturaList($page, $per_page, $first_name_contains, $last_name_contains, $id_card_contains)

List all Natural User



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = MarketPay\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new MarketPay\Api\KycApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | The page number of results you wish to return
$per_page = 56; // int | The number of results to return per page
$first_name_contains = "first_name_contains_example"; // string | 
$last_name_contains = "last_name_contains_example"; // string | 
$id_card_contains = "id_card_contains_example"; // string | 

try {
    $result = $apiInstance->kycGetNaturaList($page, $per_page, $first_name_contains, $last_name_contains, $id_card_contains);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KycApi->kycGetNaturaList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| The page number of results you wish to return | [optional]
 **per_page** | **int**| The number of results to return per page | [optional]
 **first_name_contains** | **string**|  | [optional]
 **last_name_contains** | **string**|  | [optional]
 **id_card_contains** | **string**|  | [optional]

### Return type

[**\MarketPay\Model\ResponseListKycUserValidationLevelNaturalResponse**](../Model/ResponseListKycUserValidationLevelNaturalResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;odata.metadata=minimal;odata.streaming=true, application/json;odata.metadata=minimal;odata.streaming=false, application/json;odata.metadata=minimal, application/json;odata.metadata=full;odata.streaming=true, application/json;odata.metadata=full;odata.streaming=false, application/json;odata.metadata=full, application/json;odata.metadata=none;odata.streaming=true, application/json;odata.metadata=none;odata.streaming=false, application/json;odata.metadata=none, application/json;odata.streaming=true, application/json;odata.streaming=false, application/json, application/xml, application/prs.odatatestxx-odata, text/plain, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **kycGetNatural**
> \MarketPay\Model\KycUserValidationLevelNaturalResponse kycGetNatural($user_id)

View a Natural User



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = MarketPay\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new MarketPay\Api\KycApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 789; // int | The Id of a natural user

try {
    $result = $apiInstance->kycGetNatural($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KycApi->kycGetNatural: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The Id of a natural user |

### Return type

[**\MarketPay\Model\KycUserValidationLevelNaturalResponse**](../Model/KycUserValidationLevelNaturalResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;odata.metadata=minimal;odata.streaming=true, application/json;odata.metadata=minimal;odata.streaming=false, application/json;odata.metadata=minimal, application/json;odata.metadata=full;odata.streaming=true, application/json;odata.metadata=full;odata.streaming=false, application/json;odata.metadata=full, application/json;odata.metadata=none;odata.streaming=true, application/json;odata.metadata=none;odata.streaming=false, application/json;odata.metadata=none, application/json;odata.streaming=true, application/json;odata.streaming=false, application/json, application/xml, application/prs.odatatestxx-odata, text/plain, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **kycGetValidation**
> \MarketPay\Model\KycValidationUserStatusResponse kycGetValidation($user_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = MarketPay\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new MarketPay\Api\KycApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 789; // int | 

try {
    $result = $apiInstance->kycGetValidation($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KycApi->kycGetValidation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**|  |

### Return type

[**\MarketPay\Model\KycValidationUserStatusResponse**](../Model/KycValidationUserStatusResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;odata.metadata=minimal;odata.streaming=true, application/json;odata.metadata=minimal;odata.streaming=false, application/json;odata.metadata=minimal, application/json;odata.metadata=full;odata.streaming=true, application/json;odata.metadata=full;odata.streaming=false, application/json;odata.metadata=full, application/json;odata.metadata=none;odata.streaming=true, application/json;odata.metadata=none;odata.streaming=false, application/json;odata.metadata=none, application/json;odata.streaming=true, application/json;odata.streaming=false, application/json, application/xml, application/prs.odatatestxx-odata, text/plain, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **kycGetValidationLegal**
> \MarketPay\Model\KycValidationUserLegalStatusResponse kycGetValidationLegal($user_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = MarketPay\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new MarketPay\Api\KycApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 789; // int | 

try {
    $result = $apiInstance->kycGetValidationLegal($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KycApi->kycGetValidationLegal: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**|  |

### Return type

[**\MarketPay\Model\KycValidationUserLegalStatusResponse**](../Model/KycValidationUserLegalStatusResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;odata.metadata=minimal;odata.streaming=true, application/json;odata.metadata=minimal;odata.streaming=false, application/json;odata.metadata=minimal, application/json;odata.metadata=full;odata.streaming=true, application/json;odata.metadata=full;odata.streaming=false, application/json;odata.metadata=full, application/json;odata.metadata=none;odata.streaming=true, application/json;odata.metadata=none;odata.streaming=false, application/json;odata.metadata=none, application/json;odata.streaming=true, application/json;odata.streaming=false, application/json, application/xml, application/prs.odatatestxx-odata, text/plain, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **kycPostDocument**
> \MarketPay\Model\KycFileUploadResponse kycPostDocument($document_type, $file, $user_id, $file_content_type)

Uploads a new document and uploads a file. If the document already exists it will be replaced.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = MarketPay\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new MarketPay\Api\KycApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$document_type = "document_type_example"; // string | 
$file = "/path/to/file.txt"; // \SplFileObject | 
$user_id = 789; // int | 
$file_content_type = "file_content_type_example"; // string | Mime type of the uploaded file. This parameter overrides the type associated to the file.

try {
    $result = $apiInstance->kycPostDocument($document_type, $file, $user_id, $file_content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KycApi->kycPostDocument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **document_type** | **string**|  |
 **file** | **\SplFileObject**|  |
 **user_id** | **int**|  |
 **file_content_type** | **string**| Mime type of the uploaded file. This parameter overrides the type associated to the file. | [optional]

### Return type

[**\MarketPay\Model\KycFileUploadResponse**](../Model/KycFileUploadResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json;odata.metadata=minimal;odata.streaming=true, application/json;odata.metadata=minimal;odata.streaming=false, application/json;odata.metadata=minimal, application/json;odata.metadata=full;odata.streaming=true, application/json;odata.metadata=full;odata.streaming=false, application/json;odata.metadata=full, application/json;odata.metadata=none;odata.streaming=true, application/json;odata.metadata=none;odata.streaming=false, application/json;odata.metadata=none, application/json;odata.streaming=true, application/json;odata.streaming=false, application/json, application/xml, application/prs.odatatestxx-odata, text/plain, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **kycPostDocumentBoardMember**
> \MarketPay\Model\KycFileUploadResponse kycPostDocumentBoardMember($board_member_id, $document_type, $file, $user_id, $file_content_type)

Uploads a new document. If the document already exists it will be replaced.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = MarketPay\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new MarketPay\Api\KycApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$board_member_id = 789; // int | 
$document_type = "document_type_example"; // string | 
$file = "/path/to/file.txt"; // \SplFileObject | 
$user_id = 789; // int | 
$file_content_type = "file_content_type_example"; // string | 

try {
    $result = $apiInstance->kycPostDocumentBoardMember($board_member_id, $document_type, $file, $user_id, $file_content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KycApi->kycPostDocumentBoardMember: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **board_member_id** | **int**|  |
 **document_type** | **string**|  |
 **file** | **\SplFileObject**|  |
 **user_id** | **int**|  |
 **file_content_type** | **string**|  | [optional]

### Return type

[**\MarketPay\Model\KycFileUploadResponse**](../Model/KycFileUploadResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json;odata.metadata=minimal;odata.streaming=true, application/json;odata.metadata=minimal;odata.streaming=false, application/json;odata.metadata=minimal, application/json;odata.metadata=full;odata.streaming=true, application/json;odata.metadata=full;odata.streaming=false, application/json;odata.metadata=full, application/json;odata.metadata=none;odata.streaming=true, application/json;odata.metadata=none;odata.streaming=false, application/json;odata.metadata=none, application/json;odata.streaming=true, application/json;odata.streaming=false, application/json, application/xml, application/prs.odatatestxx-odata, text/plain, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **kycPostDocumentShareholder**
> \MarketPay\Model\KycFileUploadResponse kycPostDocumentShareholder($document_type, $file, $shareholder_id, $user_id, $file_content_type)

Uploads a new document and uploads a file. If the document already exists it will be replaced.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = MarketPay\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new MarketPay\Api\KycApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$document_type = "document_type_example"; // string | 
$file = "/path/to/file.txt"; // \SplFileObject | 
$shareholder_id = 789; // int | 
$user_id = 789; // int | 
$file_content_type = "file_content_type_example"; // string | Mime type of the uploaded file. This parameter overrides the type associated to the file.

try {
    $result = $apiInstance->kycPostDocumentShareholder($document_type, $file, $shareholder_id, $user_id, $file_content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KycApi->kycPostDocumentShareholder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **document_type** | **string**|  |
 **file** | **\SplFileObject**|  |
 **shareholder_id** | **int**|  |
 **user_id** | **int**|  |
 **file_content_type** | **string**| Mime type of the uploaded file. This parameter overrides the type associated to the file. | [optional]

### Return type

[**\MarketPay\Model\KycFileUploadResponse**](../Model/KycFileUploadResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json;odata.metadata=minimal;odata.streaming=true, application/json;odata.metadata=minimal;odata.streaming=false, application/json;odata.metadata=minimal, application/json;odata.metadata=full;odata.streaming=true, application/json;odata.metadata=full;odata.streaming=false, application/json;odata.metadata=full, application/json;odata.metadata=none;odata.streaming=true, application/json;odata.metadata=none;odata.streaming=false, application/json;odata.metadata=none, application/json;odata.streaming=true, application/json;odata.streaming=false, application/json, application/xml, application/prs.odatatestxx-odata, text/plain, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **kycPostLegal**
> \MarketPay\Model\KycUserValidationLevelLegalResponse kycPostLegal($user_id, $kyc_user_legal)

Update a Legal User Kyc Data

Note that the Birthday field is a timestamp, but be careful to ensure that the time is midnight UTC (otherwise a local time can be understood as 23h UTC, and therefore rendering the wrong date which will present problems when needing to validate the KYC identity)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = MarketPay\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new MarketPay\Api\KycApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 789; // int | The Id of a user
$kyc_user_legal = new \MarketPay\Model\KycUserLegalPut(); // \MarketPay\Model\KycUserLegalPut | UserLegal Kyc detail params

try {
    $result = $apiInstance->kycPostLegal($user_id, $kyc_user_legal);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KycApi->kycPostLegal: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The Id of a user |
 **kyc_user_legal** | [**\MarketPay\Model\KycUserLegalPut**](../Model/KycUserLegalPut.md)| UserLegal Kyc detail params | [optional]

### Return type

[**\MarketPay\Model\KycUserValidationLevelLegalResponse**](../Model/KycUserValidationLevelLegalResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json;odata.metadata=minimal;odata.streaming=true, application/json;odata.metadata=minimal;odata.streaming=false, application/json;odata.metadata=minimal, application/json;odata.metadata=full;odata.streaming=true, application/json;odata.metadata=full;odata.streaming=false, application/json;odata.metadata=full, application/json;odata.metadata=none;odata.streaming=true, application/json;odata.metadata=none;odata.streaming=false, application/json;odata.metadata=none, application/json;odata.streaming=true, application/json;odata.streaming=false, application/json, application/xml, application/prs.odatatestxx-odata, application/json;odata.metadata=minimal;odata.streaming=true, application/json;odata.metadata=minimal;odata.streaming=false, application/json;odata.metadata=minimal, application/json;odata.metadata=full;odata.streaming=true, application/json;odata.metadata=full;odata.streaming=false, application/json;odata.metadata=full, application/json;odata.metadata=none;odata.streaming=true, application/json;odata.metadata=none;odata.streaming=false, application/json;odata.metadata=none, application/json;odata.streaming=true, application/json;odata.streaming=false, application/json, application/xml, application/prs.odatatestxx-odata, application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: application/json;odata.metadata=minimal;odata.streaming=true, application/json;odata.metadata=minimal;odata.streaming=false, application/json;odata.metadata=minimal, application/json;odata.metadata=full;odata.streaming=true, application/json;odata.metadata=full;odata.streaming=false, application/json;odata.metadata=full, application/json;odata.metadata=none;odata.streaming=true, application/json;odata.metadata=none;odata.streaming=false, application/json;odata.metadata=none, application/json;odata.streaming=true, application/json;odata.streaming=false, application/json, application/xml, application/prs.odatatestxx-odata, text/plain, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **kycPostLegalBoardMember**
> \MarketPay\Model\KycBoardMemberResponse kycPostLegalBoardMember($user_id, $board_member)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = MarketPay\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new MarketPay\Api\KycApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 789; // int | 
$board_member = new \MarketPay\Model\KycUserValidationBoardMemberPost(); // \MarketPay\Model\KycUserValidationBoardMemberPost | 

try {
    $result = $apiInstance->kycPostLegalBoardMember($user_id, $board_member);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KycApi->kycPostLegalBoardMember: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**|  |
 **board_member** | [**\MarketPay\Model\KycUserValidationBoardMemberPost**](../Model/KycUserValidationBoardMemberPost.md)|  | [optional]

### Return type

[**\MarketPay\Model\KycBoardMemberResponse**](../Model/KycBoardMemberResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json;odata.metadata=minimal;odata.streaming=true, application/json;odata.metadata=minimal;odata.streaming=false, application/json;odata.metadata=minimal, application/json;odata.metadata=full;odata.streaming=true, application/json;odata.metadata=full;odata.streaming=false, application/json;odata.metadata=full, application/json;odata.metadata=none;odata.streaming=true, application/json;odata.metadata=none;odata.streaming=false, application/json;odata.metadata=none, application/json;odata.streaming=true, application/json;odata.streaming=false, application/json, application/xml, application/prs.odatatestxx-odata, application/json;odata.metadata=minimal;odata.streaming=true, application/json;odata.metadata=minimal;odata.streaming=false, application/json;odata.metadata=minimal, application/json;odata.metadata=full;odata.streaming=true, application/json;odata.metadata=full;odata.streaming=false, application/json;odata.metadata=full, application/json;odata.metadata=none;odata.streaming=true, application/json;odata.metadata=none;odata.streaming=false, application/json;odata.metadata=none, application/json;odata.streaming=true, application/json;odata.streaming=false, application/json, application/xml, application/prs.odatatestxx-odata, application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: application/json;odata.metadata=minimal;odata.streaming=true, application/json;odata.metadata=minimal;odata.streaming=false, application/json;odata.metadata=minimal, application/json;odata.metadata=full;odata.streaming=true, application/json;odata.metadata=full;odata.streaming=false, application/json;odata.metadata=full, application/json;odata.metadata=none;odata.streaming=true, application/json;odata.metadata=none;odata.streaming=false, application/json;odata.metadata=none, application/json;odata.streaming=true, application/json;odata.streaming=false, application/json, application/xml, application/prs.odatatestxx-odata, text/plain, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **kycPostLegalShareHolder**
> \MarketPay\Model\KycShareHolderResponse kycPostLegalShareHolder($user_id, $share_holder_natural)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = MarketPay\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new MarketPay\Api\KycApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 789; // int | 
$share_holder_natural = new \MarketPay\Model\KycUserValidationShareHolderNaturalPost(); // \MarketPay\Model\KycUserValidationShareHolderNaturalPost | 

try {
    $result = $apiInstance->kycPostLegalShareHolder($user_id, $share_holder_natural);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KycApi->kycPostLegalShareHolder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**|  |
 **share_holder_natural** | [**\MarketPay\Model\KycUserValidationShareHolderNaturalPost**](../Model/KycUserValidationShareHolderNaturalPost.md)|  | [optional]

### Return type

[**\MarketPay\Model\KycShareHolderResponse**](../Model/KycShareHolderResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json;odata.metadata=minimal;odata.streaming=true, application/json;odata.metadata=minimal;odata.streaming=false, application/json;odata.metadata=minimal, application/json;odata.metadata=full;odata.streaming=true, application/json;odata.metadata=full;odata.streaming=false, application/json;odata.metadata=full, application/json;odata.metadata=none;odata.streaming=true, application/json;odata.metadata=none;odata.streaming=false, application/json;odata.metadata=none, application/json;odata.streaming=true, application/json;odata.streaming=false, application/json, application/xml, application/prs.odatatestxx-odata, application/json;odata.metadata=minimal;odata.streaming=true, application/json;odata.metadata=minimal;odata.streaming=false, application/json;odata.metadata=minimal, application/json;odata.metadata=full;odata.streaming=true, application/json;odata.metadata=full;odata.streaming=false, application/json;odata.metadata=full, application/json;odata.metadata=none;odata.streaming=true, application/json;odata.metadata=none;odata.streaming=false, application/json;odata.metadata=none, application/json;odata.streaming=true, application/json;odata.streaming=false, application/json, application/xml, application/prs.odatatestxx-odata, application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: application/json;odata.metadata=minimal;odata.streaming=true, application/json;odata.metadata=minimal;odata.streaming=false, application/json;odata.metadata=minimal, application/json;odata.metadata=full;odata.streaming=true, application/json;odata.metadata=full;odata.streaming=false, application/json;odata.metadata=full, application/json;odata.metadata=none;odata.streaming=true, application/json;odata.metadata=none;odata.streaming=false, application/json;odata.metadata=none, application/json;odata.streaming=true, application/json;odata.streaming=false, application/json, application/xml, application/prs.odatatestxx-odata, text/plain, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **kycPostNatural**
> \MarketPay\Model\KycUserValidationLevelNaturalResponse kycPostNatural($user_id, $kyc_user_natural)

Update a Natural User Kyc Data

Note that the Birthday field is a timestamp, but be careful to ensure that the time is midnight UTC (otherwise a local time can be understood as 23h UTC, and therefore rendering the wrong date which will present problems when needing to validate the KYC identity)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = MarketPay\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new MarketPay\Api\KycApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 789; // int | The Id of a user
$kyc_user_natural = new \MarketPay\Model\KycUserNaturalPut(); // \MarketPay\Model\KycUserNaturalPut | UserNatural Kyc detail params

try {
    $result = $apiInstance->kycPostNatural($user_id, $kyc_user_natural);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KycApi->kycPostNatural: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The Id of a user |
 **kyc_user_natural** | [**\MarketPay\Model\KycUserNaturalPut**](../Model/KycUserNaturalPut.md)| UserNatural Kyc detail params | [optional]

### Return type

[**\MarketPay\Model\KycUserValidationLevelNaturalResponse**](../Model/KycUserValidationLevelNaturalResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json;odata.metadata=minimal;odata.streaming=true, application/json;odata.metadata=minimal;odata.streaming=false, application/json;odata.metadata=minimal, application/json;odata.metadata=full;odata.streaming=true, application/json;odata.metadata=full;odata.streaming=false, application/json;odata.metadata=full, application/json;odata.metadata=none;odata.streaming=true, application/json;odata.metadata=none;odata.streaming=false, application/json;odata.metadata=none, application/json;odata.streaming=true, application/json;odata.streaming=false, application/json, application/xml, application/prs.odatatestxx-odata, application/json;odata.metadata=minimal;odata.streaming=true, application/json;odata.metadata=minimal;odata.streaming=false, application/json;odata.metadata=minimal, application/json;odata.metadata=full;odata.streaming=true, application/json;odata.metadata=full;odata.streaming=false, application/json;odata.metadata=full, application/json;odata.metadata=none;odata.streaming=true, application/json;odata.metadata=none;odata.streaming=false, application/json;odata.metadata=none, application/json;odata.streaming=true, application/json;odata.streaming=false, application/json, application/xml, application/prs.odatatestxx-odata, application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: application/json;odata.metadata=minimal;odata.streaming=true, application/json;odata.metadata=minimal;odata.streaming=false, application/json;odata.metadata=minimal, application/json;odata.metadata=full;odata.streaming=true, application/json;odata.metadata=full;odata.streaming=false, application/json;odata.metadata=full, application/json;odata.metadata=none;odata.streaming=true, application/json;odata.metadata=none;odata.streaming=false, application/json;odata.metadata=none, application/json;odata.streaming=true, application/json;odata.streaming=false, application/json, application/xml, application/prs.odatatestxx-odata, text/plain, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **kycPutDocument**
> \MarketPay\Model\KycFileUploadResponse kycPutDocument($document_type, $file, $user_id, $file_content_type)

Adds files to a document.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = MarketPay\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new MarketPay\Api\KycApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$document_type = "document_type_example"; // string | 
$file = "/path/to/file.txt"; // \SplFileObject | 
$user_id = 789; // int | 
$file_content_type = "file_content_type_example"; // string | Mime type of the uploaded file. This parameter overrides the type associated to the file.

try {
    $result = $apiInstance->kycPutDocument($document_type, $file, $user_id, $file_content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KycApi->kycPutDocument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **document_type** | **string**|  |
 **file** | **\SplFileObject**|  |
 **user_id** | **int**|  |
 **file_content_type** | **string**| Mime type of the uploaded file. This parameter overrides the type associated to the file. | [optional]

### Return type

[**\MarketPay\Model\KycFileUploadResponse**](../Model/KycFileUploadResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json;odata.metadata=minimal;odata.streaming=true, application/json;odata.metadata=minimal;odata.streaming=false, application/json;odata.metadata=minimal, application/json;odata.metadata=full;odata.streaming=true, application/json;odata.metadata=full;odata.streaming=false, application/json;odata.metadata=full, application/json;odata.metadata=none;odata.streaming=true, application/json;odata.metadata=none;odata.streaming=false, application/json;odata.metadata=none, application/json;odata.streaming=true, application/json;odata.streaming=false, application/json, application/xml, application/prs.odatatestxx-odata, text/plain, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **kycPutDocumentBoardMember**
> \MarketPay\Model\KycFileUploadResponse kycPutDocumentBoardMember($board_member_id, $document_type, $file, $user_id, $file_content_type)

Uploads a new document. If the document already exists it will be replaced.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = MarketPay\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new MarketPay\Api\KycApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$board_member_id = 789; // int | 
$document_type = "document_type_example"; // string | 
$file = "/path/to/file.txt"; // \SplFileObject | 
$user_id = 789; // int | 
$file_content_type = "file_content_type_example"; // string | 

try {
    $result = $apiInstance->kycPutDocumentBoardMember($board_member_id, $document_type, $file, $user_id, $file_content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KycApi->kycPutDocumentBoardMember: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **board_member_id** | **int**|  |
 **document_type** | **string**|  |
 **file** | **\SplFileObject**|  |
 **user_id** | **int**|  |
 **file_content_type** | **string**|  | [optional]

### Return type

[**\MarketPay\Model\KycFileUploadResponse**](../Model/KycFileUploadResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json;odata.metadata=minimal;odata.streaming=true, application/json;odata.metadata=minimal;odata.streaming=false, application/json;odata.metadata=minimal, application/json;odata.metadata=full;odata.streaming=true, application/json;odata.metadata=full;odata.streaming=false, application/json;odata.metadata=full, application/json;odata.metadata=none;odata.streaming=true, application/json;odata.metadata=none;odata.streaming=false, application/json;odata.metadata=none, application/json;odata.streaming=true, application/json;odata.streaming=false, application/json, application/xml, application/prs.odatatestxx-odata, text/plain, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **kycPutDocumentShareholder**
> \MarketPay\Model\KycFileUploadResponse kycPutDocumentShareholder($document_type, $file, $share_holder_id, $user_id, $file_content_type)

Adds files to a document.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = MarketPay\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new MarketPay\Api\KycApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$document_type = "document_type_example"; // string | 
$file = "/path/to/file.txt"; // \SplFileObject | 
$share_holder_id = 789; // int | 
$user_id = 789; // int | 
$file_content_type = "file_content_type_example"; // string | Mime type of the uploaded file. This parameter overrides the type associated to the file.

try {
    $result = $apiInstance->kycPutDocumentShareholder($document_type, $file, $share_holder_id, $user_id, $file_content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KycApi->kycPutDocumentShareholder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **document_type** | **string**|  |
 **file** | **\SplFileObject**|  |
 **share_holder_id** | **int**|  |
 **user_id** | **int**|  |
 **file_content_type** | **string**| Mime type of the uploaded file. This parameter overrides the type associated to the file. | [optional]

### Return type

[**\MarketPay\Model\KycFileUploadResponse**](../Model/KycFileUploadResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json;odata.metadata=minimal;odata.streaming=true, application/json;odata.metadata=minimal;odata.streaming=false, application/json;odata.metadata=minimal, application/json;odata.metadata=full;odata.streaming=true, application/json;odata.metadata=full;odata.streaming=false, application/json;odata.metadata=full, application/json;odata.metadata=none;odata.streaming=true, application/json;odata.metadata=none;odata.streaming=false, application/json;odata.metadata=none, application/json;odata.streaming=true, application/json;odata.streaming=false, application/json, application/xml, application/prs.odatatestxx-odata, text/plain, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **kycPutLegal**
> \MarketPay\Model\KycUserValidationLevelLegalResponse kycPutLegal($user_id, $user_legal)

Update a Legal User

Note that the LegalRepresentativeBirthday field is a timestamp, but be careful to ensure that the time is midnight UTC (otherwise a local time can be understood as 23h UTC, and therefore rendering the wrong date which will present problems when needing to validate the KYC identity)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = MarketPay\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new MarketPay\Api\KycApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 789; // int | The Id of a user
$user_legal = new \MarketPay\Model\KycUserLegalPut(); // \MarketPay\Model\KycUserLegalPut | UserLegal Object params

try {
    $result = $apiInstance->kycPutLegal($user_id, $user_legal);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KycApi->kycPutLegal: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The Id of a user |
 **user_legal** | [**\MarketPay\Model\KycUserLegalPut**](../Model/KycUserLegalPut.md)| UserLegal Object params | [optional]

### Return type

[**\MarketPay\Model\KycUserValidationLevelLegalResponse**](../Model/KycUserValidationLevelLegalResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json;odata.metadata=minimal;odata.streaming=true, application/json;odata.metadata=minimal;odata.streaming=false, application/json;odata.metadata=minimal, application/json;odata.metadata=full;odata.streaming=true, application/json;odata.metadata=full;odata.streaming=false, application/json;odata.metadata=full, application/json;odata.metadata=none;odata.streaming=true, application/json;odata.metadata=none;odata.streaming=false, application/json;odata.metadata=none, application/json;odata.streaming=true, application/json;odata.streaming=false, application/json, application/xml, application/prs.odatatestxx-odata, application/json;odata.metadata=minimal;odata.streaming=true, application/json;odata.metadata=minimal;odata.streaming=false, application/json;odata.metadata=minimal, application/json;odata.metadata=full;odata.streaming=true, application/json;odata.metadata=full;odata.streaming=false, application/json;odata.metadata=full, application/json;odata.metadata=none;odata.streaming=true, application/json;odata.metadata=none;odata.streaming=false, application/json;odata.metadata=none, application/json;odata.streaming=true, application/json;odata.streaming=false, application/json, application/xml, application/prs.odatatestxx-odata, application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: application/json;odata.metadata=minimal;odata.streaming=true, application/json;odata.metadata=minimal;odata.streaming=false, application/json;odata.metadata=minimal, application/json;odata.metadata=full;odata.streaming=true, application/json;odata.metadata=full;odata.streaming=false, application/json;odata.metadata=full, application/json;odata.metadata=none;odata.streaming=true, application/json;odata.metadata=none;odata.streaming=false, application/json;odata.metadata=none, application/json;odata.streaming=true, application/json;odata.streaming=false, application/json, application/xml, application/prs.odatatestxx-odata, text/plain, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **kycPutLegalBoardMember**
> \MarketPay\Model\KycBoardMemberResponse kycPutLegalBoardMember($board_member_id, $user_id, $board_member)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = MarketPay\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new MarketPay\Api\KycApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$board_member_id = 789; // int | 
$user_id = "user_id_example"; // string | 
$board_member = new \MarketPay\Model\KycUserValidationBoardMemberPut(); // \MarketPay\Model\KycUserValidationBoardMemberPut | 

try {
    $result = $apiInstance->kycPutLegalBoardMember($board_member_id, $user_id, $board_member);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KycApi->kycPutLegalBoardMember: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **board_member_id** | **int**|  |
 **user_id** | **string**|  |
 **board_member** | [**\MarketPay\Model\KycUserValidationBoardMemberPut**](../Model/KycUserValidationBoardMemberPut.md)|  | [optional]

### Return type

[**\MarketPay\Model\KycBoardMemberResponse**](../Model/KycBoardMemberResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json;odata.metadata=minimal;odata.streaming=true, application/json;odata.metadata=minimal;odata.streaming=false, application/json;odata.metadata=minimal, application/json;odata.metadata=full;odata.streaming=true, application/json;odata.metadata=full;odata.streaming=false, application/json;odata.metadata=full, application/json;odata.metadata=none;odata.streaming=true, application/json;odata.metadata=none;odata.streaming=false, application/json;odata.metadata=none, application/json;odata.streaming=true, application/json;odata.streaming=false, application/json, application/xml, application/prs.odatatestxx-odata, application/json;odata.metadata=minimal;odata.streaming=true, application/json;odata.metadata=minimal;odata.streaming=false, application/json;odata.metadata=minimal, application/json;odata.metadata=full;odata.streaming=true, application/json;odata.metadata=full;odata.streaming=false, application/json;odata.metadata=full, application/json;odata.metadata=none;odata.streaming=true, application/json;odata.metadata=none;odata.streaming=false, application/json;odata.metadata=none, application/json;odata.streaming=true, application/json;odata.streaming=false, application/json, application/xml, application/prs.odatatestxx-odata, application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: application/json;odata.metadata=minimal;odata.streaming=true, application/json;odata.metadata=minimal;odata.streaming=false, application/json;odata.metadata=minimal, application/json;odata.metadata=full;odata.streaming=true, application/json;odata.metadata=full;odata.streaming=false, application/json;odata.metadata=full, application/json;odata.metadata=none;odata.streaming=true, application/json;odata.metadata=none;odata.streaming=false, application/json;odata.metadata=none, application/json;odata.streaming=true, application/json;odata.streaming=false, application/json, application/xml, application/prs.odatatestxx-odata, text/plain, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **kycPutLegalShareHolder**
> \MarketPay\Model\KycUserValidationShareHolderListItemResponseNatural kycPutLegalShareHolder($user_id, $share_holder_id, $share_holder_natural)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = MarketPay\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new MarketPay\Api\KycApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 789; // int | 
$share_holder_id = 789; // int | 
$share_holder_natural = new \MarketPay\Model\KycUserValidationShareHolderNaturalPut(); // \MarketPay\Model\KycUserValidationShareHolderNaturalPut | 

try {
    $result = $apiInstance->kycPutLegalShareHolder($user_id, $share_holder_id, $share_holder_natural);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KycApi->kycPutLegalShareHolder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**|  |
 **share_holder_id** | **int**|  |
 **share_holder_natural** | [**\MarketPay\Model\KycUserValidationShareHolderNaturalPut**](../Model/KycUserValidationShareHolderNaturalPut.md)|  | [optional]

### Return type

[**\MarketPay\Model\KycUserValidationShareHolderListItemResponseNatural**](../Model/KycUserValidationShareHolderListItemResponseNatural.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json;odata.metadata=minimal;odata.streaming=true, application/json;odata.metadata=minimal;odata.streaming=false, application/json;odata.metadata=minimal, application/json;odata.metadata=full;odata.streaming=true, application/json;odata.metadata=full;odata.streaming=false, application/json;odata.metadata=full, application/json;odata.metadata=none;odata.streaming=true, application/json;odata.metadata=none;odata.streaming=false, application/json;odata.metadata=none, application/json;odata.streaming=true, application/json;odata.streaming=false, application/json, application/xml, application/prs.odatatestxx-odata, application/json;odata.metadata=minimal;odata.streaming=true, application/json;odata.metadata=minimal;odata.streaming=false, application/json;odata.metadata=minimal, application/json;odata.metadata=full;odata.streaming=true, application/json;odata.metadata=full;odata.streaming=false, application/json;odata.metadata=full, application/json;odata.metadata=none;odata.streaming=true, application/json;odata.metadata=none;odata.streaming=false, application/json;odata.metadata=none, application/json;odata.streaming=true, application/json;odata.streaming=false, application/json, application/xml, application/prs.odatatestxx-odata, application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: application/json;odata.metadata=minimal;odata.streaming=true, application/json;odata.metadata=minimal;odata.streaming=false, application/json;odata.metadata=minimal, application/json;odata.metadata=full;odata.streaming=true, application/json;odata.metadata=full;odata.streaming=false, application/json;odata.metadata=full, application/json;odata.metadata=none;odata.streaming=true, application/json;odata.metadata=none;odata.streaming=false, application/json;odata.metadata=none, application/json;odata.streaming=true, application/json;odata.streaming=false, application/json, application/xml, application/prs.odatatestxx-odata, text/plain, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **kycPutRequest**
> \MarketPay\Model\KycValidationRequestResponse kycPutRequest($user_id, $validation_request)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = MarketPay\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new MarketPay\Api\KycApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 789; // int | 
$validation_request = new \MarketPay\Model\KycIdentificationRequest(); // \MarketPay\Model\KycIdentificationRequest | 

try {
    $result = $apiInstance->kycPutRequest($user_id, $validation_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KycApi->kycPutRequest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**|  |
 **validation_request** | [**\MarketPay\Model\KycIdentificationRequest**](../Model/KycIdentificationRequest.md)|  | [optional]

### Return type

[**\MarketPay\Model\KycValidationRequestResponse**](../Model/KycValidationRequestResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json;odata.metadata=minimal;odata.streaming=true, application/json;odata.metadata=minimal;odata.streaming=false, application/json;odata.metadata=minimal, application/json;odata.metadata=full;odata.streaming=true, application/json;odata.metadata=full;odata.streaming=false, application/json;odata.metadata=full, application/json;odata.metadata=none;odata.streaming=true, application/json;odata.metadata=none;odata.streaming=false, application/json;odata.metadata=none, application/json;odata.streaming=true, application/json;odata.streaming=false, application/json, application/xml, application/prs.odatatestxx-odata, application/json;odata.metadata=minimal;odata.streaming=true, application/json;odata.metadata=minimal;odata.streaming=false, application/json;odata.metadata=minimal, application/json;odata.metadata=full;odata.streaming=true, application/json;odata.metadata=full;odata.streaming=false, application/json;odata.metadata=full, application/json;odata.metadata=none;odata.streaming=true, application/json;odata.metadata=none;odata.streaming=false, application/json;odata.metadata=none, application/json;odata.streaming=true, application/json;odata.streaming=false, application/json, application/xml, application/prs.odatatestxx-odata, application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: application/json;odata.metadata=minimal;odata.streaming=true, application/json;odata.metadata=minimal;odata.streaming=false, application/json;odata.metadata=minimal, application/json;odata.metadata=full;odata.streaming=true, application/json;odata.metadata=full;odata.streaming=false, application/json;odata.metadata=full, application/json;odata.metadata=none;odata.streaming=true, application/json;odata.metadata=none;odata.streaming=false, application/json;odata.metadata=none, application/json;odata.streaming=true, application/json;odata.streaming=false, application/json, application/xml, application/prs.odatatestxx-odata, text/plain, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **kycPutRequestLegal**
> \MarketPay\Model\KycValidationRequestResponse kycPutRequestLegal($user_id, $validation_request)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = MarketPay\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new MarketPay\Api\KycApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 789; // int | 
$validation_request = new \MarketPay\Model\KycIdentificationRequest(); // \MarketPay\Model\KycIdentificationRequest | 

try {
    $result = $apiInstance->kycPutRequestLegal($user_id, $validation_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KycApi->kycPutRequestLegal: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**|  |
 **validation_request** | [**\MarketPay\Model\KycIdentificationRequest**](../Model/KycIdentificationRequest.md)|  | [optional]

### Return type

[**\MarketPay\Model\KycValidationRequestResponse**](../Model/KycValidationRequestResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json;odata.metadata=minimal;odata.streaming=true, application/json;odata.metadata=minimal;odata.streaming=false, application/json;odata.metadata=minimal, application/json;odata.metadata=full;odata.streaming=true, application/json;odata.metadata=full;odata.streaming=false, application/json;odata.metadata=full, application/json;odata.metadata=none;odata.streaming=true, application/json;odata.metadata=none;odata.streaming=false, application/json;odata.metadata=none, application/json;odata.streaming=true, application/json;odata.streaming=false, application/json, application/xml, application/prs.odatatestxx-odata, application/json;odata.metadata=minimal;odata.streaming=true, application/json;odata.metadata=minimal;odata.streaming=false, application/json;odata.metadata=minimal, application/json;odata.metadata=full;odata.streaming=true, application/json;odata.metadata=full;odata.streaming=false, application/json;odata.metadata=full, application/json;odata.metadata=none;odata.streaming=true, application/json;odata.metadata=none;odata.streaming=false, application/json;odata.metadata=none, application/json;odata.streaming=true, application/json;odata.streaming=false, application/json, application/xml, application/prs.odatatestxx-odata, application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: application/json;odata.metadata=minimal;odata.streaming=true, application/json;odata.metadata=minimal;odata.streaming=false, application/json;odata.metadata=minimal, application/json;odata.metadata=full;odata.streaming=true, application/json;odata.metadata=full;odata.streaming=false, application/json;odata.metadata=full, application/json;odata.metadata=none;odata.streaming=true, application/json;odata.metadata=none;odata.streaming=false, application/json;odata.metadata=none, application/json;odata.streaming=true, application/json;odata.streaming=false, application/json, application/xml, application/prs.odatatestxx-odata, text/plain, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

