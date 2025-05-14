# COMPITAUT\DirectAdminAPI\TLSApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiServerTlsAcmeConfigGet()**](TLSApi.md#apiServerTlsAcmeConfigGet) | **GET** /api/server-tls/acme-config | Get main server&#39;s TLS ACME configuration |
| [**apiServerTlsAcmeConfigPut()**](TLSApi.md#apiServerTlsAcmeConfigPut) | **PUT** /api/server-tls/acme-config | Set main server&#39;s TLS ACME configuration |
| [**apiServerTlsCertificateGet()**](TLSApi.md#apiServerTlsCertificateGet) | **GET** /api/server-tls/certificate | Get main server&#39;s TLS certificate |
| [**apiServerTlsEnablePost()**](TLSApi.md#apiServerTlsEnablePost) | **POST** /api/server-tls/enable | Enable SSL for main server |
| [**apiServerTlsFilesGet()**](TLSApi.md#apiServerTlsFilesGet) | **GET** /api/server-tls/files | Retrieve server TLS certificates |
| [**apiServerTlsFilesPut()**](TLSApi.md#apiServerTlsFilesPut) | **PUT** /api/server-tls/files | Replace server TLS certificates |
| [**apiServerTlsObtainPost()**](TLSApi.md#apiServerTlsObtainPost) | **POST** /api/server-tls/obtain | Queues action to force obtain TLS certificate for main server |
| [**apiServerTlsStatusGet()**](TLSApi.md#apiServerTlsStatusGet) | **GET** /api/server-tls/status | Get main server&#39;s TLS certificate status |


## `apiServerTlsAcmeConfigGet()`

```php
apiServerTlsAcmeConfigGet(): \COMPITAUT\DirectAdminAPI\Model\WebAcmeConfig
```

Get main server's TLS ACME configuration

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\TLSApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->apiServerTlsAcmeConfigGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TLSApi->apiServerTlsAcmeConfigGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\COMPITAUT\DirectAdminAPI\Model\WebAcmeConfig**](../Model/WebAcmeConfig.md)

### Authorization

[DaBasicAuth](../../README.md#DaBasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiServerTlsAcmeConfigPut()`

```php
apiServerTlsAcmeConfigPut($data)
```

Set main server's TLS ACME configuration

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\TLSApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$data = new \COMPITAUT\DirectAdminAPI\Model\WebAcmeConfig(); // \COMPITAUT\DirectAdminAPI\Model\WebAcmeConfig | Request Data

try {
    $apiInstance->apiServerTlsAcmeConfigPut($data);
} catch (Exception $e) {
    echo 'Exception when calling TLSApi->apiServerTlsAcmeConfigPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **data** | [**\COMPITAUT\DirectAdminAPI\Model\WebAcmeConfig**](../Model/WebAcmeConfig.md)| Request Data | |

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

## `apiServerTlsCertificateGet()`

```php
apiServerTlsCertificateGet(): \COMPITAUT\DirectAdminAPI\Model\WebServerTLSCertificate
```

Get main server's TLS certificate

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\TLSApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->apiServerTlsCertificateGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TLSApi->apiServerTlsCertificateGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\COMPITAUT\DirectAdminAPI\Model\WebServerTLSCertificate**](../Model/WebServerTLSCertificate.md)

### Authorization

[DaBasicAuth](../../README.md#DaBasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiServerTlsEnablePost()`

```php
apiServerTlsEnablePost($force)
```

Enable SSL for main server

Enables SSL and restarts main directadmin panel's server.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\TLSApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$force = True; // bool | Force enable SSL.

try {
    $apiInstance->apiServerTlsEnablePost($force);
} catch (Exception $e) {
    echo 'Exception when calling TLSApi->apiServerTlsEnablePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **force** | **bool**| Force enable SSL. | [optional] |

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

## `apiServerTlsFilesGet()`

```php
apiServerTlsFilesGet(): \COMPITAUT\DirectAdminAPI\Model\WebServerTLSFiles
```

Retrieve server TLS certificates

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\TLSApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->apiServerTlsFilesGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TLSApi->apiServerTlsFilesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\COMPITAUT\DirectAdminAPI\Model\WebServerTLSFiles**](../Model/WebServerTLSFiles.md)

### Authorization

[DaBasicAuth](../../README.md#DaBasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiServerTlsFilesPut()`

```php
apiServerTlsFilesPut($data, $force)
```

Replace server TLS certificates

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\TLSApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$data = new \COMPITAUT\DirectAdminAPI\Model\WebServerTLSFiles(); // \COMPITAUT\DirectAdminAPI\Model\WebServerTLSFiles | New key and certificate file contents
$force = True; // bool | Allow invalid tls certificate to be uploaded

try {
    $apiInstance->apiServerTlsFilesPut($data, $force);
} catch (Exception $e) {
    echo 'Exception when calling TLSApi->apiServerTlsFilesPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **data** | [**\COMPITAUT\DirectAdminAPI\Model\WebServerTLSFiles**](../Model/WebServerTLSFiles.md)| New key and certificate file contents | |
| **force** | **bool**| Allow invalid tls certificate to be uploaded | [optional] |

### Return type

void (empty response body)

### Authorization

[DaBasicAuth](../../README.md#DaBasicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiServerTlsObtainPost()`

```php
apiServerTlsObtainPost()
```

Queues action to force obtain TLS certificate for main server

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\TLSApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->apiServerTlsObtainPost();
} catch (Exception $e) {
    echo 'Exception when calling TLSApi->apiServerTlsObtainPost: ', $e->getMessage(), PHP_EOL;
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

## `apiServerTlsStatusGet()`

```php
apiServerTlsStatusGet(): \COMPITAUT\DirectAdminAPI\Model\WebServerTLSStatus
```

Get main server's TLS certificate status

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\TLSApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->apiServerTlsStatusGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TLSApi->apiServerTlsStatusGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\COMPITAUT\DirectAdminAPI\Model\WebServerTLSStatus**](../Model/WebServerTLSStatus.md)

### Authorization

[DaBasicAuth](../../README.md#DaBasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
