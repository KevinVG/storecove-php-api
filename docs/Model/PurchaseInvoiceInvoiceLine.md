# PurchaseInvoiceInvoiceLine

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**description** | **string** | The description for the invoice line. | [optional] 
**price_amount** | **float** | The price for one item, excluding VAT. | [optional] 
**quantity** | **float** | The quantity of the item. | [optional] 
**allowance_charge** | **float** | The adjustment to the price, for instance a discount. | [optional] 
**amount_excluding_vat** | **float** | The amount excluding VAT. This is equal to quantity x price_amount + allowance_charge. This property is redundant and provided only to make invoice processing more easy. You can also choose to only store this property, instead of the underlying fields. | [optional] 
**vat** | [**\Swagger\Client\Model\VATDetails**](VATDetails.md) |  | [optional] 
**accounting** | [**\Swagger\Client\Model\PurchaseInvoiceAccountingDetails**](PurchaseInvoiceAccountingDetails.md) | The accounting details for the invoice line. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


