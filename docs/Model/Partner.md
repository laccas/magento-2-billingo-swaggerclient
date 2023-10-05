# Partner

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional] 
**name** | **string** |  | [optional] 
**address** | [**\Swagger\Client\Model\Address**](Address.md) |  | [optional] 
**emails** | **string[]** |  | [optional] 
**taxcode** | **string** |  | [optional] 
**iban** | **string** |  | [optional] 
**swift** | **string** |  | [optional] 
**account_number** | **string** |  | [optional] 
**phone** | **string** |  | [optional] 
**general_ledger_number** | **string** |  | [optional] 
**tax_type** | [**\Swagger\Client\Model\PartnerTaxType**](PartnerTaxType.md) |  | [optional] 
**custom_billing_settings** | [**\Swagger\Client\Model\PartnerCustomBillingSettings**](PartnerCustomBillingSettings.md) |  | [optional] 
**group_member_tax_number** | **string** | The tax number of group member. Send tax number for update. Send empty string for delete. Ignored if omitted. | [optional] 
**giro_settings** | [**OneOfPartnerGiroSettings**](OneOfPartnerGiroSettings.md) |  | [optional] 
**partner_shipping** | [**OneOfPartnerPartnerShipping**](OneOfPartnerPartnerShipping.md) |  | [optional] 
**internal_comment** | **string** |  | [optional] 
**partner_show_type** | [**OneOfPartnerPartnerShowType**](OneOfPartnerPartnerShowType.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

