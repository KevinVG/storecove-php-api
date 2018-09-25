# Swagger\Client\LegalEntitiesApi

All URIs are relative to *https://api.storecove.com/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createLegalEntity**](LegalEntitiesApi.md#createLegalEntity) | **POST** /legal_entities | Create a new LegalEntity
[**deleteLegalEntity**](LegalEntitiesApi.md#deleteLegalEntity) | **DELETE** /legal_entities/{id} | Delete LegalEntity
[**getLegalEntity**](LegalEntitiesApi.md#getLegalEntity) | **GET** /legal_entities/{id} | Get LegalEntity
[**updateLegalEntity**](LegalEntitiesApi.md#updateLegalEntity) | **PATCH** /legal_entities/{id} | Update LegalEntity


# **createLegalEntity**
> \Swagger\Client\Model\LegalEntity createLegalEntity($legal_entity)

Create a new LegalEntity

Create a new LegalEntity.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\LegalEntitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$legal_entity = new \Swagger\Client\Model\LegalEntityCreate(); // \Swagger\Client\Model\LegalEntityCreate | LegalEntity to create

try {
    $result = $apiInstance->createLegalEntity($legal_entity);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LegalEntitiesApi->createLegalEntity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **legal_entity** | [**\Swagger\Client\Model\LegalEntityCreate**](../Model/LegalEntityCreate.md)| LegalEntity to create |

### Return type

[**\Swagger\Client\Model\LegalEntity**](../Model/LegalEntity.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteLegalEntity**
> deleteLegalEntity($id)

Delete LegalEntity

Delete a specific LegalEntity.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\LegalEntitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 789; // int | legal_entity id

try {
    $apiInstance->deleteLegalEntity($id);
} catch (Exception $e) {
    echo 'Exception when calling LegalEntitiesApi->deleteLegalEntity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| legal_entity id |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLegalEntity**
> \Swagger\Client\Model\LegalEntity getLegalEntity($id)

Get LegalEntity

Get a specific LegalEntity.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\LegalEntitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 789; // int | legal_entity id

try {
    $result = $apiInstance->getLegalEntity($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LegalEntitiesApi->getLegalEntity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| legal_entity id |

### Return type

[**\Swagger\Client\Model\LegalEntity**](../Model/LegalEntity.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateLegalEntity**
> \Swagger\Client\Model\LegalEntity updateLegalEntity($id, $legal_entity)

Update LegalEntity

Update a specific LegalEntity.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\LegalEntitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 789; // int | legal_entity id
$legal_entity = new \Swagger\Client\Model\LegalEntityUpdate(); // \Swagger\Client\Model\LegalEntityUpdate | LegalEntity updates

try {
    $result = $apiInstance->updateLegalEntity($id, $legal_entity);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LegalEntitiesApi->updateLegalEntity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| legal_entity id |
 **legal_entity** | [**\Swagger\Client\Model\LegalEntityUpdate**](../Model/LegalEntityUpdate.md)| LegalEntity updates |

### Return type

[**\Swagger\Client\Model\LegalEntity**](../Model/LegalEntity.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

