# # WebCpanelImportTask

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account** | **string** | cpanel user account to import |
**dependsOn** | **int** |  | [optional]
**error** | **string** | error which caused import to terminate |
**homeOverride** | **string** |  | [optional]
**id** | **int** | unique import task ID |
**ignoreConvertErrors** | **bool** | if true continue to restore account even if conversion step had some issues |
**pid** | **int** | process ID of import task executor |
**preserveOwner** | **bool** | admin only: if true user will be restored preserving original owner (owner has to already exist or be selected for import) |
**remoteHost** | **string** | cpanel server hostname |
**remotePort** | **int** | cpanel server SSH port |
**remoteUser** | **string** | cpanel server SSH user name |
**replaceExistingUser** | **bool** | if true user will be restored even if such account already exists on DA server |
**stage** | **string** | current import task stage |
**startTime** | **\DateTime** | time when import task started |
**stopTime** | **\DateTime** | time when import task ended |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
