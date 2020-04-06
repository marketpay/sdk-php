# MarketPay\KycApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**kycDeleteLegalBoardMember**](KycApi.md#kycDeleteLegalBoardMember) | **DELETE** /v2.1/Kyc/users/legal/{UserId}/boardmembers/{BoardMemberId} | 
[**kycDeleteLegalShareHolderNatural**](KycApi.md#kycDeleteLegalShareHolderNatural) | **DELETE** /v2.1/Kyc/users/legal/{UserId}/shareholders/natural/{ShareHolderId} | 
[**kycGetFile**](KycApi.md#kycGetFile) | **GET** /v2.1/Kyc/document/{DocumentId} | 
[**kycGetLegal**](KycApi.md#kycGetLegal) | **GET** /v2.1/Kyc/users/legal/{UserId} | 
[**kycGetLegalBoardMember**](KycApi.md#kycGetLegalBoardMember) | **GET** /v2.1/Kyc/users/legal/{UserId}/boardmembers/{BoardMemberId} | 
[**kycGetLegalBoardMembers**](KycApi.md#kycGetLegalBoardMembers) | **GET** /v2.1/Kyc/users/legal/{UserId}/boardmembers | 
[**kycGetLegalList**](KycApi.md#kycGetLegalList) | **GET** /v2.1/Kyc/users/legal | 
[**kycGetLegalShareHolderNatural**](KycApi.md#kycGetLegalShareHolderNatural) | **GET** /v2.1/Kyc/users/legal/{UserId}/shareholders/natural/{ShareHolderId} | 
[**kycGetLegalShareHolders**](KycApi.md#kycGetLegalShareHolders) | **GET** /v2.1/Kyc/users/legal/{UserId}/shareholders/natural | 
[**kycGetNaturaList**](KycApi.md#kycGetNaturaList) | **GET** /v2.1/Kyc/users/natural | 
[**kycGetNatural**](KycApi.md#kycGetNatural) | **GET** /v2.1/Kyc/users/natural/{UserId} | 
[**kycGetValidation**](KycApi.md#kycGetValidation) | **GET** /v2.1/Kyc/users/natural/{UserId}/validation | 
[**kycGetValidationLegal**](KycApi.md#kycGetValidationLegal) | **GET** /v2.1/Kyc/users/legal/{UserId}/validation | 
[**kycPostDocument**](KycApi.md#kycPostDocument) | **POST** /v2.1/Kyc/users/{UserId}/documents/new/{DocumentType} | 
[**kycPostDocumentBoardMember**](KycApi.md#kycPostDocumentBoardMember) | **POST** /v2.1/Kyc/users/legal/{UserId}/boardmember/{BoardMemberId}/documents/new/{DocumentType} | 
[**kycPostDocumentShareholder**](KycApi.md#kycPostDocumentShareholder) | **POST** /v2.1/Kyc/users/legal/{UserId}/shareholder/{ShareholderId}/documents/new/{DocumentType} | 
[**kycPostLegal**](KycApi.md#kycPostLegal) | **POST** /v2.1/Kyc/users/legal/{UserId} | 
[**kycPostLegalBoardMember**](KycApi.md#kycPostLegalBoardMember) | **POST** /v2.1/Kyc/users/legal/{UserId}/boardmembers | 
[**kycPostLegalShareHolder**](KycApi.md#kycPostLegalShareHolder) | **POST** /v2.1/Kyc/users/legal/{UserId}/shareholders/natural | 
[**kycPostNatural**](KycApi.md#kycPostNatural) | **POST** /v2.1/Kyc/users/natural/{UserId} | 
[**kycPutDocument**](KycApi.md#kycPutDocument) | **PUT** /v2.1/Kyc/users/{UserId}/documents/add/{DocumentType} | 
[**kycPutDocumentBoardMember**](KycApi.md#kycPutDocumentBoardMember) | **PUT** /v2.1/Kyc/users/legal/{UserId}/boardmember/{BoardMemberId}/documents/add/{DocumentType} | 
[**kycPutDocumentShareholder**](KycApi.md#kycPutDocumentShareholder) | **PUT** /v2.1/Kyc/users/legal/{UserId}/shareholder/{ShareholderId}/documents/add/{DocumentType} | 
[**kycPutLegal**](KycApi.md#kycPutLegal) | **PUT** /v2.1/Kyc/users/legal/{UserId} | 
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
 - **Accept**: text/plain, application/json, text/json

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
 - **Accept**: text/plain, application/json, text/json

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
 - **Accept**: text/plain, application/json, text/json, application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **kycGetLegal**
> \MarketPay\Model\KycUserValidationLevelLegalResponse kycGetLegal($user_id)



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
 **user_id** | **int**|  |

### Return type

[**\MarketPay\Model\KycUserValidationLevelLegalResponse**](../Model/KycUserValidationLevelLegalResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

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
 - **Accept**: text/plain, application/json, text/json

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
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **kycGetLegalList**
> \MarketPay\Model\KycUserValidationLevelLegalResponseResponseList kycGetLegalList($page, $per_page, $name_contains, $fiscal_id_contains)



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
$page = 56; // int | 
$per_page = 56; // int | 
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
 **page** | **int**|  | [optional]
 **per_page** | **int**|  | [optional]
 **name_contains** | **string**|  | [optional]
 **fiscal_id_contains** | **string**|  | [optional]

### Return type

[**\MarketPay\Model\KycUserValidationLevelLegalResponseResponseList**](../Model/KycUserValidationLevelLegalResponseResponseList.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

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
 - **Accept**: text/plain, application/json, text/json

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
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **kycGetNaturaList**
> \MarketPay\Model\KycUserValidationLevelNaturalResponseResponseList kycGetNaturaList($page, $per_page, $first_name_contains, $last_name_contains, $id_card_contains)



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
$page = 56; // int | 
$per_page = 56; // int | 
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
 **page** | **int**|  | [optional]
 **per_page** | **int**|  | [optional]
 **first_name_contains** | **string**|  | [optional]
 **last_name_contains** | **string**|  | [optional]
 **id_card_contains** | **string**|  | [optional]

### Return type

[**\MarketPay\Model\KycUserValidationLevelNaturalResponseResponseList**](../Model/KycUserValidationLevelNaturalResponseResponseList.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **kycGetNatural**
> \MarketPay\Model\KycUserValidationLevelNaturalResponse kycGetNatural($user_id)



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
 **user_id** | **int**|  |

### Return type

[**\MarketPay\Model\KycUserValidationLevelNaturalResponse**](../Model/KycUserValidationLevelNaturalResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

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
 - **Accept**: text/plain, application/json, text/json

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
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **kycPostDocument**
> \MarketPay\Model\KycFileUploadResponse kycPostDocument($user_id, $document_type, $file_content_type, $content_type, $content_disposition, $headers, $length, $name, $file_name)



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
$document_type = "document_type_example"; // string | 
$file_content_type = "file_content_type_example"; // string | 
$content_type = "content_type_example"; // string | 
$content_disposition = "content_disposition_example"; // string | 
$headers = "headers_example"; // string | 
$length = 789; // int | 
$name = "name_example"; // string | 
$file_name = "file_name_example"; // string | 

try {
    $result = $apiInstance->kycPostDocument($user_id, $document_type, $file_content_type, $content_type, $content_disposition, $headers, $length, $name, $file_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KycApi->kycPostDocument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**|  |
 **document_type** | **string**|  |
 **file_content_type** | **string**|  | [optional]
 **content_type** | **string**|  | [optional]
 **content_disposition** | **string**|  | [optional]
 **headers** | **string**|  | [optional]
 **length** | **int**|  | [optional]
 **name** | **string**|  | [optional]
 **file_name** | **string**|  | [optional]

### Return type

[**\MarketPay\Model\KycFileUploadResponse**](../Model/KycFileUploadResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **kycPostDocumentBoardMember**
> \MarketPay\Model\KycFileUploadResponse kycPostDocumentBoardMember($user_id, $board_member_id, $document_type, $file_content_type, $content_type, $content_disposition, $headers, $length, $name, $file_name)



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
$board_member_id = 789; // int | 
$document_type = "document_type_example"; // string | 
$file_content_type = "file_content_type_example"; // string | 
$content_type = "content_type_example"; // string | 
$content_disposition = "content_disposition_example"; // string | 
$headers = "headers_example"; // string | 
$length = 789; // int | 
$name = "name_example"; // string | 
$file_name = "file_name_example"; // string | 

try {
    $result = $apiInstance->kycPostDocumentBoardMember($user_id, $board_member_id, $document_type, $file_content_type, $content_type, $content_disposition, $headers, $length, $name, $file_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KycApi->kycPostDocumentBoardMember: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**|  |
 **board_member_id** | **int**|  |
 **document_type** | **string**|  |
 **file_content_type** | **string**|  | [optional]
 **content_type** | **string**|  | [optional]
 **content_disposition** | **string**|  | [optional]
 **headers** | **string**|  | [optional]
 **length** | **int**|  | [optional]
 **name** | **string**|  | [optional]
 **file_name** | **string**|  | [optional]

### Return type

[**\MarketPay\Model\KycFileUploadResponse**](../Model/KycFileUploadResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **kycPostDocumentShareholder**
> \MarketPay\Model\KycFileUploadResponse kycPostDocumentShareholder($user_id, $shareholder_id, $document_type, $file_content_type, $content_type, $content_disposition, $headers, $length, $name, $file_name)



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
$shareholder_id = 789; // int | 
$document_type = "document_type_example"; // string | 
$file_content_type = "file_content_type_example"; // string | 
$content_type = "content_type_example"; // string | 
$content_disposition = "content_disposition_example"; // string | 
$headers = "headers_example"; // string | 
$length = 789; // int | 
$name = "name_example"; // string | 
$file_name = "file_name_example"; // string | 

try {
    $result = $apiInstance->kycPostDocumentShareholder($user_id, $shareholder_id, $document_type, $file_content_type, $content_type, $content_disposition, $headers, $length, $name, $file_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KycApi->kycPostDocumentShareholder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**|  |
 **shareholder_id** | **int**|  |
 **document_type** | **string**|  |
 **file_content_type** | **string**|  | [optional]
 **content_type** | **string**|  | [optional]
 **content_disposition** | **string**|  | [optional]
 **headers** | **string**|  | [optional]
 **length** | **int**|  | [optional]
 **name** | **string**|  | [optional]
 **file_name** | **string**|  | [optional]

### Return type

[**\MarketPay\Model\KycFileUploadResponse**](../Model/KycFileUploadResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **kycPostLegal**
> \MarketPay\Model\KycUserValidationLevelLegalResponse kycPostLegal($user_id, $body)



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
$body = new \MarketPay\Model\KycUserLegalPut(); // \MarketPay\Model\KycUserLegalPut | 

try {
    $result = $apiInstance->kycPostLegal($user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KycApi->kycPostLegal: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**|  |
 **body** | [**\MarketPay\Model\KycUserLegalPut**](../Model/KycUserLegalPut.md)|  | [optional]

### Return type

[**\MarketPay\Model\KycUserValidationLevelLegalResponse**](../Model/KycUserValidationLevelLegalResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **kycPostLegalBoardMember**
> \MarketPay\Model\KycBoardMemberResponse kycPostLegalBoardMember($user_id, $body)



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
$body = new \MarketPay\Model\KycUserValidationBoardMemberPost(); // \MarketPay\Model\KycUserValidationBoardMemberPost | 

try {
    $result = $apiInstance->kycPostLegalBoardMember($user_id, $body);
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
 **body** | [**\MarketPay\Model\KycUserValidationBoardMemberPost**](../Model/KycUserValidationBoardMemberPost.md)|  | [optional]

### Return type

[**\MarketPay\Model\KycBoardMemberResponse**](../Model/KycBoardMemberResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **kycPostLegalShareHolder**
> \MarketPay\Model\KycShareHolderResponse kycPostLegalShareHolder($user_id, $body)



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
$body = new \MarketPay\Model\KycUserValidationShareHolderNaturalPost(); // \MarketPay\Model\KycUserValidationShareHolderNaturalPost | 

try {
    $result = $apiInstance->kycPostLegalShareHolder($user_id, $body);
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
 **body** | [**\MarketPay\Model\KycUserValidationShareHolderNaturalPost**](../Model/KycUserValidationShareHolderNaturalPost.md)|  | [optional]

### Return type

[**\MarketPay\Model\KycShareHolderResponse**](../Model/KycShareHolderResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **kycPostNatural**
> \MarketPay\Model\KycUserValidationLevelNaturalResponse kycPostNatural($user_id, $body)



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
$body = new \MarketPay\Model\KycUserNaturalPut(); // \MarketPay\Model\KycUserNaturalPut | 

try {
    $result = $apiInstance->kycPostNatural($user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KycApi->kycPostNatural: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**|  |
 **body** | [**\MarketPay\Model\KycUserNaturalPut**](../Model/KycUserNaturalPut.md)|  | [optional]

### Return type

[**\MarketPay\Model\KycUserValidationLevelNaturalResponse**](../Model/KycUserValidationLevelNaturalResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **kycPutDocument**
> \MarketPay\Model\KycFileUploadResponse kycPutDocument($user_id, $document_type, $file_content_type, $content_type, $content_disposition, $headers, $length, $name, $file_name)



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
$document_type = "document_type_example"; // string | 
$file_content_type = "file_content_type_example"; // string | 
$content_type = "content_type_example"; // string | 
$content_disposition = "content_disposition_example"; // string | 
$headers = "headers_example"; // string | 
$length = 789; // int | 
$name = "name_example"; // string | 
$file_name = "file_name_example"; // string | 

try {
    $result = $apiInstance->kycPutDocument($user_id, $document_type, $file_content_type, $content_type, $content_disposition, $headers, $length, $name, $file_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KycApi->kycPutDocument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**|  |
 **document_type** | **string**|  |
 **file_content_type** | **string**|  | [optional]
 **content_type** | **string**|  | [optional]
 **content_disposition** | **string**|  | [optional]
 **headers** | **string**|  | [optional]
 **length** | **int**|  | [optional]
 **name** | **string**|  | [optional]
 **file_name** | **string**|  | [optional]

### Return type

[**\MarketPay\Model\KycFileUploadResponse**](../Model/KycFileUploadResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **kycPutDocumentBoardMember**
> \MarketPay\Model\KycFileUploadResponse kycPutDocumentBoardMember($user_id, $board_member_id, $document_type, $file_content_type, $content_type, $content_disposition, $headers, $length, $name, $file_name)



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
$board_member_id = 789; // int | 
$document_type = "document_type_example"; // string | 
$file_content_type = "file_content_type_example"; // string | 
$content_type = "content_type_example"; // string | 
$content_disposition = "content_disposition_example"; // string | 
$headers = "headers_example"; // string | 
$length = 789; // int | 
$name = "name_example"; // string | 
$file_name = "file_name_example"; // string | 

try {
    $result = $apiInstance->kycPutDocumentBoardMember($user_id, $board_member_id, $document_type, $file_content_type, $content_type, $content_disposition, $headers, $length, $name, $file_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KycApi->kycPutDocumentBoardMember: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**|  |
 **board_member_id** | **int**|  |
 **document_type** | **string**|  |
 **file_content_type** | **string**|  | [optional]
 **content_type** | **string**|  | [optional]
 **content_disposition** | **string**|  | [optional]
 **headers** | **string**|  | [optional]
 **length** | **int**|  | [optional]
 **name** | **string**|  | [optional]
 **file_name** | **string**|  | [optional]

### Return type

[**\MarketPay\Model\KycFileUploadResponse**](../Model/KycFileUploadResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **kycPutDocumentShareholder**
> \MarketPay\Model\KycFileUploadResponse kycPutDocumentShareholder($user_id, $share_holder_id, $document_type, $file_content_type, $content_type, $content_disposition, $headers, $length, $name, $file_name)



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
$document_type = "document_type_example"; // string | 
$file_content_type = "file_content_type_example"; // string | 
$content_type = "content_type_example"; // string | 
$content_disposition = "content_disposition_example"; // string | 
$headers = "headers_example"; // string | 
$length = 789; // int | 
$name = "name_example"; // string | 
$file_name = "file_name_example"; // string | 

try {
    $result = $apiInstance->kycPutDocumentShareholder($user_id, $share_holder_id, $document_type, $file_content_type, $content_type, $content_disposition, $headers, $length, $name, $file_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KycApi->kycPutDocumentShareholder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**|  |
 **share_holder_id** | **int**|  |
 **document_type** | **string**|  |
 **file_content_type** | **string**|  | [optional]
 **content_type** | **string**|  | [optional]
 **content_disposition** | **string**|  | [optional]
 **headers** | **string**|  | [optional]
 **length** | **int**|  | [optional]
 **name** | **string**|  | [optional]
 **file_name** | **string**|  | [optional]

### Return type

[**\MarketPay\Model\KycFileUploadResponse**](../Model/KycFileUploadResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **kycPutLegal**
> \MarketPay\Model\KycUserValidationLevelLegalResponse kycPutLegal($user_id, $body)



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
$body = new \MarketPay\Model\KycUserLegalPut(); // \MarketPay\Model\KycUserLegalPut | 

try {
    $result = $apiInstance->kycPutLegal($user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KycApi->kycPutLegal: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**|  |
 **body** | [**\MarketPay\Model\KycUserLegalPut**](../Model/KycUserLegalPut.md)|  | [optional]

### Return type

[**\MarketPay\Model\KycUserValidationLevelLegalResponse**](../Model/KycUserValidationLevelLegalResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **kycPutLegalBoardMember**
> \MarketPay\Model\KycBoardMemberResponse kycPutLegalBoardMember($board_member_id, $user_id, $body)



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
$body = new \MarketPay\Model\KycUserValidationBoardMemberPut(); // \MarketPay\Model\KycUserValidationBoardMemberPut | 

try {
    $result = $apiInstance->kycPutLegalBoardMember($board_member_id, $user_id, $body);
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
 **body** | [**\MarketPay\Model\KycUserValidationBoardMemberPut**](../Model/KycUserValidationBoardMemberPut.md)|  | [optional]

### Return type

[**\MarketPay\Model\KycBoardMemberResponse**](../Model/KycBoardMemberResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **kycPutLegalShareHolder**
> \MarketPay\Model\KycUserValidationShareHolderListItemResponseNatural kycPutLegalShareHolder($user_id, $share_holder_id, $body)



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
$body = new \MarketPay\Model\KycUserValidationShareHolderNaturalPut(); // \MarketPay\Model\KycUserValidationShareHolderNaturalPut | 

try {
    $result = $apiInstance->kycPutLegalShareHolder($user_id, $share_holder_id, $body);
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
 **body** | [**\MarketPay\Model\KycUserValidationShareHolderNaturalPut**](../Model/KycUserValidationShareHolderNaturalPut.md)|  | [optional]

### Return type

[**\MarketPay\Model\KycUserValidationShareHolderListItemResponseNatural**](../Model/KycUserValidationShareHolderListItemResponseNatural.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **kycPutRequest**
> \MarketPay\Model\KycValidationRequestResponse kycPutRequest($user_id, $body)



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
$body = new \MarketPay\Model\KycIdentificationRequest(); // \MarketPay\Model\KycIdentificationRequest | 

try {
    $result = $apiInstance->kycPutRequest($user_id, $body);
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
 **body** | [**\MarketPay\Model\KycIdentificationRequest**](../Model/KycIdentificationRequest.md)|  | [optional]

### Return type

[**\MarketPay\Model\KycValidationRequestResponse**](../Model/KycValidationRequestResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **kycPutRequestLegal**
> \MarketPay\Model\KycValidationRequestResponse kycPutRequestLegal($user_id, $body)



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
$body = new \MarketPay\Model\KycIdentificationRequest(); // \MarketPay\Model\KycIdentificationRequest | 

try {
    $result = $apiInstance->kycPutRequestLegal($user_id, $body);
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
 **body** | [**\MarketPay\Model\KycIdentificationRequest**](../Model/KycIdentificationRequest.md)|  | [optional]

### Return type

[**\MarketPay\Model\KycValidationRequestResponse**](../Model/KycValidationRequestResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

