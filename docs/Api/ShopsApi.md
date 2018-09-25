# Swagger\Client\ShopsApi

All URIs are relative to *https://api.storecove.com/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**shopsIndex**](ShopsApi.md#shopsIndex) | **GET** /shops | Get Shops


# **shopsIndex**
> \Swagger\Client\Model\Shop[] shopsIndex($cc)

Get Shops

Get all available shops. include::examples/shops/shops_index/tabs.adoc[]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ShopsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cc = "cc_example"; // string | Include creditcards in list. Add ?cc=true to URL to use.

try {
    $result = $apiInstance->shopsIndex($cc);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShopsApi->shopsIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cc** | **string**| Include creditcards in list. Add ?cc&#x3D;true to URL to use. | [optional]

### Return type

[**\Swagger\Client\Model\Shop[]**](../Model/Shop.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

