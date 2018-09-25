# InvoiceLine

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**description** | **string** | The description for this invoice line. | [optional] 
**name** | **string** | A short name for this invoice line. If not provided, it will be taken from description and description will be set to an emtpy string. | [optional] 
**invoice_period** | **string** | The period (or specific date) to which the invoice line applies. Format: yyyy-mm-dd - yyyy-mm-dd. | [optional] 
**item_price** | **float** | The price per item (may be fractional) | [optional] 
**quantity** | **float** | The number of items (may be fractional). | [optional] 
**quantity_unit_code** | **string** | A unit code from UNECE Rec20. The complete list can be found at http://www.datypic.com/sc/ubl20/a-unitCode-4.html | [optional] [default to 'C62']
**allowance_charge** | **float** | The discount or surcharge on this item. Should be negative for discounts | [optional] 
**amount_excluding_vat** | **float** | The amount excluding VAT. Should equal quantity x itemPrice + allowanceCharge. A difference of 5 cents or 1% between the calculated value and the provided value is allowed. | 
**tax** | [**\Swagger\Client\Model\Tax**](Tax.md) |  | [optional] 
**accounting_cost** | **string** | The buyer&#39;s accounting cost centre for this invoice line, expressed as text. | [optional] 
**accounting_cost_code** | [**\Swagger\Client\Model\AccountingCostCode**](AccountingCostCode.md) |  | [optional] 
**delivery** | [**\Swagger\Client\Model\Delivery**](Delivery.md) | The delivery of the invoice line. | [optional] 
**sellers_item_identification** | **string** | The ID the seller assigned to this item. | [optional] 
**standard_item_identification** | **string** | Standardized ID for the item. | [optional] 
**standard_item_identification_scheme_id** | **string** | The scheme for the standardized ID for the item. | [optional] [default to 'GTIN']
**standard_item_identification_scheme_agency_id** | **string** | The scheme agency for the standardized ID for the item. | [optional] [default to '9']

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


