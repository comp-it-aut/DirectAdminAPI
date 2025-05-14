# # WebServerTLSStatus

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**acmeEnabled** | **bool** | true when automatic server certificate renewal is enabled |
**certFileValid** | **bool** | true if certificate file is present and contains one or more certificates |
**enabled** | **bool** | true when DirectAdmin GUI uses TLS |
**keyFileValid** | **bool** | true if private key file is present, contains a private key and private key matches the public key in the certificate |
**validationError** | **string** | empty if certificate should be trusted by clients or has a message explaining the problem |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
