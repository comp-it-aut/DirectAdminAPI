# # WebSessionInfo

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**allowedCommands** | **string[]** |  |
**configFeatures** | [**\COMPITAUT\DirectAdminAPI\Model\WebSessionConfigFeatures**](WebSessionConfigFeatures.md) |  |
**customDomainItems** | [**\COMPITAUT\DirectAdminAPI\Model\WebSessionCustomDomainItem[]**](WebSessionCustomDomainItem.md) | List of extra HTML form elements to be associated with domain config (when creating or updating). |
**custombuildOptions** | [**\COMPITAUT\DirectAdminAPI\Model\WebSessionCBOptions**](WebSessionCBOptions.md) |  |
**demo** | **bool** |  |
**directadminConfig** | [**\COMPITAUT\DirectAdminAPI\Model\WebSessionDAConf**](WebSessionDAConf.md) |  |
**effectiveRole** | **string** | Minimum role required to access the command |
**effectiveUsername** | **string** |  |
**havePluginHooksAdmin** | **bool** |  |
**havePluginHooksReseller** | **bool** |  |
**havePluginHooksUser** | **bool** |  |
**homeDir** | **string** |  |
**loginAsDNSControl** | **bool** |  |
**phpmyadminPublic** | **bool** |  |
**realUsername** | **string** | Differs from effective username if an user with higher privileges (aka real user) is logged in as effective user, otherwise is equal to effective user. |
**selectedDomain** | **string** | Can be empty, e. g., user has no domains. |
**sessionID** | **string** | Empty for Basic auth requests |
**ticketsEnabled** | **bool** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
