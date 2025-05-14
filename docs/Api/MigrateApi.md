# COMPITAUT\DirectAdminAPI\MigrateApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiChangeUserCreatorPost()**](MigrateApi.md#apiChangeUserCreatorPost) | **POST** /api/change-user-creator | Change user creator (move user between resellers) |
| [**apiConvertResellerToUserPost()**](MigrateApi.md#apiConvertResellerToUserPost) | **POST** /api/convert-reseller-to-user | Change reseller to user type. |
| [**apiConvertUserToResellerPost()**](MigrateApi.md#apiConvertUserToResellerPost) | **POST** /api/convert-user-to-reseller | Change user to reseller type. |


## `apiChangeUserCreatorPost()`

```php
apiChangeUserCreatorPost($payload)
```

Change user creator (move user between resellers)

Change user account creator effectively moving user account from one admin/reseller to other admin/reseller.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\MigrateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \COMPITAUT\DirectAdminAPI\Model\WebChangeUserCreatorRequest(); // \COMPITAUT\DirectAdminAPI\Model\WebChangeUserCreatorRequest | Request parameters

try {
    $apiInstance->apiChangeUserCreatorPost($payload);
} catch (Exception $e) {
    echo 'Exception when calling MigrateApi->apiChangeUserCreatorPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **payload** | [**\COMPITAUT\DirectAdminAPI\Model\WebChangeUserCreatorRequest**](../Model/WebChangeUserCreatorRequest.md)| Request parameters | |

### Return type

void (empty response body)

### Authorization

[DaBasicAuth](../../README.md#DaBasicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiConvertResellerToUserPost()`

```php
apiConvertResellerToUserPost($payload)
```

Change reseller to user type.

Change user of reseller type to user type. Admins only CMD.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\MigrateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \COMPITAUT\DirectAdminAPI\Model\WebResellerToUserRequest(); // \COMPITAUT\DirectAdminAPI\Model\WebResellerToUserRequest | User conversion parameters.

try {
    $apiInstance->apiConvertResellerToUserPost($payload);
} catch (Exception $e) {
    echo 'Exception when calling MigrateApi->apiConvertResellerToUserPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **payload** | [**\COMPITAUT\DirectAdminAPI\Model\WebResellerToUserRequest**](../Model/WebResellerToUserRequest.md)| User conversion parameters. | |

### Return type

void (empty response body)

### Authorization

[DaBasicAuth](../../README.md#DaBasicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiConvertUserToResellerPost()`

```php
apiConvertUserToResellerPost($payload)
```

Change user to reseller type.

Change user of user type to reseller type. Admins only CMD.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\MigrateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \COMPITAUT\DirectAdminAPI\Model\WebUserToResellerRequest(); // \COMPITAUT\DirectAdminAPI\Model\WebUserToResellerRequest | Account conversion parameters.

try {
    $apiInstance->apiConvertUserToResellerPost($payload);
} catch (Exception $e) {
    echo 'Exception when calling MigrateApi->apiConvertUserToResellerPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **payload** | [**\COMPITAUT\DirectAdminAPI\Model\WebUserToResellerRequest**](../Model/WebUserToResellerRequest.md)| Account conversion parameters. | |

### Return type

void (empty response body)

### Authorization

[DaBasicAuth](../../README.md#DaBasicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
