# COMPITAUT\DirectAdminAPI\EmailApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiEmailConfigMobileconfigGet()**](EmailApi.md#apiEmailConfigMobileconfigGet) | **GET** /api/email-config/mobileconfig | Download Apple Mail Configuration Profile |
| [**apiEmailLogsGet()**](EmailApi.md#apiEmailLogsGet) | **GET** /api/email-logs | Get email logs |
| [**apiEmailLogsSummaryGet()**](EmailApi.md#apiEmailLogsSummaryGet) | **GET** /api/email-logs-summary | Get emails log summary |


## `apiEmailConfigMobileconfigGet()`

```php
apiEmailConfigMobileconfigGet($email, $format)
```

Download Apple Mail Configuration Profile

Installing the Configuration Profile will setup mail account on an Apple device.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new COMPITAUT\DirectAdminAPI\Api\EmailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$email = 'email_example'; // string | Email address.
$format = 'format_example'; // string | Configuration Profile encoding format.

try {
    $apiInstance->apiEmailConfigMobileconfigGet($email, $format);
} catch (Exception $e) {
    echo 'Exception when calling EmailApi->apiEmailConfigMobileconfigGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **email** | **string**| Email address. | |
| **format** | **string**| Configuration Profile encoding format. | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/x-apple-aspen-config`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiEmailLogsGet()`

```php
apiEmailLogsGet($from, $to, $address, $domain, $state, $type): \COMPITAUT\DirectAdminAPI\Model\WebEmailLogResponse
```

Get email logs

Get structured info about emails from logs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\EmailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Time frame start.
$to = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Time frame end (defaults to 1 day).
$address = 'address_example'; // string | Addresses filter.
$domain = 'domain_example'; // string | Domains filter.
$state = 'state_example'; // string | Email state filter.
$type = 'type_example'; // string | Mail type (direction) filter.

try {
    $result = $apiInstance->apiEmailLogsGet($from, $to, $address, $domain, $state, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailApi->apiEmailLogsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **from** | **\DateTime**| Time frame start. | |
| **to** | **\DateTime**| Time frame end (defaults to 1 day). | [optional] |
| **address** | **string**| Addresses filter. | [optional] |
| **domain** | **string**| Domains filter. | [optional] |
| **state** | **string**| Email state filter. | [optional] |
| **type** | **string**| Mail type (direction) filter. | [optional] |

### Return type

[**\COMPITAUT\DirectAdminAPI\Model\WebEmailLogResponse**](../Model/WebEmailLogResponse.md)

### Authorization

[DaBasicAuth](../../README.md#DaBasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiEmailLogsSummaryGet()`

```php
apiEmailLogsSummaryGet($from, $to): \COMPITAUT\DirectAdminAPI\Model\WebEmailLogsSummary[]
```

Get emails log summary

Get summarized emails in time frame.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\EmailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Time frame start.
$to = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Time frame end (defaults to 1 day).

try {
    $result = $apiInstance->apiEmailLogsSummaryGet($from, $to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailApi->apiEmailLogsSummaryGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **from** | **\DateTime**| Time frame start. | |
| **to** | **\DateTime**| Time frame end (defaults to 1 day). | [optional] |

### Return type

[**\COMPITAUT\DirectAdminAPI\Model\WebEmailLogsSummary[]**](../Model/WebEmailLogsSummary.md)

### Authorization

[DaBasicAuth](../../README.md#DaBasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
