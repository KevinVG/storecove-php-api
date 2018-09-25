# Swagger\Client\PurchaseInvoicesApi

All URIs are relative to *https://api.storecove.com/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getInvoice**](PurchaseInvoicesApi.md#getInvoice) | **GET** /purchase_invoices/{guid} | Get Invoice
[**getInvoiceUbl**](PurchaseInvoicesApi.md#getInvoiceUbl) | **GET** /purchase_invoices/{guid}/ubl | Get Invoice as UBL


# **getInvoice**
> \Swagger\Client\Model\PurchaseInvoice getInvoice($guid)

Get Invoice

Get a specific Invoice.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\PurchaseInvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$guid = "guid_example"; // string | purchase invoice guid

try {
    $result = $apiInstance->getInvoice($guid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseInvoicesApi->getInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **guid** | [**string**](../Model/.md)| purchase invoice guid |

### Return type

[**\Swagger\Client\Model\PurchaseInvoice**](../Model/PurchaseInvoice.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getInvoiceUbl**
> \Swagger\Client\Model\PurchaseInvoiceUbl getInvoiceUbl($guid)

Get Invoice as UBL

Get a specific Invoice in UBL form.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\PurchaseInvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$guid = "guid_example"; // string | purchase invoice guid

try {
    $result = $apiInstance->getInvoiceUbl($guid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseInvoicesApi->getInvoiceUbl: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **guid** | [**string**](../Model/.md)| purchase invoice guid |

### Return type

[**\Swagger\Client\Model\PurchaseInvoiceUbl**](../Model/PurchaseInvoiceUbl.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

