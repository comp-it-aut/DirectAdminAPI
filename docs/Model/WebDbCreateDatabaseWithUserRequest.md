# # WebDbCreateDatabaseWithUserRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**charset** | **string** | If empty, default server charset is used. | [optional]
**collation** | **string** | If empty, default server collation is used. | [optional]
**database** | **string** |  |
**dbuser** | **string** | If empty, database name is used. | [optional]
**hostPatterns** | **string[]** | If empty, access hosts from mysql config are used. | [optional]
**password** | **string** | If empty, random password is generated. | [optional]
**privileges** | [**\COMPITAUT\DirectAdminAPI\Model\WebDbPrivs**](WebDbPrivs.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
