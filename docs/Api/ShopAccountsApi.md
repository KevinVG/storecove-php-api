# Swagger\Client\ShopAccountsApi

All URIs are relative to *https://api.storecove.com/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createShopAccount**](ShopAccountsApi.md#createShopAccount) | **POST** /shop_accounts | Create ShopAccount
[**deleteShopAccount**](ShopAccountsApi.md#deleteShopAccount) | **DELETE** /shop_accounts/{id} | Delete ShopAccount
[**getShopAccount**](ShopAccountsApi.md#getShopAccount) | **GET** /shop_accounts/{id} | Get ShopAccount
[**shopAccountsAuthFailures**](ShopAccountsApi.md#shopAccountsAuthFailures) | **GET** /shop_accounts/auth_failures | Get ShopAccounts with authorization failures
[**shopAccountsIndex**](ShopAccountsApi.md#shopAccountsIndex) | **GET** /shop_accounts | Get ShopAccounts for an entity
[**updateShopAccount**](ShopAccountsApi.md#updateShopAccount) | **PATCH** /shop_accounts/{id} | Update ShopAccount


# **createShopAccount**
> \Swagger\Client\Model\ShopAccountResult createShopAccount($shop_account)

Create ShopAccount

Create a new ShopAccount. include::examples/shop_accounts/create_shop_account/tabs.adoc[]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ShopAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shop_account = new \Swagger\Client\Model\ShopAccountInput(); // \Swagger\Client\Model\ShopAccountInput | ShopAccount to add

try {
    $result = $apiInstance->createShopAccount($shop_account);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShopAccountsApi->createShopAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shop_account** | [**\Swagger\Client\Model\ShopAccountInput**](../Model/ShopAccountInput.md)| ShopAccount to add |

### Return type

[**\Swagger\Client\Model\ShopAccountResult**](../Model/ShopAccountResult.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteShopAccount**
> deleteShopAccount($id)

Delete ShopAccount

Delete a specific ShopAccount. include::examples/shop_accounts/delete_shop_account/tabs.adoc[]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ShopAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 789; // int | shop_account id

try {
    $apiInstance->deleteShopAccount($id);
} catch (Exception $e) {
    echo 'Exception when calling ShopAccountsApi->deleteShopAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| shop_account id |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getShopAccount**
> \Swagger\Client\Model\ShopAccountResult getShopAccount($id)

Get ShopAccount

Get a specific ShopAccount. include::examples/shop_accounts/get_shop_account/tabs.adoc[]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ShopAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 789; // int | shop_account id

try {
    $result = $apiInstance->getShopAccount($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShopAccountsApi->getShopAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| shop_account id |

### Return type

[**\Swagger\Client\Model\ShopAccountResult**](../Model/ShopAccountResult.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **shopAccountsAuthFailures**
> \Swagger\Client\Model\ShopAccountResult[] shopAccountsAuthFailures()

Get ShopAccounts with authorization failures

Get ShopAccounts with authorization failures. include::examples/shop_accounts/shop_accounts_auth_failures/tabs.adoc[]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ShopAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->shopAccountsAuthFailures();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShopAccountsApi->shopAccountsAuthFailures: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\ShopAccountResult[]**](../Model/ShopAccountResult.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **shopAccountsIndex**
> \Swagger\Client\Model\ShopAccountResult[] shopAccountsIndex($external_user_id)

Get ShopAccounts for an entity

Retrieve all active ShopAccounts for one of your entities. include::examples/shop_accounts/shop_accounts_index/tabs.adoc[]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ShopAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$external_user_id = "external_user_id_example"; // string | Filter by the external_user_id

try {
    $result = $apiInstance->shopAccountsIndex($external_user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShopAccountsApi->shopAccountsIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **external_user_id** | **string**| Filter by the external_user_id |

### Return type

[**\Swagger\Client\Model\ShopAccountResult[]**](../Model/ShopAccountResult.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateShopAccount**
> \Swagger\Client\Model\ShopAccountResult updateShopAccount($id, $shop_account)

Update ShopAccount

Update a specific ShopAccount. include::examples/shop_accounts/update_shop_account/tabs.adoc[]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ShopAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 789; // int | shop_account id
$shop_account = new \Swagger\Client\Model\ShopAccountUpdate(); // \Swagger\Client\Model\ShopAccountUpdate | ShopAccount updates

try {
    $result = $apiInstance->updateShopAccount($id, $shop_account);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShopAccountsApi->updateShopAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| shop_account id |
 **shop_account** | [**\Swagger\Client\Model\ShopAccountUpdate**](../Model/ShopAccountUpdate.md)| ShopAccount updates |

### Return type

[**\Swagger\Client\Model\ShopAccountResult**](../Model/ShopAccountResult.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

