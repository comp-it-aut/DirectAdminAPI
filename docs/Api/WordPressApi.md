# COMPITAUT\DirectAdminAPI\WordPressApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiWordpressInstallPost()**](WordPressApi.md#apiWordpressInstallPost) | **POST** /api/wordpress/install | Performs new wordpress installation in a given location |
| [**apiWordpressInstallQuickPost()**](WordPressApi.md#apiWordpressInstallQuickPost) | **POST** /api/wordpress/install-quick | Performs quick new wordpress installation in a given location |
| [**apiWordpressLocationsGet()**](WordPressApi.md#apiWordpressLocationsGet) | **GET** /api/wordpress/locations | Returns list of known wordpress installations and potential installation locations. |
| [**apiWordpressLocationsLocationIdConfigAutoUpdatePut()**](WordPressApi.md#apiWordpressLocationsLocationIdConfigAutoUpdatePut) | **PUT** /api/wordpress/locations/{location_id}/config/auto-update | Change wordpress core auto update state. |
| [**apiWordpressLocationsLocationIdConfigGet()**](WordPressApi.md#apiWordpressLocationsLocationIdConfigGet) | **GET** /api/wordpress/locations/{location_id}/config | Retrieve wordpress database configuration for a single installation. |
| [**apiWordpressLocationsLocationIdConfigPut()**](WordPressApi.md#apiWordpressLocationsLocationIdConfigPut) | **PUT** /api/wordpress/locations/{location_id}/config | Change wordpress database configuration for a single installation. |
| [**apiWordpressLocationsLocationIdDelete()**](WordPressApi.md#apiWordpressLocationsLocationIdDelete) | **DELETE** /api/wordpress/locations/{location_id} | Remove wordpress installation. |
| [**apiWordpressLocationsLocationIdOptionsGet()**](WordPressApi.md#apiWordpressLocationsLocationIdOptionsGet) | **GET** /api/wordpress/locations/{location_id}/options | Retrieve all wordpress options for a single installation. |
| [**apiWordpressLocationsLocationIdOptionsPatch()**](WordPressApi.md#apiWordpressLocationsLocationIdOptionsPatch) | **PATCH** /api/wordpress/locations/{location_id}/options | Change wordpress options for a given installation. |
| [**apiWordpressLocationsLocationIdUsersGet()**](WordPressApi.md#apiWordpressLocationsLocationIdUsersGet) | **GET** /api/wordpress/locations/{location_id}/users | Retrieve all wordpress user accounts |
| [**apiWordpressLocationsLocationIdUsersUserIdChangePasswordPost()**](WordPressApi.md#apiWordpressLocationsLocationIdUsersUserIdChangePasswordPost) | **POST** /api/wordpress/locations/{location_id}/users/{user_id}/change-password | Change wordpress user account password |
| [**apiWordpressLocationsLocationIdUsersUserIdSsoLoginPost()**](WordPressApi.md#apiWordpressLocationsLocationIdUsersUserIdSsoLoginPost) | **POST** /api/wordpress/locations/{location_id}/users/{user_id}/sso-login | Create magic login URL. |
| [**apiWordpressLocationsLocationIdWordpressGet()**](WordPressApi.md#apiWordpressLocationsLocationIdWordpressGet) | **GET** /api/wordpress/locations/{location_id}/wordpress | Retrieve information about a single WordPress installation |


## `apiWordpressInstallPost()`

```php
apiWordpressInstallPost($payload): \COMPITAUT\DirectAdminAPI\Model\WebWordpressInstallResponse
```

Performs new wordpress installation in a given location

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\WordPressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \COMPITAUT\DirectAdminAPI\Model\WebWordpressInstallRequest(); // \COMPITAUT\DirectAdminAPI\Model\WebWordpressInstallRequest | New wordpress installation configuration

try {
    $result = $apiInstance->apiWordpressInstallPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WordPressApi->apiWordpressInstallPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **payload** | [**\COMPITAUT\DirectAdminAPI\Model\WebWordpressInstallRequest**](../Model/WebWordpressInstallRequest.md)| New wordpress installation configuration | |

### Return type

[**\COMPITAUT\DirectAdminAPI\Model\WebWordpressInstallResponse**](../Model/WebWordpressInstallResponse.md)

### Authorization

[DaBasicAuth](../../README.md#DaBasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiWordpressInstallQuickPost()`

```php
apiWordpressInstallQuickPost($payload): \COMPITAUT\DirectAdminAPI\Model\WebWordpressInstallResponse
```

Performs quick new wordpress installation in a given location

Quick install variant creates a new database.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\WordPressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \COMPITAUT\DirectAdminAPI\Model\WebWordpressInstallQuickRequest(); // \COMPITAUT\DirectAdminAPI\Model\WebWordpressInstallQuickRequest | New wordpress installation configuration

try {
    $result = $apiInstance->apiWordpressInstallQuickPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WordPressApi->apiWordpressInstallQuickPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **payload** | [**\COMPITAUT\DirectAdminAPI\Model\WebWordpressInstallQuickRequest**](../Model/WebWordpressInstallQuickRequest.md)| New wordpress installation configuration | |

### Return type

[**\COMPITAUT\DirectAdminAPI\Model\WebWordpressInstallResponse**](../Model/WebWordpressInstallResponse.md)

### Authorization

[DaBasicAuth](../../README.md#DaBasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiWordpressLocationsGet()`

```php
apiWordpressLocationsGet($domain): \COMPITAUT\DirectAdminAPI\Model\WebWordpressInstallation[]
```

Returns list of known wordpress installations and potential installation locations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\WordPressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = 'domain_example'; // string | Filter locations by domain name, sub-domains are not accepted

try {
    $result = $apiInstance->apiWordpressLocationsGet($domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WordPressApi->apiWordpressLocationsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**| Filter locations by domain name, sub-domains are not accepted | [optional] |

### Return type

[**\COMPITAUT\DirectAdminAPI\Model\WebWordpressInstallation[]**](../Model/WebWordpressInstallation.md)

### Authorization

[DaBasicAuth](../../README.md#DaBasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiWordpressLocationsLocationIdConfigAutoUpdatePut()`

```php
apiWordpressLocationsLocationIdConfigAutoUpdatePut($locationId, $payload)
```

Change wordpress core auto update state.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\WordPressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$locationId = 'locationId_example'; // string | WordPress location ID
$payload = new \COMPITAUT\DirectAdminAPI\Model\WebWordpressUpdateState(); // \COMPITAUT\DirectAdminAPI\Model\WebWordpressUpdateState | New configuration

try {
    $apiInstance->apiWordpressLocationsLocationIdConfigAutoUpdatePut($locationId, $payload);
} catch (Exception $e) {
    echo 'Exception when calling WordPressApi->apiWordpressLocationsLocationIdConfigAutoUpdatePut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **locationId** | **string**| WordPress location ID | |
| **payload** | [**\COMPITAUT\DirectAdminAPI\Model\WebWordpressUpdateState**](../Model/WebWordpressUpdateState.md)| New configuration | |

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

## `apiWordpressLocationsLocationIdConfigGet()`

```php
apiWordpressLocationsLocationIdConfigGet($locationId): \COMPITAUT\DirectAdminAPI\Model\WebWordpressConfig
```

Retrieve wordpress database configuration for a single installation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\WordPressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$locationId = 'locationId_example'; // string | WordPress location ID

try {
    $result = $apiInstance->apiWordpressLocationsLocationIdConfigGet($locationId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WordPressApi->apiWordpressLocationsLocationIdConfigGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **locationId** | **string**| WordPress location ID | |

### Return type

[**\COMPITAUT\DirectAdminAPI\Model\WebWordpressConfig**](../Model/WebWordpressConfig.md)

### Authorization

[DaBasicAuth](../../README.md#DaBasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiWordpressLocationsLocationIdConfigPut()`

```php
apiWordpressLocationsLocationIdConfigPut($locationId, $payload): \COMPITAUT\DirectAdminAPI\Model\WebWordpressConfig
```

Change wordpress database configuration for a single installation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\WordPressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$locationId = 'locationId_example'; // string | WordPress location ID
$payload = new \COMPITAUT\DirectAdminAPI\Model\WebWordpressConfig(); // \COMPITAUT\DirectAdminAPI\Model\WebWordpressConfig | New configuration

try {
    $result = $apiInstance->apiWordpressLocationsLocationIdConfigPut($locationId, $payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WordPressApi->apiWordpressLocationsLocationIdConfigPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **locationId** | **string**| WordPress location ID | |
| **payload** | [**\COMPITAUT\DirectAdminAPI\Model\WebWordpressConfig**](../Model/WebWordpressConfig.md)| New configuration | |

### Return type

[**\COMPITAUT\DirectAdminAPI\Model\WebWordpressConfig**](../Model/WebWordpressConfig.md)

### Authorization

[DaBasicAuth](../../README.md#DaBasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiWordpressLocationsLocationIdDelete()`

```php
apiWordpressLocationsLocationIdDelete($locationId)
```

Remove wordpress installation.

This endpoint will remove all DB tables and wordpress files, but database account and database will not be removed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\WordPressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$locationId = 'locationId_example'; // string | WordPress location ID

try {
    $apiInstance->apiWordpressLocationsLocationIdDelete($locationId);
} catch (Exception $e) {
    echo 'Exception when calling WordPressApi->apiWordpressLocationsLocationIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **locationId** | **string**| WordPress location ID | |

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

## `apiWordpressLocationsLocationIdOptionsGet()`

```php
apiWordpressLocationsLocationIdOptionsGet($locationId): array<string,string>
```

Retrieve all wordpress options for a single installation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\WordPressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$locationId = 'locationId_example'; // string | WordPress location ID

try {
    $result = $apiInstance->apiWordpressLocationsLocationIdOptionsGet($locationId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WordPressApi->apiWordpressLocationsLocationIdOptionsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **locationId** | **string**| WordPress location ID | |

### Return type

**array<string,string>**

### Authorization

[DaBasicAuth](../../README.md#DaBasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiWordpressLocationsLocationIdOptionsPatch()`

```php
apiWordpressLocationsLocationIdOptionsPatch($locationId, $payload): array<string,string>
```

Change wordpress options for a given installation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\WordPressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$locationId = 'locationId_example'; // string | WordPress location ID
$payload = array('key' => 'payload_example'); // array<string,string> | Set of options to change, nil value deletes option

try {
    $result = $apiInstance->apiWordpressLocationsLocationIdOptionsPatch($locationId, $payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WordPressApi->apiWordpressLocationsLocationIdOptionsPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **locationId** | **string**| WordPress location ID | |
| **payload** | [**array<string,string>**](../Model/string.md)| Set of options to change, nil value deletes option | |

### Return type

**array<string,string>**

### Authorization

[DaBasicAuth](../../README.md#DaBasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiWordpressLocationsLocationIdUsersGet()`

```php
apiWordpressLocationsLocationIdUsersGet($locationId): \COMPITAUT\DirectAdminAPI\Model\WebWordpressUser[]
```

Retrieve all wordpress user accounts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\WordPressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$locationId = 'locationId_example'; // string | WordPress location ID

try {
    $result = $apiInstance->apiWordpressLocationsLocationIdUsersGet($locationId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WordPressApi->apiWordpressLocationsLocationIdUsersGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **locationId** | **string**| WordPress location ID | |

### Return type

[**\COMPITAUT\DirectAdminAPI\Model\WebWordpressUser[]**](../Model/WebWordpressUser.md)

### Authorization

[DaBasicAuth](../../README.md#DaBasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiWordpressLocationsLocationIdUsersUserIdChangePasswordPost()`

```php
apiWordpressLocationsLocationIdUsersUserIdChangePasswordPost($locationId, $userId, $payload)
```

Change wordpress user account password

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\WordPressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$locationId = 'locationId_example'; // string | WordPress location ID
$userId = 56; // int | User ID
$payload = new \COMPITAUT\DirectAdminAPI\Model\WebWordpressUserPassword(); // \COMPITAUT\DirectAdminAPI\Model\WebWordpressUserPassword | payload

try {
    $apiInstance->apiWordpressLocationsLocationIdUsersUserIdChangePasswordPost($locationId, $userId, $payload);
} catch (Exception $e) {
    echo 'Exception when calling WordPressApi->apiWordpressLocationsLocationIdUsersUserIdChangePasswordPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **locationId** | **string**| WordPress location ID | |
| **userId** | **int**| User ID | |
| **payload** | [**\COMPITAUT\DirectAdminAPI\Model\WebWordpressUserPassword**](../Model/WebWordpressUserPassword.md)| payload | |

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

## `apiWordpressLocationsLocationIdUsersUserIdSsoLoginPost()`

```php
apiWordpressLocationsLocationIdUsersUserIdSsoLoginPost($locationId, $userId): \COMPITAUT\DirectAdminAPI\Model\WebWordpressSSO
```

Create magic login URL.

This endpoint will create a magic login link for specified user .

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\WordPressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$locationId = 'locationId_example'; // string | WordPress location ID
$userId = 56; // int | User ID

try {
    $result = $apiInstance->apiWordpressLocationsLocationIdUsersUserIdSsoLoginPost($locationId, $userId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WordPressApi->apiWordpressLocationsLocationIdUsersUserIdSsoLoginPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **locationId** | **string**| WordPress location ID | |
| **userId** | **int**| User ID | |

### Return type

[**\COMPITAUT\DirectAdminAPI\Model\WebWordpressSSO**](../Model/WebWordpressSSO.md)

### Authorization

[DaBasicAuth](../../README.md#DaBasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiWordpressLocationsLocationIdWordpressGet()`

```php
apiWordpressLocationsLocationIdWordpressGet($locationId): \COMPITAUT\DirectAdminAPI\Model\WebWordpressInstance
```

Retrieve information about a single WordPress installation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\WordPressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$locationId = 'locationId_example'; // string | WordPress location ID

try {
    $result = $apiInstance->apiWordpressLocationsLocationIdWordpressGet($locationId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WordPressApi->apiWordpressLocationsLocationIdWordpressGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **locationId** | **string**| WordPress location ID | |

### Return type

[**\COMPITAUT\DirectAdminAPI\Model\WebWordpressInstance**](../Model/WebWordpressInstance.md)

### Authorization

[DaBasicAuth](../../README.md#DaBasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
