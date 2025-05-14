# COMPITAUT\DirectAdminAPI\SkinOptionsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiSkinGlobalOptionsSkinDelete()**](SkinOptionsApi.md#apiSkinGlobalOptionsSkinDelete) | **DELETE** /api/skin-global-options/{skin} | Delete skin global options |
| [**apiSkinGlobalOptionsSkinGet()**](SkinOptionsApi.md#apiSkinGlobalOptionsSkinGet) | **GET** /api/skin-global-options/{skin} | Get skin global options |
| [**apiSkinGlobalOptionsSkinPatch()**](SkinOptionsApi.md#apiSkinGlobalOptionsSkinPatch) | **PATCH** /api/skin-global-options/{skin} | Patch skin global options |
| [**apiSkinGlobalOptionsSkinPut()**](SkinOptionsApi.md#apiSkinGlobalOptionsSkinPut) | **PUT** /api/skin-global-options/{skin} | Update skin global options |
| [**apiSkinOptionsSkinDelete()**](SkinOptionsApi.md#apiSkinOptionsSkinDelete) | **DELETE** /api/skin-options/{skin} | Delete skin user options |
| [**apiSkinOptionsSkinGet()**](SkinOptionsApi.md#apiSkinOptionsSkinGet) | **GET** /api/skin-options/{skin} | Get skin user options |
| [**apiSkinOptionsSkinPatch()**](SkinOptionsApi.md#apiSkinOptionsSkinPatch) | **PATCH** /api/skin-options/{skin} | Patch skin user options |
| [**apiSkinOptionsSkinPut()**](SkinOptionsApi.md#apiSkinOptionsSkinPut) | **PUT** /api/skin-options/{skin} | Update skin user options |


## `apiSkinGlobalOptionsSkinDelete()`

```php
apiSkinGlobalOptionsSkinDelete($skin)
```

Delete skin global options

Admin-only. Non-existing skins' options can also be deleted.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\SkinOptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$skin = 'skin_example'; // string | Skin's name

try {
    $apiInstance->apiSkinGlobalOptionsSkinDelete($skin);
} catch (Exception $e) {
    echo 'Exception when calling SkinOptionsApi->apiSkinGlobalOptionsSkinDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **skin** | **string**| Skin&#39;s name | |

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

## `apiSkinGlobalOptionsSkinGet()`

```php
apiSkinGlobalOptionsSkinGet($skin): array<string,mixed>
```

Get skin global options

Accessible to anyone. Empty json object is returned if skin does not exist, skin options do not exist or skin options are malformed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new COMPITAUT\DirectAdminAPI\Api\SkinOptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$skin = 'skin_example'; // string | Skin's name

try {
    $result = $apiInstance->apiSkinGlobalOptionsSkinGet($skin);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SkinOptionsApi->apiSkinGlobalOptionsSkinGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **skin** | **string**| Skin&#39;s name | |

### Return type

**array<string,mixed>**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiSkinGlobalOptionsSkinPatch()`

```php
apiSkinGlobalOptionsSkinPatch($skin, $body): array<string,mixed>
```

Patch skin global options

Admin-only. Follows RFC7396.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\SkinOptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$skin = 'skin_example'; // string | Skin's name
$body = NULL; // array<string,mixed> | Skin global options patch

try {
    $result = $apiInstance->apiSkinGlobalOptionsSkinPatch($skin, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SkinOptionsApi->apiSkinGlobalOptionsSkinPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **skin** | **string**| Skin&#39;s name | |
| **body** | [**array<string,mixed>**](../Model/mixed.md)| Skin global options patch | |

### Return type

**array<string,mixed>**

### Authorization

[DaBasicAuth](../../README.md#DaBasicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiSkinGlobalOptionsSkinPut()`

```php
apiSkinGlobalOptionsSkinPut($skin, $body): array<string,mixed>
```

Update skin global options

Admin-only.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\SkinOptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$skin = 'skin_example'; // string | Skin's name
$body = NULL; // array<string,mixed> | Skin global options

try {
    $result = $apiInstance->apiSkinGlobalOptionsSkinPut($skin, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SkinOptionsApi->apiSkinGlobalOptionsSkinPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **skin** | **string**| Skin&#39;s name | |
| **body** | [**array<string,mixed>**](../Model/mixed.md)| Skin global options | |

### Return type

**array<string,mixed>**

### Authorization

[DaBasicAuth](../../README.md#DaBasicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiSkinOptionsSkinDelete()`

```php
apiSkinOptionsSkinDelete($skin)
```

Delete skin user options

This endpoint allows user specific skin options to be removed. Getting skin options after removal will return empty object.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\SkinOptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$skin = 'skin_example'; // string | Skin's name

try {
    $apiInstance->apiSkinOptionsSkinDelete($skin);
} catch (Exception $e) {
    echo 'Exception when calling SkinOptionsApi->apiSkinOptionsSkinDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **skin** | **string**| Skin&#39;s name | |

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

## `apiSkinOptionsSkinGet()`

```php
apiSkinOptionsSkinGet($skin): array<string,mixed>
```

Get skin user options

Skin options are user specific skin customizations. Each user can have its own options saved. Empty json object is returned if demo is enabled, skin does not exist, skin options do not exist or skin options are malformed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\SkinOptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$skin = 'skin_example'; // string | Skin's name

try {
    $result = $apiInstance->apiSkinOptionsSkinGet($skin);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SkinOptionsApi->apiSkinOptionsSkinGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **skin** | **string**| Skin&#39;s name | |

### Return type

**array<string,mixed>**

### Authorization

[DaBasicAuth](../../README.md#DaBasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiSkinOptionsSkinPatch()`

```php
apiSkinOptionsSkinPatch($skin, $body): array<string,mixed>
```

Patch skin user options

Follows RFC7396.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\SkinOptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$skin = 'skin_example'; // string | Skin's name
$body = NULL; // array<string,mixed> | Skin user options patch

try {
    $result = $apiInstance->apiSkinOptionsSkinPatch($skin, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SkinOptionsApi->apiSkinOptionsSkinPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **skin** | **string**| Skin&#39;s name | |
| **body** | [**array<string,mixed>**](../Model/mixed.md)| Skin user options patch | |

### Return type

**array<string,mixed>**

### Authorization

[DaBasicAuth](../../README.md#DaBasicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiSkinOptionsSkinPut()`

```php
apiSkinOptionsSkinPut($skin, $body): array<string,mixed>
```

Update skin user options

This endpoint allows user to update his skin options for a given skin.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\SkinOptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$skin = 'skin_example'; // string | Skin's name
$body = NULL; // array<string,mixed> | Skin user options

try {
    $result = $apiInstance->apiSkinOptionsSkinPut($skin, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SkinOptionsApi->apiSkinOptionsSkinPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **skin** | **string**| Skin&#39;s name | |
| **body** | [**array<string,mixed>**](../Model/mixed.md)| Skin user options | |

### Return type

**array<string,mixed>**

### Authorization

[DaBasicAuth](../../README.md#DaBasicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
