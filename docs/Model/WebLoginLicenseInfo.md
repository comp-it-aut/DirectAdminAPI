# # WebLoginLicenseInfo

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**active** | **bool** | true if there are not licensing issues, false if server is non functional due to licensing failure |
**legacy** | **bool** | true if server has legacy license and runs in legacy code-base | [optional]
**missing** | **bool** | true if server does not have a license-key | [optional]
**reason** | **string** | mark-down formatted human readable licensing failure description, always present if active field is false | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
