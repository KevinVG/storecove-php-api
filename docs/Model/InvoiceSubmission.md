# InvoiceSubmission

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**mode** | **string** | DEPRECATED. The mode in which to run this invoice submission. | [optional] 
**supplier_id** | **int** | DEPRECATED. | [optional] 
**legal_supplier_id** | **int** | DEPRECATED. Use legalEntityId | [optional] 
**legal_entity_id** | **int** | The id of the LegalEntity this invoice should be sent for. | [optional] 
**invoice_recipient** | [**\Swagger\Client\Model\InvoiceRecipient**](InvoiceRecipient.md) |  | 
**document** | **string** | The invoice in PDF form. The document should be base64 encoded and the enocded string length should not exceed 2MB (2097152 bytes). | [optional] 
**document_url** | **string** | A URL to retrieve the PDF document via HTTP GET. If the link expires, please allow at least 7 days of validity. | [optional] 
**invoice** | [**\Swagger\Client\Model\Invoice**](Invoice.md) |  | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


