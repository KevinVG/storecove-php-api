# ShopAccountResult

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The Storecove id for the ShopAccount | [optional] 
**username** | **string** | See &lt;&lt;_openapi_shopaccountinput&gt;&gt;. | [optional] 
**external_user_id** | **string** | See &lt;&lt;_openapi_shopaccountinput&gt;&gt;. | [optional] 
**email** | **string** | See &lt;&lt;_openapi_shopaccountinput&gt;&gt;. | [optional] 
**from_date** | [**\DateTime**](\DateTime.md) | The date from invoices will be collected. This field defaults to the first day of the month                          the ShopAccount was created in. | [optional] 
**sign_in_error_confirmed** | **bool** | Whether or not Storecove has detected and confirmed a sign-in failure. This field is reset                          to false each time a ShopAccount is updated and the username or password has changed. | [optional] 
**sign_in_error_confirmed_at** | [**\DateTime**](\DateTime.md) | The date on which the sign-in error was confirmed. | [optional] 
**shop** | [**\Swagger\Client\Model\Shop**](Shop.md) | See &lt;&lt;_openapi_shopaccountinput&gt;&gt;. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


