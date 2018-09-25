# Swagger\Client\ShopAccountRequestsApi

All URIs are relative to *https://api.storecove.com/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createShopAccountRequest**](ShopAccountRequestsApi.md#createShopAccountRequest) | **POST** /shop_account_requests | Create ShopAccountRequest
[**deleteShopAccountRequest**](ShopAccountRequestsApi.md#deleteShopAccountRequest) | **DELETE** /shop_account_requests/{id} | Delete ShopAccountRequest
[**getShopAccountRequest**](ShopAccountRequestsApi.md#getShopAccountRequest) | **GET** /shop_account_requests/{id} | Get ShopAccountRequest
[**shopAccountRequestsIndex**](ShopAccountRequestsApi.md#shopAccountRequestsIndex) | **GET** /shop_account_requests | Get ShopAccountRequests
[**updateShopAccountRequest**](ShopAccountRequestsApi.md#updateShopAccountRequest) | **PATCH** /shop_account_requests/{id} | Update ShopAccountRequest


# **createShopAccountRequest**
> \Swagger\Client\Model\ShopAccountRequestResult createShopAccountRequest($shop_account_request)

Create ShopAccountRequest

Create a new ShopAccountRequest include::examples/shop_account_requests/create_shop_account_request/tabs.adoc[]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ShopAccountRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shop_account_request = new \Swagger\Client\Model\ShopAccountRequestInput(); // \Swagger\Client\Model\ShopAccountRequestInput | ShopAccountRequest to add

try {
    $result = $apiInstance->createShopAccountRequest($shop_account_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShopAccountRequestsApi->createShopAccountRequest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shop_account_request** | [**\Swagger\Client\Model\ShopAccountRequestInput**](../Model/ShopAccountRequestInput.md)| ShopAccountRequest to add |

### Return type

[**\Swagger\Client\Model\ShopAccountRequestResult**](../Model/ShopAccountRequestResult.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteShopAccountRequest**
> deleteShopAccountRequest($id)

Delete ShopAccountRequest

Delete a specific ShopAccountRequest include::examples/shop_account_requests/delete_shop_account_request/tabs.adoc[]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ShopAccountRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 789; // int | shop_account_request id

try {
    $apiInstance->deleteShopAccountRequest($id);
} catch (Exception $e) {
    echo 'Exception when calling ShopAccountRequestsApi->deleteShopAccountRequest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| shop_account_request id |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getShopAccountRequest**
> \Swagger\Client\Model\ShopAccountRequestResult getShopAccountRequest($id)

Get ShopAccountRequest

Show a specific ShopAccountRequest include::examples/shop_account_requests/get_shop_account_request/tabs.adoc[]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ShopAccountRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 789; // int | shop_account_request id

try {
    $result = $apiInstance->getShopAccountRequest($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShopAccountRequestsApi->getShopAccountRequest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| shop_account_request id |

### Return type

[**\Swagger\Client\Model\ShopAccountRequestResult**](../Model/ShopAccountRequestResult.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **shopAccountRequestsIndex**
> \Swagger\Client\Model\ShopAccountRequestResult[] shopAccountRequestsIndex($external_user_id)

Get ShopAccountRequests

Retrieve all active ShopAccountRequests for one of your entities. include::examples/shop_account_requests/shop_account_requests_index/tabs.adoc[]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ShopAccountRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$external_user_id = "external_user_id_example"; // string | Filter by the external_user_id

try {
    $result = $apiInstance->shopAccountRequestsIndex($external_user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShopAccountRequestsApi->shopAccountRequestsIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **external_user_id** | **string**| Filter by the external_user_id |

### Return type

[**\Swagger\Client\Model\ShopAccountRequestResult[]**](../Model/ShopAccountRequestResult.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateShopAccountRequest**
> \Swagger\Client\Model\ShopAccountRequestResult updateShopAccountRequest($id, $shop_account_request)

Update ShopAccountRequest

Update a specific ShopAccountRequest include::examples/shop_account_requests/update_shop_account_request/tabs.adoc[]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ShopAccountRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 789; // int | shop_account_request id
$shop_account_request = new \Swagger\Client\Model\ShopAccountRequestUpdate(); // \Swagger\Client\Model\ShopAccountRequestUpdate | ShopAccountRequest updates

try {
    $result = $apiInstance->updateShopAccountRequest($id, $shop_account_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShopAccountRequestsApi->updateShopAccountRequest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| shop_account_request id |
 **shop_account_request** | [**\Swagger\Client\Model\ShopAccountRequestUpdate**](../Model/ShopAccountRequestUpdate.md)| ShopAccountRequest updates |

### Return type

[**\Swagger\Client\Model\ShopAccountRequestResult**](../Model/ShopAccountRequestResult.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

