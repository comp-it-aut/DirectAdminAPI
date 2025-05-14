# # WebCpanelImportStart

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**accounts** | **string[]** | list of accounts to restore |
**homeOverride** | **string** | when non empty a given home directory is used when restoring this users | [optional]
**ignoreConvertErrors** | **bool** | if true continue to restore account even if conversion step had some issues |
**maxWorkers** | **int** | maximum number of tasks that can be imported concurrently |
**preserveOwner** | **bool** | admin only: if true user will be restored preserving original owner (owner has to already exist or be selected for import) |
**remoteHost** | **string** | cpanel server hostname |
**remotePassword** | **string** | cpanel server SSH user password |
**remotePort** | **int** | cpanel server SSH port |
**remoteUser** | **string** | cpanel server SSH user name |
**replaceExistingUser** | **bool** | if true user will be restored even if such account already exists on DA server |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
