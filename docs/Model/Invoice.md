# Invoice

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**document_currency_code** | [**\Swagger\Client\Model\CurrencyCode**](CurrencyCode.md) | The documentCurrencyCode is the currency for the entire invoice. We currently do not support invoices in multiple currencies. If left out, will default to EUR | [optional] 
**invoice_number** | **string** | The invoice number you assigned to the invoice. The invoiceNumber should be unique for the legalEntityId and year of the issueDate. This means invoice numbers can be reused in different years, as is customary in some countries. | 
**issue_date** | **string** | Format: yyyy-mm-dd. | 
**vat_reverse_charge** | **bool** | Whether or not the invoice is reverse charged | [optional] [default to false]
**accounting_customer_party** | [**\Swagger\Client\Model\AccountingCustomerParty**](AccountingCustomerParty.md) | The party the invoice is sent to. | 
**buyer_customer_party** | [**\Swagger\Client\Model\BuyerCustomerParty**](BuyerCustomerParty.md) | The buyer party. | [optional] 
**note** | **string** | A note to add to the invoice | [optional] 
**delivery** | [**\Swagger\Client\Model\Delivery**](Delivery.md) | The delivery of the invoice. | [optional] 
**allowance_charges** | [**\Swagger\Client\Model\AllowanceCharge[]**](AllowanceCharge.md) | An array of allowance charges. | [optional] 
**invoice_lines** | [**\Swagger\Client\Model\InvoiceLine[]**](InvoiceLine.md) | An array of invoice lines. | 
**accounting_cost** | **string** | The buyer&#39;s accounting cost centre for this invoice, expressed as text. | [optional] 
**accounting_cost_code** | [**\Swagger\Client\Model\AccountingCostCode**](AccountingCostCode.md) |  | [optional] 
**due_date** | **string** | Format: yyyy-mm-dd. | [optional] 
**invoice_type** | **string** | Use 380 for a regular invoice, 381 for a credit invoice, 384 for a corrective invoice. Note that invoiceType 381 must be for a positive amount! In case of invoiceType 384, the billingReference field must contain the invoiceNumber of the invoice being corrected. | [optional] [default to '380']
**tax_point_date** | **string** | The tax date is the date on which the supply of goods or of services was made or completed or the date on which the payment on account was made insofar as that date can be determined and differs from the date of the issue of the invoice. EU 2006-112 Article 226 Point 7. Note: For the Dutch TAX authorities the tac date should be the same as the issue date. | [optional] 
**buyer_reference** | **string** | A reference provided by the buyer used for internal routing of the document. | [optional] 
**invoice_period** | **string** | The period (or specific date) to which the invoice applies. Format: yyyy-mm-dd - yyyy-mm-dd. | [optional] 
**order_reference** | **string** | A reference to an order for this invoice, assigned by the buyer. | [optional] 
**sales_order_id** | **string** | A reference to an order for this invoice, assigned by the seller. | [optional] 
**billing_reference** | **string** | A reference to a commercial invoice or corrective invoice of which the current invoice is a correction. This field is mandatory when sending invoiceType 384. | [optional] 
**contract_document_reference** | **string** | A reference to a contract or framework agreement that this invoice relates to. | [optional] 
**project_reference** | **string** | Information about the project this invoice relates to. | [optional] 
**payment_means_iban** | **string** | The IBAN the amount payable should be transferred to | [optional] 
**payment_means_code** | **string** | Leave empty. Defaults to 31 if an IBAN is provided, otherwise defaults to 1. But leave empty. | [optional] 
**payment_means_payment_id** | **string** | The payment id that you will use to match the payment against the invoice. | [optional] 
**amount_including_vat** | **float** | amountIncludingVat is important because of rounding differences. In many invoices, the sum of the line item amounts excluding VAT and the VAT amounts is not equal to first summing the line items without VAT, and then applying VAT. The difference is automatically calculated and included in the electronic invoice, so the receiving accounting package can process the electronic invoice without problems. | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


