# COMPITAUT\DirectAdminAPI\LoginKeysApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiLoginKeysCommandsGet()**](LoginKeysApi.md#apiLoginKeysCommandsGet) | **GET** /api/login-keys/commands | Get all commands available for login keys |
| [**apiLoginKeysKeysGet()**](LoginKeysApi.md#apiLoginKeysKeysGet) | **GET** /api/login-keys/keys | Get all login keys |
| [**apiLoginKeysKeysIdDelete()**](LoginKeysApi.md#apiLoginKeysKeysIdDelete) | **DELETE** /api/login-keys/keys/{id} | Delete login key |
| [**apiLoginKeysKeysIdGet()**](LoginKeysApi.md#apiLoginKeysKeysIdGet) | **GET** /api/login-keys/keys/{id} | Get login key |
| [**apiLoginKeysKeysIdHistoryGet()**](LoginKeysApi.md#apiLoginKeysKeysIdHistoryGet) | **GET** /api/login-keys/keys/{id}/history | Get login key history |
| [**apiLoginKeysKeysIdPatch()**](LoginKeysApi.md#apiLoginKeysKeysIdPatch) | **PATCH** /api/login-keys/keys/{id} | Update login key |
| [**apiLoginKeysKeysPost()**](LoginKeysApi.md#apiLoginKeysKeysPost) | **POST** /api/login-keys/keys | Create login key |
| [**apiLoginKeysUrlsGet()**](LoginKeysApi.md#apiLoginKeysUrlsGet) | **GET** /api/login-keys/urls | Get all login URLs |
| [**apiLoginKeysUrlsIdDelete()**](LoginKeysApi.md#apiLoginKeysUrlsIdDelete) | **DELETE** /api/login-keys/urls/{id} | Delete login URL |
| [**apiLoginKeysUrlsPost()**](LoginKeysApi.md#apiLoginKeysUrlsPost) | **POST** /api/login-keys/urls | Create login URL |


## `apiLoginKeysCommandsGet()`

```php
apiLoginKeysCommandsGet(): \COMPITAUT\DirectAdminAPI\Model\WebLoginKeyCommandsResponse
```

Get all commands available for login keys

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new COMPITAUT\DirectAdminAPI\Api\LoginKeysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->apiLoginKeysCommandsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoginKeysApi->apiLoginKeysCommandsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\COMPITAUT\DirectAdminAPI\Model\WebLoginKeyCommandsResponse**](../Model/WebLoginKeyCommandsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiLoginKeysKeysGet()`

```php
apiLoginKeysKeysGet(): \COMPITAUT\DirectAdminAPI\Model\WebLoginKeyResponse[]
```

Get all login keys

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\LoginKeysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->apiLoginKeysKeysGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoginKeysApi->apiLoginKeysKeysGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\COMPITAUT\DirectAdminAPI\Model\WebLoginKeyResponse[]**](../Model/WebLoginKeyResponse.md)

### Authorization

[DaBasicAuth](../../README.md#DaBasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiLoginKeysKeysIdDelete()`

```php
apiLoginKeysKeysIdDelete($id)
```

Delete login key

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\LoginKeysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Login key ID

try {
    $apiInstance->apiLoginKeysKeysIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling LoginKeysApi->apiLoginKeysKeysIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Login key ID | |

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

## `apiLoginKeysKeysIdGet()`

```php
apiLoginKeysKeysIdGet($id): \COMPITAUT\DirectAdminAPI\Model\WebLoginKeyResponse
```

Get login key

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\LoginKeysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Login key ID

try {
    $result = $apiInstance->apiLoginKeysKeysIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoginKeysApi->apiLoginKeysKeysIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Login key ID | |

### Return type

[**\COMPITAUT\DirectAdminAPI\Model\WebLoginKeyResponse**](../Model/WebLoginKeyResponse.md)

### Authorization

[DaBasicAuth](../../README.md#DaBasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiLoginKeysKeysIdHistoryGet()`

```php
apiLoginKeysKeysIdHistoryGet($id): \COMPITAUT\DirectAdminAPI\Model\WebLoginKeyHistoryEntry[]
```

Get login key history

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\LoginKeysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Login key ID

try {
    $result = $apiInstance->apiLoginKeysKeysIdHistoryGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoginKeysApi->apiLoginKeysKeysIdHistoryGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Login key ID | |

### Return type

[**\COMPITAUT\DirectAdminAPI\Model\WebLoginKeyHistoryEntry[]**](../Model/WebLoginKeyHistoryEntry.md)

### Authorization

[DaBasicAuth](../../README.md#DaBasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiLoginKeysKeysIdPatch()`

```php
apiLoginKeysKeysIdPatch($id, $data): \COMPITAUT\DirectAdminAPI\Model\WebLoginKeyResponse
```

Update login key

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\LoginKeysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Login key ID
$data = new \COMPITAUT\DirectAdminAPI\Model\WebLoginKeyUpdateRequest(); // \COMPITAUT\DirectAdminAPI\Model\WebLoginKeyUpdateRequest | Request Data

try {
    $result = $apiInstance->apiLoginKeysKeysIdPatch($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoginKeysApi->apiLoginKeysKeysIdPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Login key ID | |
| **data** | [**\COMPITAUT\DirectAdminAPI\Model\WebLoginKeyUpdateRequest**](../Model/WebLoginKeyUpdateRequest.md)| Request Data | |

### Return type

[**\COMPITAUT\DirectAdminAPI\Model\WebLoginKeyResponse**](../Model/WebLoginKeyResponse.md)

### Authorization

[DaBasicAuth](../../README.md#DaBasicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiLoginKeysKeysPost()`

```php
apiLoginKeysKeysPost($data): \COMPITAUT\DirectAdminAPI\Model\WebLoginKeyResponse
```

Create login key

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\LoginKeysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$data = new \COMPITAUT\DirectAdminAPI\Model\WebLoginKeyCreateRequest(); // \COMPITAUT\DirectAdminAPI\Model\WebLoginKeyCreateRequest | Request Data

try {
    $result = $apiInstance->apiLoginKeysKeysPost($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoginKeysApi->apiLoginKeysKeysPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **data** | [**\COMPITAUT\DirectAdminAPI\Model\WebLoginKeyCreateRequest**](../Model/WebLoginKeyCreateRequest.md)| Request Data | |

### Return type

[**\COMPITAUT\DirectAdminAPI\Model\WebLoginKeyResponse**](../Model/WebLoginKeyResponse.md)

### Authorization

[DaBasicAuth](../../README.md#DaBasicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiLoginKeysUrlsGet()`

```php
apiLoginKeysUrlsGet(): \COMPITAUT\DirectAdminAPI\Model\WebLoginURLResponse[]
```

Get all login URLs

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\LoginKeysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->apiLoginKeysUrlsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoginKeysApi->apiLoginKeysUrlsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\COMPITAUT\DirectAdminAPI\Model\WebLoginURLResponse[]**](../Model/WebLoginURLResponse.md)

### Authorization

[DaBasicAuth](../../README.md#DaBasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiLoginKeysUrlsIdDelete()`

```php
apiLoginKeysUrlsIdDelete($id)
```

Delete login URL

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\LoginKeysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Login key ID

try {
    $apiInstance->apiLoginKeysUrlsIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling LoginKeysApi->apiLoginKeysUrlsIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Login key ID | |

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

## `apiLoginKeysUrlsPost()`

```php
apiLoginKeysUrlsPost($data): \COMPITAUT\DirectAdminAPI\Model\WebLoginURLCreateResponse
```

Create login URL

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\LoginKeysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$data = new \COMPITAUT\DirectAdminAPI\Model\WebLoginURLCreateRequest(); // \COMPITAUT\DirectAdminAPI\Model\WebLoginURLCreateRequest | Request Data

try {
    $result = $apiInstance->apiLoginKeysUrlsPost($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoginKeysApi->apiLoginKeysUrlsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **data** | [**\COMPITAUT\DirectAdminAPI\Model\WebLoginURLCreateRequest**](../Model/WebLoginURLCreateRequest.md)| Request Data | |

### Return type

[**\COMPITAUT\DirectAdminAPI\Model\WebLoginURLCreateResponse**](../Model/WebLoginURLCreateResponse.md)

### Authorization

[DaBasicAuth](../../README.md#DaBasicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
