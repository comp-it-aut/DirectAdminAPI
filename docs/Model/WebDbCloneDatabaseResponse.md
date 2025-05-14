# # WebDbCloneDatabaseResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**address** | **string** | Database address. If unixSocket is true, it&#39;s a path to the unixsocket, otherwise it&#39;s an URL. |
**database** | **string** |  |
**dbuser** | **string** | Empty if request dbuser is empty. | [optional]
**hostPatterns** | **string[]** | Empty if request dbuser is empty. | [optional]
**password** | **string** | Empty if request dbuser is empty. | [optional]
**privileges** | [**\COMPITAUT\DirectAdminAPI\Model\WebDbPrivs**](WebDbPrivs.md) |  | [optional]
**unixSocket** | **bool** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
