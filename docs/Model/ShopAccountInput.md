# ShopAccountInput

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**username** | **string** | The username for the account. The username needs to be unique in combination with the shop_id. | 
**password** | **string** | The password for the account. | 
**external_user_id** | **string** | The _external_user_id_ is what identifies the entity for which you create this ShopAccount. This could be a user, however, if your users can manage multiple organizations/administrations, then it is a better idea to put the organization/administration identifier in this field, because the _external_user_id_ groups the ShopAccounts into a set that all deliver their invoices to the same destination (typically an email address). | 
**email** | **string** | This is email address determines where the invoices for all ShopAccounts in the same _external_user_id_ group are sent. Each time you create or update a ShopAccount for an _external_user_id_ and also provide __email__, the email destination for all the ShopAccounts in the _external_user_id_ group are updated at the same time.  We suggest you provide an immutable email address. If your user can change the email address to which the invoices are to be sent, then you will need to do an update for one of the ShopAccounts for that user in order for Storecove to start using the new email address.  Note that this field is mandatory for the first ShopAccount that you create for an entity. | [optional] 
**shop_id** | **int** | The id of the Shop the account is for. | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


