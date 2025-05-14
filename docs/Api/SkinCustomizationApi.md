# COMPITAUT\DirectAdminAPI\SkinCustomizationApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiSessionSkinCustomizationSkinFilenameGet()**](SkinCustomizationApi.md#apiSessionSkinCustomizationSkinFilenameGet) | **GET** /api/session/skin-customization/{skin}/{filename} | Download active skin customization file |
| [**apiSessionSkinCustomizationSkinGet()**](SkinCustomizationApi.md#apiSessionSkinCustomizationSkinGet) | **GET** /api/session/skin-customization/{skin} | Get list of active skin customizations |
| [**apiSkinCustomizationSkinCreatorFilenameGet()**](SkinCustomizationApi.md#apiSkinCustomizationSkinCreatorFilenameGet) | **GET** /api/skin-customization/{skin}/creator/{filename} | Download creator&#39;s skin customization file |
| [**apiSkinCustomizationSkinCreatorGet()**](SkinCustomizationApi.md#apiSkinCustomizationSkinCreatorGet) | **GET** /api/skin-customization/{skin}/creator | Get list of creator&#39;s skin customizations |
| [**apiSkinCustomizationSkinLocalDelete()**](SkinCustomizationApi.md#apiSkinCustomizationSkinLocalDelete) | **DELETE** /api/skin-customization/{skin}/local | Delete all skin customization files |
| [**apiSkinCustomizationSkinLocalFilenameDelete()**](SkinCustomizationApi.md#apiSkinCustomizationSkinLocalFilenameDelete) | **DELETE** /api/skin-customization/{skin}/local/{filename} | Delete skin customization file |
| [**apiSkinCustomizationSkinLocalFilenameGet()**](SkinCustomizationApi.md#apiSkinCustomizationSkinLocalFilenameGet) | **GET** /api/skin-customization/{skin}/local/{filename} | Download my skin customization file |
| [**apiSkinCustomizationSkinLocalFilenamePut()**](SkinCustomizationApi.md#apiSkinCustomizationSkinLocalFilenamePut) | **PUT** /api/skin-customization/{skin}/local/{filename} | Upload skin customization file (overwrites if exists) |
| [**apiSkinCustomizationSkinLocalGet()**](SkinCustomizationApi.md#apiSkinCustomizationSkinLocalGet) | **GET** /api/skin-customization/{skin}/local | Get list of my skin customizations |
| [**apiSkinCustomizationSkinLocalPost()**](SkinCustomizationApi.md#apiSkinCustomizationSkinLocalPost) | **POST** /api/skin-customization/{skin}/local | Upload skin customization file (overwrites if exists) |


## `apiSessionSkinCustomizationSkinFilenameGet()`

```php
apiSessionSkinCustomizationSkinFilenameGet($skin, $filename): \SplFileObject
```

Download active skin customization file

Download active skin customization file. Active inherits creators' skin customizations per user basis, meaning if creator (e.g. reseller) has any customizations, admin customizations are ignored.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\SkinCustomizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$skin = 'skin_example'; // string | Skin's name
$filename = 'filename_example'; // string | Skin customization file name

try {
    $result = $apiInstance->apiSessionSkinCustomizationSkinFilenameGet($skin, $filename);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SkinCustomizationApi->apiSessionSkinCustomizationSkinFilenameGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **skin** | **string**| Skin&#39;s name | |
| **filename** | **string**| Skin customization file name | |

### Return type

**\SplFileObject**

### Authorization

[DaBasicAuth](../../README.md#DaBasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/octet-stream`, `image/png`, `image/jpeg`, `image/gif`, `text/plain`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiSessionSkinCustomizationSkinGet()`

```php
apiSessionSkinCustomizationSkinGet($skin): \COMPITAUT\DirectAdminAPI\Model\WebSkinCustomizationsFile[]
```

Get list of active skin customizations

Get list of active skin customizations. Active inherits creators' skin customizations per user basis, meaning if creator (e.g. reseller) has any customizations, admin customizations are ignored.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\SkinCustomizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$skin = 'skin_example'; // string | Skin's name

try {
    $result = $apiInstance->apiSessionSkinCustomizationSkinGet($skin);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SkinCustomizationApi->apiSessionSkinCustomizationSkinGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **skin** | **string**| Skin&#39;s name | |

### Return type

[**\COMPITAUT\DirectAdminAPI\Model\WebSkinCustomizationsFile[]**](../Model/WebSkinCustomizationsFile.md)

### Authorization

[DaBasicAuth](../../README.md#DaBasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiSkinCustomizationSkinCreatorFilenameGet()`

```php
apiSkinCustomizationSkinCreatorFilenameGet($skin, $filename): \SplFileObject
```

Download creator's skin customization file

Download creator's skin customization file. Admin & Reseller only.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\SkinCustomizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$skin = 'skin_example'; // string | Skin's name
$filename = 'filename_example'; // string | Skin customization file name

try {
    $result = $apiInstance->apiSkinCustomizationSkinCreatorFilenameGet($skin, $filename);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SkinCustomizationApi->apiSkinCustomizationSkinCreatorFilenameGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **skin** | **string**| Skin&#39;s name | |
| **filename** | **string**| Skin customization file name | |

### Return type

**\SplFileObject**

### Authorization

[DaBasicAuth](../../README.md#DaBasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/octet-stream`, `image/png`, `image/jpeg`, `image/gif`, `text/plain`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiSkinCustomizationSkinCreatorGet()`

```php
apiSkinCustomizationSkinCreatorGet($skin): \COMPITAUT\DirectAdminAPI\Model\WebSkinCustomizationsFile[]
```

Get list of creator's skin customizations

Get list of creator's skin customizations. Admin & Reseller only.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\SkinCustomizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$skin = 'skin_example'; // string | Skin's name

try {
    $result = $apiInstance->apiSkinCustomizationSkinCreatorGet($skin);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SkinCustomizationApi->apiSkinCustomizationSkinCreatorGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **skin** | **string**| Skin&#39;s name | |

### Return type

[**\COMPITAUT\DirectAdminAPI\Model\WebSkinCustomizationsFile[]**](../Model/WebSkinCustomizationsFile.md)

### Authorization

[DaBasicAuth](../../README.md#DaBasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiSkinCustomizationSkinLocalDelete()`

```php
apiSkinCustomizationSkinLocalDelete($skin)
```

Delete all skin customization files

Delete all skin customization files. Admin & Reseller only.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\SkinCustomizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$skin = 'skin_example'; // string | Skin's name

try {
    $apiInstance->apiSkinCustomizationSkinLocalDelete($skin);
} catch (Exception $e) {
    echo 'Exception when calling SkinCustomizationApi->apiSkinCustomizationSkinLocalDelete: ', $e->getMessage(), PHP_EOL;
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

## `apiSkinCustomizationSkinLocalFilenameDelete()`

```php
apiSkinCustomizationSkinLocalFilenameDelete($skin, $filename)
```

Delete skin customization file

Delete skin customization file. Admin & Reseller only.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\SkinCustomizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$skin = 'skin_example'; // string | Skin's name
$filename = 'filename_example'; // string | Skin customization file name

try {
    $apiInstance->apiSkinCustomizationSkinLocalFilenameDelete($skin, $filename);
} catch (Exception $e) {
    echo 'Exception when calling SkinCustomizationApi->apiSkinCustomizationSkinLocalFilenameDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **skin** | **string**| Skin&#39;s name | |
| **filename** | **string**| Skin customization file name | |

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

## `apiSkinCustomizationSkinLocalFilenameGet()`

```php
apiSkinCustomizationSkinLocalFilenameGet($skin, $filename): \SplFileObject
```

Download my skin customization file

Download my skin customization file. Admin & Reseller only.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\SkinCustomizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$skin = 'skin_example'; // string | Skin's name
$filename = 'filename_example'; // string | Skin customization file name

try {
    $result = $apiInstance->apiSkinCustomizationSkinLocalFilenameGet($skin, $filename);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SkinCustomizationApi->apiSkinCustomizationSkinLocalFilenameGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **skin** | **string**| Skin&#39;s name | |
| **filename** | **string**| Skin customization file name | |

### Return type

**\SplFileObject**

### Authorization

[DaBasicAuth](../../README.md#DaBasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/octet-stream`, `image/png`, `image/jpeg`, `image/gif`, `text/plain`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiSkinCustomizationSkinLocalFilenamePut()`

```php
apiSkinCustomizationSkinLocalFilenamePut($skin, $filename, $body)
```

Upload skin customization file (overwrites if exists)

Upload skin customization file (overwrites if exists). Admin & Reseller only.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\SkinCustomizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$skin = 'skin_example'; // string | Skin's name
$filename = 'filename_example'; // string | Skin customization file name
$body = 'body_example'; // string | Skin customization file binary

try {
    $apiInstance->apiSkinCustomizationSkinLocalFilenamePut($skin, $filename, $body);
} catch (Exception $e) {
    echo 'Exception when calling SkinCustomizationApi->apiSkinCustomizationSkinLocalFilenamePut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **skin** | **string**| Skin&#39;s name | |
| **filename** | **string**| Skin customization file name | |
| **body** | **string**| Skin customization file binary | |

### Return type

void (empty response body)

### Authorization

[DaBasicAuth](../../README.md#DaBasicAuth)

### HTTP request headers

- **Content-Type**: `application/octet-stream`, `image/png`, `image/jpeg`, `image/gif`, `text/plain`, `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiSkinCustomizationSkinLocalGet()`

```php
apiSkinCustomizationSkinLocalGet($skin): \COMPITAUT\DirectAdminAPI\Model\WebSkinCustomizationsFile[]
```

Get list of my skin customizations

Get list of my skin customizations. Admin & Reseller only.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\SkinCustomizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$skin = 'skin_example'; // string | Skin's name

try {
    $result = $apiInstance->apiSkinCustomizationSkinLocalGet($skin);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SkinCustomizationApi->apiSkinCustomizationSkinLocalGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **skin** | **string**| Skin&#39;s name | |

### Return type

[**\COMPITAUT\DirectAdminAPI\Model\WebSkinCustomizationsFile[]**](../Model/WebSkinCustomizationsFile.md)

### Authorization

[DaBasicAuth](../../README.md#DaBasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiSkinCustomizationSkinLocalPost()`

```php
apiSkinCustomizationSkinLocalPost($skin, $)
```

Upload skin customization file (overwrites if exists)

This endpoint allows uploading multiple skin customization files using standard multipart/form-data encoding. Form field names are ignored, only file-names associated with file upload is used when storing the file. Admin & Reseller only.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\SkinCustomizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$skin = 'skin_example'; // string | Skin's name
$ = '/path/to/file.txt'; // \SplFileObject | Skin customization file

try {
    $apiInstance->apiSkinCustomizationSkinLocalPost($skin, $);
} catch (Exception $e) {
    echo 'Exception when calling SkinCustomizationApi->apiSkinCustomizationSkinLocalPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **skin** | **string**| Skin&#39;s name | |
| **** | **\SplFileObject****\SplFileObject**| Skin customization file | |

### Return type

void (empty response body)

### Authorization

[DaBasicAuth](../../README.md#DaBasicAuth)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
