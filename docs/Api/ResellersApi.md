# COMPITAUT\DirectAdminAPI\ResellersApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiResellersUsernameConfigGet()**](ResellersApi.md#apiResellersUsernameConfigGet) | **GET** /api/resellers/{username}/config | Get reseller config |
| [**apiResellersUsernameUsageGet()**](ResellersApi.md#apiResellersUsernameUsageGet) | **GET** /api/resellers/{username}/usage | Get reseller and his users usage |


## `apiResellersUsernameConfigGet()`

```php
apiResellersUsernameConfigGet($username): \COMPITAUT\DirectAdminAPI\Model\WebResellerConfig
```

Get reseller config

This endpoint returns reseller configuration.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\ResellersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$username = 'username_example'; // string | Username of the user to fetch

try {
    $result = $apiInstance->apiResellersUsernameConfigGet($username);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResellersApi->apiResellersUsernameConfigGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **username** | **string**| Username of the user to fetch | |

### Return type

[**\COMPITAUT\DirectAdminAPI\Model\WebResellerConfig**](../Model/WebResellerConfig.md)

### Authorization

[DaBasicAuth](../../README.md#DaBasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiResellersUsernameUsageGet()`

```php
apiResellersUsernameUsageGet($username): \COMPITAUT\DirectAdminAPI\Model\WebResellerUsage
```

Get reseller and his users usage

This endpoint returns combined reseller and his users resource usage and reseller limits.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\ResellersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$username = 'username_example'; // string | Username of the user to fetch

try {
    $result = $apiInstance->apiResellersUsernameUsageGet($username);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResellersApi->apiResellersUsernameUsageGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **username** | **string**| Username of the user to fetch | |

### Return type

[**\COMPITAUT\DirectAdminAPI\Model\WebResellerUsage**](../Model/WebResellerUsage.md)

### Authorization

[DaBasicAuth](../../README.md#DaBasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
