# COMPITAUT\DirectAdminAPI\ImapsyncApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiImapsyncExportPost()**](ImapsyncApi.md#apiImapsyncExportPost) | **POST** /api/imapsync/export | Export emails over IMAP from DirecTadmin server to external server |
| [**apiImapsyncImportPost()**](ImapsyncApi.md#apiImapsyncImportPost) | **POST** /api/imapsync/import | Import emails over IMAP from external server to DirectAdmin server |
| [**apiImapsyncMigrationsGet()**](ImapsyncApi.md#apiImapsyncMigrationsGet) | **GET** /api/imapsync/migrations | List all running imapsync migrations |
| [**apiImapsyncMigrationsIdDelete()**](ImapsyncApi.md#apiImapsyncMigrationsIdDelete) | **DELETE** /api/imapsync/migrations/{id} | Cancel imapsync migration |


## `apiImapsyncExportPost()`

```php
apiImapsyncExportPost($params)
```

Export emails over IMAP from DirecTadmin server to external server

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\ImapsyncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$params = new \COMPITAUT\DirectAdminAPI\Model\WebImapsyncExportRequest(); // \COMPITAUT\DirectAdminAPI\Model\WebImapsyncExportRequest | Export parameters

try {
    $apiInstance->apiImapsyncExportPost($params);
} catch (Exception $e) {
    echo 'Exception when calling ImapsyncApi->apiImapsyncExportPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **params** | [**\COMPITAUT\DirectAdminAPI\Model\WebImapsyncExportRequest**](../Model/WebImapsyncExportRequest.md)| Export parameters | |

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

## `apiImapsyncImportPost()`

```php
apiImapsyncImportPost($params)
```

Import emails over IMAP from external server to DirectAdmin server

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\ImapsyncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$params = new \COMPITAUT\DirectAdminAPI\Model\WebImapsyncImportRequest(); // \COMPITAUT\DirectAdminAPI\Model\WebImapsyncImportRequest | Import parameters

try {
    $apiInstance->apiImapsyncImportPost($params);
} catch (Exception $e) {
    echo 'Exception when calling ImapsyncApi->apiImapsyncImportPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **params** | [**\COMPITAUT\DirectAdminAPI\Model\WebImapsyncImportRequest**](../Model/WebImapsyncImportRequest.md)| Import parameters | |

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

## `apiImapsyncMigrationsGet()`

```php
apiImapsyncMigrationsGet(): \COMPITAUT\DirectAdminAPI\Model\WebImapsyncMigration[]
```

List all running imapsync migrations

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\ImapsyncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->apiImapsyncMigrationsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImapsyncApi->apiImapsyncMigrationsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\COMPITAUT\DirectAdminAPI\Model\WebImapsyncMigration[]**](../Model/WebImapsyncMigration.md)

### Authorization

[DaBasicAuth](../../README.md#DaBasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiImapsyncMigrationsIdDelete()`

```php
apiImapsyncMigrationsIdDelete($id)
```

Cancel imapsync migration

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\ImapsyncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Migration ID

try {
    $apiInstance->apiImapsyncMigrationsIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling ImapsyncApi->apiImapsyncMigrationsIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Migration ID | |

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
