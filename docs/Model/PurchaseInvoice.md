# PurchaseInvoice

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**guid** | **string** | The GUID of the invoice | [optional] 
**legal_entity_id** | **int** | The id of the LegalEntity the invoice was received for. | [optional] 
**external_user_id** | **string** | Used for the embedded portal retrieval service. The external_user_id you provided when the ShopAccount was created. | [optional] 
**external_key** | **string** | Used for accountants. The id you specified for the organization. | [optional] 
**document** | **string** | The Base64 encoded PDF document associated with the invoice. | [optional] 
**invoice_number** | **string** | The invoicenumber. | [optional] 
**issue_date** | **string** | The date the invoice was issued. Format \&quot;YYYY-MM-DD\&quot;. | [optional] 
**tax_point_date** | **string** | The date the invoice was issued for tax purposes. In most countries MUST match the issue_date. Format \&quot;YYYY-MM-DD\&quot;. | [optional] 
**due_date** | **string** | The date the invoice must be payed by. Format \&quot;YYYY-MM-DD\&quot;. | [optional] 
**document_currency_code** | **string** | The ISO 4217 currency for the invoice. | [optional] 
**vat_reverse_charge** | **bool** | Whether or not the invoice is reverse charged. | [optional] 
**amount_including_vat** | **float** | The total invoice amount payable, including VAT. This is equal to the sum of the invoice_lines (amount_excluding_vat + vat.amount) | [optional] 
**allowance_charge** | **float** | A correction on the amount to pay, for instance if the invoice has been prepaid, in which case it will be negative. | [optional] 
**payable_rounding_amount** | **float** | The difference between the invoice total and the sum of the invoice lines. | [optional] 
**payable_amount** | **float** | The total invoice amount payable including VAT. This is equal to amount_including_vat + allowance_charge + payable_rounding_amount. This property is redundant and provided only to make invoice processing more easy. You can also choose to only store this property, instead of the underlying fields. | [optional] 
**source** | **string** | The source the invoice was received from. | [optional] 
**sender** | [**\Swagger\Client\Model\PurchaseInvoiceSender**](PurchaseInvoiceSender.md) | The organzation that sent the invoice. | [optional] 
**invoice_type** | **string** | The type of invoice. | [optional] 
**period_start** | **string** | The start date of the period this invoice relates to. Format \&quot;YYYY-MM-DD\&quot;. | [optional] 
**period_end** | **string** | The end date of the period this invoice relates to. Format \&quot;YYYY-MM-DD\&quot;. | [optional] 
**buyer_reference** | **string** | The end date of the period this invoice relates to. Format \&quot;YYYY-MM-DD\&quot;. | [optional] 
**billing_reference** | **string** | The end date of the period this invoice relates to. Format \&quot;YYYY-MM-DD\&quot;. | [optional] 
**contract_document_reference** | **string** | The end date of the period this invoice relates to. Format \&quot;YYYY-MM-DD\&quot;. | [optional] 
**invoice_lines** | [**\Swagger\Client\Model\PurchaseInvoiceInvoiceLine[]**](PurchaseInvoiceInvoiceLine.md) |  | [optional] 
**accounting** | [**\Swagger\Client\Model\PurchaseInvoiceAccountingDetails**](PurchaseInvoiceAccountingDetails.md) | The accounting details for the invoice. | [optional] 
**payment_means** | [**\Swagger\Client\Model\PaymentMeans**](PaymentMeans.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


