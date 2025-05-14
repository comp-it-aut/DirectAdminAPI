# COMPITAUT\DirectAdminAPI\ModsecurityApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiModsecurityAuditLogEntryGet()**](ModsecurityApi.md#apiModsecurityAuditLogEntryGet) | **GET** /api/modsecurity-audit-log/entry | get unparsed log entry with the given refence |
| [**apiModsecurityAuditLogSummaryGet()**](ModsecurityApi.md#apiModsecurityAuditLogSummaryGet) | **GET** /api/modsecurity-audit-log/summary | Read and parse modsecurity audit log |


## `apiModsecurityAuditLogEntryGet()`

```php
apiModsecurityAuditLogEntryGet($reference): object
```

get unparsed log entry with the given refence

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\ModsecurityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$reference = 'reference_example'; // string | reference string provided by `web.auditEntry`

try {
    $result = $apiInstance->apiModsecurityAuditLogEntryGet($reference);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModsecurityApi->apiModsecurityAuditLogEntryGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **reference** | **string**| reference string provided by &#x60;web.auditEntry&#x60; | |

### Return type

**object**

### Authorization

[DaBasicAuth](../../README.md#DaBasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiModsecurityAuditLogSummaryGet()`

```php
apiModsecurityAuditLogSummaryGet($lines, $domains): \COMPITAUT\DirectAdminAPI\Model\WebAuditEntry[]
```

Read and parse modsecurity audit log

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\ModsecurityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$lines = 56; // int | number of rows wanted
$domains = array('domains_example'); // string[] | Show results for the given domains only

try {
    $result = $apiInstance->apiModsecurityAuditLogSummaryGet($lines, $domains);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModsecurityApi->apiModsecurityAuditLogSummaryGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **lines** | **int**| number of rows wanted | [optional] |
| **domains** | [**string[]**](../Model/string.md)| Show results for the given domains only | [optional] |

### Return type

[**\COMPITAUT\DirectAdminAPI\Model\WebAuditEntry[]**](../Model/WebAuditEntry.md)

### Authorization

[DaBasicAuth](../../README.md#DaBasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
