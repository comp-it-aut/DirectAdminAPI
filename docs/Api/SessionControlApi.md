# COMPITAUT\DirectAdminAPI\SessionControlApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiLoginPost()**](SessionControlApi.md#apiLoginPost) | **POST** /api/login | Create Login session |
| [**apiLoginUrlGet()**](SessionControlApi.md#apiLoginUrlGet) | **GET** /api/login/url | Create Login session using OTP |
| [**apiLogoutPost()**](SessionControlApi.md#apiLogoutPost) | **POST** /api/logout | Create Login session |
| [**apiSessionLoginAsReturnPost()**](SessionControlApi.md#apiSessionLoginAsReturnPost) | **POST** /api/session/login-as/return | Drop out of Login-as session |
| [**apiSessionLoginAsSwitchPost()**](SessionControlApi.md#apiSessionLoginAsSwitchPost) | **POST** /api/session/login-as/switch | Swich to a new session that impersonating another account |


## `apiLoginPost()`

```php
apiLoginPost($params): \COMPITAUT\DirectAdminAPI\Model\WebLoginResult
```

Create Login session

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new COMPITAUT\DirectAdminAPI\Api\SessionControlApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$params = new \COMPITAUT\DirectAdminAPI\Model\WebLoginRequest(); // \COMPITAUT\DirectAdminAPI\Model\WebLoginRequest | Authentication attributes

try {
    $result = $apiInstance->apiLoginPost($params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SessionControlApi->apiLoginPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **params** | [**\COMPITAUT\DirectAdminAPI\Model\WebLoginRequest**](../Model/WebLoginRequest.md)| Authentication attributes | |

### Return type

[**\COMPITAUT\DirectAdminAPI\Model\WebLoginResult**](../Model/WebLoginResult.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiLoginUrlGet()`

```php
apiLoginUrlGet($key)
```

Create Login session using OTP

Endpoint intended to handle login urls.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new COMPITAUT\DirectAdminAPI\Api\SessionControlApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = 'key_example'; // string | One time password.

try {
    $apiInstance->apiLoginUrlGet($key);
} catch (Exception $e) {
    echo 'Exception when calling SessionControlApi->apiLoginUrlGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| One time password. | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiLogoutPost()`

```php
apiLogoutPost(): \COMPITAUT\DirectAdminAPI\Model\WebLogoutResponse
```

Create Login session

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\SessionControlApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->apiLogoutPost();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SessionControlApi->apiLogoutPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\COMPITAUT\DirectAdminAPI\Model\WebLogoutResponse**](../Model/WebLogoutResponse.md)

### Authorization

[DaBasicAuth](../../README.md#DaBasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiSessionLoginAsReturnPost()`

```php
apiSessionLoginAsReturnPost()
```

Drop out of Login-as session

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\SessionControlApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->apiSessionLoginAsReturnPost();
} catch (Exception $e) {
    echo 'Exception when calling SessionControlApi->apiSessionLoginAsReturnPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[DaBasicAuth](../../README.md#DaBasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiSessionLoginAsSwitchPost()`

```php
apiSessionLoginAsSwitchPost($params)
```

Swich to a new session that impersonating another account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\SessionControlApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$params = new \COMPITAUT\DirectAdminAPI\Model\WebImpersonateRequest(); // \COMPITAUT\DirectAdminAPI\Model\WebImpersonateRequest | Authentication attributes

try {
    $apiInstance->apiSessionLoginAsSwitchPost($params);
} catch (Exception $e) {
    echo 'Exception when calling SessionControlApi->apiSessionLoginAsSwitchPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **params** | [**\COMPITAUT\DirectAdminAPI\Model\WebImpersonateRequest**](../Model/WebImpersonateRequest.md)| Authentication attributes | |

### Return type

void (empty response body)

### Authorization

[DaBasicAuth](../../README.md#DaBasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
