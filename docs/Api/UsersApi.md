# COMPITAUT\DirectAdminAPI\UsersApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiLoginHistoryGet()**](UsersApi.md#apiLoginHistoryGet) | **GET** /api/login-history | Get login history |
| [**apiUsersUsernameConfigGet()**](UsersApi.md#apiUsersUsernameConfigGet) | **GET** /api/users/{username}/config | Get user config |
| [**apiUsersUsernameLoginHistoryGet()**](UsersApi.md#apiUsersUsernameLoginHistoryGet) | **GET** /api/users/{username}/login-history | Get user&#39;s login history |
| [**apiUsersUsernameUsageGet()**](UsersApi.md#apiUsersUsernameUsageGet) | **GET** /api/users/{username}/usage | Get user&#39;s usage |


## `apiLoginHistoryGet()`

```php
apiLoginHistoryGet(): \COMPITAUT\DirectAdminAPI\Model\WebUserLoginHistory[]
```

Get login history

Get authenticated user's login history.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->apiLoginHistoryGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->apiLoginHistoryGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\COMPITAUT\DirectAdminAPI\Model\WebUserLoginHistory[]**](../Model/WebUserLoginHistory.md)

### Authorization

[DaBasicAuth](../../README.md#DaBasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiUsersUsernameConfigGet()`

```php
apiUsersUsernameConfigGet($username): \COMPITAUT\DirectAdminAPI\Model\WebUserConfig
```

Get user config

Get user config as is. Negative values for fields suffixed with `Lim` indicate no limit.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$username = 'username_example'; // string | Username of the user to fetch

try {
    $result = $apiInstance->apiUsersUsernameConfigGet($username);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->apiUsersUsernameConfigGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **username** | **string**| Username of the user to fetch | |

### Return type

[**\COMPITAUT\DirectAdminAPI\Model\WebUserConfig**](../Model/WebUserConfig.md)

### Authorization

[DaBasicAuth](../../README.md#DaBasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiUsersUsernameLoginHistoryGet()`

```php
apiUsersUsernameLoginHistoryGet($username): \COMPITAUT\DirectAdminAPI\Model\WebUserLoginHistory[]
```

Get user's login history

Get user's login history (read-only).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$username = 'username_example'; // string | Username of the user to fetch

try {
    $result = $apiInstance->apiUsersUsernameLoginHistoryGet($username);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->apiUsersUsernameLoginHistoryGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **username** | **string**| Username of the user to fetch | |

### Return type

[**\COMPITAUT\DirectAdminAPI\Model\WebUserLoginHistory[]**](../Model/WebUserLoginHistory.md)

### Authorization

[DaBasicAuth](../../README.md#DaBasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiUsersUsernameUsageGet()`

```php
apiUsersUsernameUsageGet($username): \COMPITAUT\DirectAdminAPI\Model\WebUserUsage
```

Get user's usage

Get user's usage and limits (read-only).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$username = 'username_example'; // string | Username of the user to fetch

try {
    $result = $apiInstance->apiUsersUsernameUsageGet($username);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->apiUsersUsernameUsageGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **username** | **string**| Username of the user to fetch | |

### Return type

[**\COMPITAUT\DirectAdminAPI\Model\WebUserUsage**](../Model/WebUserUsage.md)

### Authorization

[DaBasicAuth](../../README.md#DaBasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
