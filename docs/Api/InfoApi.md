# COMPITAUT\DirectAdminAPI\InfoApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiInfoGet()**](InfoApi.md#apiInfoGet) | **GET** /api/info | Get basic server info |
| [**apiSystemInfoCpuGet()**](InfoApi.md#apiSystemInfoCpuGet) | **GET** /api/system-info/cpu | Get system CPU |
| [**apiSystemInfoFsGet()**](InfoApi.md#apiSystemInfoFsGet) | **GET** /api/system-info/fs | Get file system space usage |
| [**apiSystemInfoLoadGet()**](InfoApi.md#apiSystemInfoLoadGet) | **GET** /api/system-info/load | Get system load |
| [**apiSystemInfoMemoryGet()**](InfoApi.md#apiSystemInfoMemoryGet) | **GET** /api/system-info/memory | Get system memory |
| [**apiSystemInfoServicesGet()**](InfoApi.md#apiSystemInfoServicesGet) | **GET** /api/system-info/services | Get system services |
| [**apiSystemInfoUptimeGet()**](InfoApi.md#apiSystemInfoUptimeGet) | **GET** /api/system-info/uptime | Get system uptime |


## `apiInfoGet()`

```php
apiInfoGet(): \COMPITAUT\DirectAdminAPI\Model\WebLoginInfo
```

Get basic server info

Fetch basic server information.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new COMPITAUT\DirectAdminAPI\Api\InfoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->apiInfoGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InfoApi->apiInfoGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\COMPITAUT\DirectAdminAPI\Model\WebLoginInfo**](../Model/WebLoginInfo.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiSystemInfoCpuGet()`

```php
apiSystemInfoCpuGet(): \COMPITAUT\DirectAdminAPI\Model\WebSystemInfoCPU
```

Get system CPU

Report server's CPU information. Can be disabled per user in `user.conf` with `sysinfo` field or adjusted globally in `directadmin.conf` with `cpu_in_system_info` field (`0` - disabled, `1` - count only, `2` - show all).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\InfoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->apiSystemInfoCpuGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InfoApi->apiSystemInfoCpuGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\COMPITAUT\DirectAdminAPI\Model\WebSystemInfoCPU**](../Model/WebSystemInfoCPU.md)

### Authorization

[DaBasicAuth](../../README.md#DaBasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiSystemInfoFsGet()`

```php
apiSystemInfoFsGet(): \COMPITAUT\DirectAdminAPI\Model\WebSystemInfoFS[]
```

Get file system space usage

Can be disabled per user in `user.conf` with `sysinfo` field or globally in `directadmin.conf` with `disk_in_system_info` field.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\InfoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->apiSystemInfoFsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InfoApi->apiSystemInfoFsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\COMPITAUT\DirectAdminAPI\Model\WebSystemInfoFS[]**](../Model/WebSystemInfoFS.md)

### Authorization

[DaBasicAuth](../../README.md#DaBasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiSystemInfoLoadGet()`

```php
apiSystemInfoLoadGet(): \COMPITAUT\DirectAdminAPI\Model\WebSystemInfoLoad
```

Get system load

Report server's last 1, 5 and 10 minutes loads. Can be disabled per user in `user.conf` with `sysinfo` field or globally in `directadmin.conf` with `load_in_system_info` field.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\InfoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->apiSystemInfoLoadGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InfoApi->apiSystemInfoLoadGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\COMPITAUT\DirectAdminAPI\Model\WebSystemInfoLoad**](../Model/WebSystemInfoLoad.md)

### Authorization

[DaBasicAuth](../../README.md#DaBasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiSystemInfoMemoryGet()`

```php
apiSystemInfoMemoryGet(): \COMPITAUT\DirectAdminAPI\Model\WebSystemInfoMemory
```

Get system memory

Report server's memory information. Can be disabled per user in `user.conf` with `sysinfo` field or globally in `directadmin.conf` with `ram_in_system_info` field.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\InfoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->apiSystemInfoMemoryGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InfoApi->apiSystemInfoMemoryGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\COMPITAUT\DirectAdminAPI\Model\WebSystemInfoMemory**](../Model/WebSystemInfoMemory.md)

### Authorization

[DaBasicAuth](../../README.md#DaBasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiSystemInfoServicesGet()`

```php
apiSystemInfoServicesGet(): \COMPITAUT\DirectAdminAPI\Model\WebSystemInfoServices
```

Get system services

Return server's used and running services information. Can be disabled per user in `user.conf` with `sysinfo` field.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\InfoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->apiSystemInfoServicesGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InfoApi->apiSystemInfoServicesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\COMPITAUT\DirectAdminAPI\Model\WebSystemInfoServices**](../Model/WebSystemInfoServices.md)

### Authorization

[DaBasicAuth](../../README.md#DaBasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiSystemInfoUptimeGet()`

```php
apiSystemInfoUptimeGet(): \COMPITAUT\DirectAdminAPI\Model\WebSystemInfoUptime
```

Get system uptime

Report server's uptime. Can be disabled per user in `user.conf` with `sysinfo` field.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\InfoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->apiSystemInfoUptimeGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InfoApi->apiSystemInfoUptimeGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\COMPITAUT\DirectAdminAPI\Model\WebSystemInfoUptime**](../Model/WebSystemInfoUptime.md)

### Authorization

[DaBasicAuth](../../README.md#DaBasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
