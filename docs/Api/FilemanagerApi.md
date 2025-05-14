# COMPITAUT\DirectAdminAPI\FilemanagerApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiFilemanagerDiskUsageGet()**](FilemanagerApi.md#apiFilemanagerDiskUsageGet) | **GET** /api/filemanager/disk-usage | Disk usage. |
| [**apiFilemanagerDownloadGet()**](FilemanagerApi.md#apiFilemanagerDownloadGet) | **GET** /api/filemanager/download | Download file. |
| [**apiFilemanagerListGet()**](FilemanagerApi.md#apiFilemanagerListGet) | **GET** /api/filemanager/list | List directory contents. |
| [**apiFilemanagerMetadataGet()**](FilemanagerApi.md#apiFilemanagerMetadataGet) | **GET** /api/filemanager/metadata | File metadata. |
| [**apiFilemanagerTreeGet()**](FilemanagerApi.md#apiFilemanagerTreeGet) | **GET** /api/filemanager/tree | Directories tree. |
| [**apiFilemanagerUploadPost()**](FilemanagerApi.md#apiFilemanagerUploadPost) | **POST** /api/filemanager/upload | Upload file. |


## `apiFilemanagerDiskUsageGet()`

```php
apiFilemanagerDiskUsageGet($path): \COMPITAUT\DirectAdminAPI\Model\WebFmDiskUsageResponse
```

Disk usage.

Get disk usage about a file or a directory.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\FilemanagerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$path = '/'; // string | File path, chrooted to user's home dir.

try {
    $result = $apiInstance->apiFilemanagerDiskUsageGet($path);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilemanagerApi->apiFilemanagerDiskUsageGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **path** | **string**| File path, chrooted to user&#39;s home dir. | [optional] [default to &#39;/&#39;] |

### Return type

[**\COMPITAUT\DirectAdminAPI\Model\WebFmDiskUsageResponse**](../Model/WebFmDiskUsageResponse.md)

### Authorization

[DaBasicAuth](../../README.md#DaBasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiFilemanagerDownloadGet()`

```php
apiFilemanagerDownloadGet($path): \SplFileObject
```

Download file.

Download content of a regular file from the system.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\FilemanagerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$path = '/'; // string | File path, chrooted to user's home dir.

try {
    $result = $apiInstance->apiFilemanagerDownloadGet($path);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilemanagerApi->apiFilemanagerDownloadGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **path** | **string**| File path, chrooted to user&#39;s home dir. | [optional] [default to &#39;/&#39;] |

### Return type

**\SplFileObject**

### Authorization

[DaBasicAuth](../../README.md#DaBasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiFilemanagerListGet()`

```php
apiFilemanagerListGet($path, $query, $limit, $offset): \COMPITAUT\DirectAdminAPI\Model\WebFmListResponse
```

List directory contents.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\FilemanagerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$path = '/'; // string | Directory path, chrooted to user's home dir.
$query = 'query_example'; // string | File name query.
$limit = 1000; // int | Files limit (0 disables it).
$offset = 0; // int | Files offset.

try {
    $result = $apiInstance->apiFilemanagerListGet($path, $query, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilemanagerApi->apiFilemanagerListGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **path** | **string**| Directory path, chrooted to user&#39;s home dir. | [optional] [default to &#39;/&#39;] |
| **query** | **string**| File name query. | [optional] |
| **limit** | **int**| Files limit (0 disables it). | [optional] [default to 1000] |
| **offset** | **int**| Files offset. | [optional] [default to 0] |

### Return type

[**\COMPITAUT\DirectAdminAPI\Model\WebFmListResponse**](../Model/WebFmListResponse.md)

### Authorization

[DaBasicAuth](../../README.md#DaBasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiFilemanagerMetadataGet()`

```php
apiFilemanagerMetadataGet($path): \COMPITAUT\DirectAdminAPI\Model\WebFmMetadataResponse
```

File metadata.

Get data about any type of file in the system.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\FilemanagerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$path = '/'; // string | File path, chrooted to user's home dir.

try {
    $result = $apiInstance->apiFilemanagerMetadataGet($path);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilemanagerApi->apiFilemanagerMetadataGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **path** | **string**| File path, chrooted to user&#39;s home dir. | [optional] [default to &#39;/&#39;] |

### Return type

[**\COMPITAUT\DirectAdminAPI\Model\WebFmMetadataResponse**](../Model/WebFmMetadataResponse.md)

### Authorization

[DaBasicAuth](../../README.md#DaBasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiFilemanagerTreeGet()`

```php
apiFilemanagerTreeGet($path, $depth, $filelimit, $rooted): \COMPITAUT\DirectAdminAPI\Model\WebFmTreeResponse
```

Directories tree.

Get directories and symlinks pointing to directories tree. Symlinks that point to directories are not followed any further. Directories marked with `incomplete` flag report that directory wasn't fully traversed, this could happen due to either `rooted` or `filelimit` query params.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\FilemanagerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$path = '/'; // string | Directory path, chrooted to user's home dir.
$depth = 1; // int | Tree depth limit (0 disables it).
$filelimit = 1000; // int | Directory files limit: directories that exceed this limit are not traversed (0 disables it).
$rooted = True; // bool | Return a full tree starting from root, with directories before path marked with `incomplete` flag.

try {
    $result = $apiInstance->apiFilemanagerTreeGet($path, $depth, $filelimit, $rooted);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilemanagerApi->apiFilemanagerTreeGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **path** | **string**| Directory path, chrooted to user&#39;s home dir. | [optional] [default to &#39;/&#39;] |
| **depth** | **int**| Tree depth limit (0 disables it). | [optional] [default to 1] |
| **filelimit** | **int**| Directory files limit: directories that exceed this limit are not traversed (0 disables it). | [optional] [default to 1000] |
| **rooted** | **bool**| Return a full tree starting from root, with directories before path marked with &#x60;incomplete&#x60; flag. | [optional] |

### Return type

[**\COMPITAUT\DirectAdminAPI\Model\WebFmTreeResponse**](../Model/WebFmTreeResponse.md)

### Authorization

[DaBasicAuth](../../README.md#DaBasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiFilemanagerUploadPost()`

```php
apiFilemanagerUploadPost($path, $body, $perm)
```

Upload file.

Upload file to the system.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\FilemanagerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$path = 'path_example'; // string | File path, chrooted to user's home dir.
$body = 'body_example'; // string | File content.
$perm = 56; // int | File permissions in decimal format (if omitted, defaults according to umask).

try {
    $apiInstance->apiFilemanagerUploadPost($path, $body, $perm);
} catch (Exception $e) {
    echo 'Exception when calling FilemanagerApi->apiFilemanagerUploadPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **path** | **string**| File path, chrooted to user&#39;s home dir. | |
| **body** | **string**| File content. | |
| **perm** | **int**| File permissions in decimal format (if omitted, defaults according to umask). | [optional] |

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
