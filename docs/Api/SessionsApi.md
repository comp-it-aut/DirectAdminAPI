# COMPITAUT\DirectAdminAPI\SessionsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiSessionGet()**](SessionsApi.md#apiSessionGet) | **GET** /api/session | Get current session info |
| [**apiSessionResellerConfigGet()**](SessionsApi.md#apiSessionResellerConfigGet) | **GET** /api/session/reseller-config | Get reseller config |
| [**apiSessionStateGet()**](SessionsApi.md#apiSessionStateGet) | **GET** /api/session/state | Get server state |
| [**apiSessionSwitchActiveDomainPost()**](SessionsApi.md#apiSessionSwitchActiveDomainPost) | **POST** /api/session/switch-active-domain | Switch active domain for current session |
| [**apiSessionUserConfigGet()**](SessionsApi.md#apiSessionUserConfigGet) | **GET** /api/session/user-config | Current user config |
| [**apiSessionUserUsageGet()**](SessionsApi.md#apiSessionUserUsageGet) | **GET** /api/session/user-usage | Get user&#39;s usage |
| [**apiSessionsDestroyAllOtherPost()**](SessionsApi.md#apiSessionsDestroyAllOtherPost) | **POST** /api/sessions/destroy-all-other | Destroy all active sessions except current |
| [**apiSessionsDestroyPublicIdPost()**](SessionsApi.md#apiSessionsDestroyPublicIdPost) | **POST** /api/sessions/destroy/{public_id} | Destroy an active session |
| [**apiSessionsGet()**](SessionsApi.md#apiSessionsGet) | **GET** /api/sessions | List active user sessions |


## `apiSessionGet()`

```php
apiSessionGet(): \COMPITAUT\DirectAdminAPI\Model\WebSessionInfo
```

Get current session info

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\SessionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->apiSessionGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SessionsApi->apiSessionGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\COMPITAUT\DirectAdminAPI\Model\WebSessionInfo**](../Model/WebSessionInfo.md)

### Authorization

[DaBasicAuth](../../README.md#DaBasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiSessionResellerConfigGet()`

```php
apiSessionResellerConfigGet(): \COMPITAUT\DirectAdminAPI\Model\WebResellerConfig
```

Get reseller config

This endpoint returns reseller configuration. For non reseller accounts it will respond with 404 error.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\SessionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->apiSessionResellerConfigGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SessionsApi->apiSessionResellerConfigGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

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

## `apiSessionStateGet()`

```php
apiSessionStateGet(): \COMPITAUT\DirectAdminAPI\Model\WebStateResponse
```

Get server state

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\SessionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->apiSessionStateGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SessionsApi->apiSessionStateGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\COMPITAUT\DirectAdminAPI\Model\WebStateResponse**](../Model/WebStateResponse.md)

### Authorization

[DaBasicAuth](../../README.md#DaBasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiSessionSwitchActiveDomainPost()`

```php
apiSessionSwitchActiveDomainPost($request)
```

Switch active domain for current session

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\SessionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \COMPITAUT\DirectAdminAPI\Model\WebSessionSelectDomainRequest(); // \COMPITAUT\DirectAdminAPI\Model\WebSessionSelectDomainRequest | Request data.

try {
    $apiInstance->apiSessionSwitchActiveDomainPost($request);
} catch (Exception $e) {
    echo 'Exception when calling SessionsApi->apiSessionSwitchActiveDomainPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **request** | [**\COMPITAUT\DirectAdminAPI\Model\WebSessionSelectDomainRequest**](../Model/WebSessionSelectDomainRequest.md)| Request data. | |

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

## `apiSessionUserConfigGet()`

```php
apiSessionUserConfigGet(): \COMPITAUT\DirectAdminAPI\Model\WebUserConfig
```

Current user config

Returns current user config. Same as `/api/users/{user}/config` but limited to this session user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\SessionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->apiSessionUserConfigGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SessionsApi->apiSessionUserConfigGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

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

## `apiSessionUserUsageGet()`

```php
apiSessionUserUsageGet(): \COMPITAUT\DirectAdminAPI\Model\WebUserUsage
```

Get user's usage

Returns current user usage and limits. Same as `/api/users/{username}/usage` but limited to this session user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\SessionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->apiSessionUserUsageGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SessionsApi->apiSessionUserUsageGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

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

## `apiSessionsDestroyAllOtherPost()`

```php
apiSessionsDestroyAllOtherPost()
```

Destroy all active sessions except current

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\SessionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->apiSessionsDestroyAllOtherPost();
} catch (Exception $e) {
    echo 'Exception when calling SessionsApi->apiSessionsDestroyAllOtherPost: ', $e->getMessage(), PHP_EOL;
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
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiSessionsDestroyPublicIdPost()`

```php
apiSessionsDestroyPublicIdPost($publicId)
```

Destroy an active session

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\SessionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$publicId = 'publicId_example'; // string | Session's public ID.

try {
    $apiInstance->apiSessionsDestroyPublicIdPost($publicId);
} catch (Exception $e) {
    echo 'Exception when calling SessionsApi->apiSessionsDestroyPublicIdPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **publicId** | **string**| Session&#39;s public ID. | |

### Return type

void (empty response body)

### Authorization

[DaBasicAuth](../../README.md#DaBasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiSessionsGet()`

```php
apiSessionsGet(): \COMPITAUT\DirectAdminAPI\Model\WebSessionMetadata[]
```

List active user sessions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\SessionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->apiSessionsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SessionsApi->apiSessionsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\COMPITAUT\DirectAdminAPI\Model\WebSessionMetadata[]**](../Model/WebSessionMetadata.md)

### Authorization

[DaBasicAuth](../../README.md#DaBasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
