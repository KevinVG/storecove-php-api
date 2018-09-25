# Swagger\Client\InvoiceSubmissionsApi

All URIs are relative to *https://api.storecove.com/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createInvoiceSubmission**](InvoiceSubmissionsApi.md#createInvoiceSubmission) | **POST** /invoice_submissions | Submit a new invoice
[**preflightInvoiceRecipient**](InvoiceSubmissionsApi.md#preflightInvoiceRecipient) | **POST** /invoice_submissions/preflight | Preflight an invoice recipient


# **createInvoiceSubmission**
> \Swagger\Client\Model\InvoiceSubmissionResult createInvoiceSubmission($invoice_submission)

Submit a new invoice

Submit an invoice for delivery. include::examples/invoice_submissions/create_invoice_submission/tabs.adoc[]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\InvoiceSubmissionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoice_submission = new \Swagger\Client\Model\InvoiceSubmission(); // \Swagger\Client\Model\InvoiceSubmission | Invoice to submit

try {
    $result = $apiInstance->createInvoiceSubmission($invoice_submission);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceSubmissionsApi->createInvoiceSubmission: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoice_submission** | [**\Swagger\Client\Model\InvoiceSubmission**](../Model/InvoiceSubmission.md)| Invoice to submit |

### Return type

[**\Swagger\Client\Model\InvoiceSubmissionResult**](../Model/InvoiceSubmissionResult.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **preflightInvoiceRecipient**
> \Swagger\Client\Model\PreflightInvoiceRecipientResult preflightInvoiceRecipient($invoice_recipient_preflight)

Preflight an invoice recipient

Check whether Storecove can deliver an invoice for a list of ids. include::examples/invoice_submissions/preflight_invoice_recipient/tabs.adoc[]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\InvoiceSubmissionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoice_recipient_preflight = new \Swagger\Client\Model\InvoiceRecipientPreflight(); // \Swagger\Client\Model\InvoiceRecipientPreflight | The invoice recipient to preflight

try {
    $result = $apiInstance->preflightInvoiceRecipient($invoice_recipient_preflight);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceSubmissionsApi->preflightInvoiceRecipient: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoice_recipient_preflight** | [**\Swagger\Client\Model\InvoiceRecipientPreflight**](../Model/InvoiceRecipientPreflight.md)| The invoice recipient to preflight |

### Return type

[**\Swagger\Client\Model\PreflightInvoiceRecipientResult**](../Model/PreflightInvoiceRecipientResult.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

