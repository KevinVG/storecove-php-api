# Swagger\Client\PeppolIdentifiersApi

All URIs are relative to *https://api.storecove.com/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createPeppolIdentifier**](PeppolIdentifiersApi.md#createPeppolIdentifier) | **POST** /legal_entities/{legal_entity_id}/peppol_identifiers | Create a new PeppolIdentifier
[**deletePeppolIdentifier**](PeppolIdentifiersApi.md#deletePeppolIdentifier) | **DELETE** /legal_entities/{legal_entity_id}/peppol_identifiers/{superscheme}/{scheme}/{identifier} | Delete PeppolIdentifier


# **createPeppolIdentifier**
> \Swagger\Client\Model\PeppolIdentifier createPeppolIdentifier($legal_entity_id, $peppol_identifier)

Create a new PeppolIdentifier

Create a new PeppolIdentifier.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\PeppolIdentifiersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$legal_entity_id = 789; // int | The id of the LegalEntity for which to create the PeppolIdentifier
$peppol_identifier = new \Swagger\Client\Model\PeppolIdentifierCreate(); // \Swagger\Client\Model\PeppolIdentifierCreate | PeppolIdentifier to create

try {
    $result = $apiInstance->createPeppolIdentifier($legal_entity_id, $peppol_identifier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PeppolIdentifiersApi->createPeppolIdentifier: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **legal_entity_id** | **int**| The id of the LegalEntity for which to create the PeppolIdentifier |
 **peppol_identifier** | [**\Swagger\Client\Model\PeppolIdentifierCreate**](../Model/PeppolIdentifierCreate.md)| PeppolIdentifier to create |

### Return type

[**\Swagger\Client\Model\PeppolIdentifier**](../Model/PeppolIdentifier.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deletePeppolIdentifier**
> deletePeppolIdentifier($legal_entity_id, $superscheme, $scheme, $identifier)

Delete PeppolIdentifier

Delete a PeppolIdentifier.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\PeppolIdentifiersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$legal_entity_id = 789; // int | The id of the LegalEntity this PeppolIdentifier belongs to
$superscheme = "superscheme_example"; // string | The superscheme of the identifier. Should always be \"iso6523-actorid-upis\".
$scheme = "scheme_example"; // string | PEPPOL identifier scheme id, e.g. \"DE:VAT\". For a full list see <<peppol_schemes_list>>.
$identifier = "identifier_example"; // string | PEPPOL identifier

try {
    $apiInstance->deletePeppolIdentifier($legal_entity_id, $superscheme, $scheme, $identifier);
} catch (Exception $e) {
    echo 'Exception when calling PeppolIdentifiersApi->deletePeppolIdentifier: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **legal_entity_id** | **int**| The id of the LegalEntity this PeppolIdentifier belongs to |
 **superscheme** | **string**| The superscheme of the identifier. Should always be \&quot;iso6523-actorid-upis\&quot;. |
 **scheme** | **string**| PEPPOL identifier scheme id, e.g. \&quot;DE:VAT\&quot;. For a full list see &lt;&lt;peppol_schemes_list&gt;&gt;. |
 **identifier** | **string**| PEPPOL identifier |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

