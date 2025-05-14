# COMPITAUT\DirectAdminAPI\VacationApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiEmailvacationDomainGet()**](VacationApi.md#apiEmailvacationDomainGet) | **GET** /api/emailvacation/{domain} | List vacation schedules for all mail users in domain |
| [**apiEmailvacationDomainUserDelete()**](VacationApi.md#apiEmailvacationDomainUserDelete) | **DELETE** /api/emailvacation/{domain}/{user} | delete vacation configuration for user. |
| [**apiEmailvacationDomainUserGet()**](VacationApi.md#apiEmailvacationDomainUserGet) | **GET** /api/emailvacation/{domain}/{user} | List detailed vacation configuration for user. |
| [**apiEmailvacationDomainUserPut()**](VacationApi.md#apiEmailvacationDomainUserPut) | **PUT** /api/emailvacation/{domain}/{user} | create or modify vacation configuration for user. |


## `apiEmailvacationDomainGet()`

```php
apiEmailvacationDomainGet($domain): array<string,\COMPITAUT\DirectAdminAPI\Model\WebEmailVacation>
```

List vacation schedules for all mail users in domain

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\VacationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = 'domain_example'; // string | Domain

try {
    $result = $apiInstance->apiEmailvacationDomainGet($domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VacationApi->apiEmailvacationDomainGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**| Domain | |

### Return type

[**array<string,\COMPITAUT\DirectAdminAPI\Model\WebEmailVacation>**](../Model/WebEmailVacation.md)

### Authorization

[DaBasicAuth](../../README.md#DaBasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiEmailvacationDomainUserDelete()`

```php
apiEmailvacationDomainUserDelete($domain, $user)
```

delete vacation configuration for user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\VacationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = 'domain_example'; // string | Domain
$user = 'user_example'; // string | Email user

try {
    $apiInstance->apiEmailvacationDomainUserDelete($domain, $user);
} catch (Exception $e) {
    echo 'Exception when calling VacationApi->apiEmailvacationDomainUserDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**| Domain | |
| **user** | **string**| Email user | |

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

## `apiEmailvacationDomainUserGet()`

```php
apiEmailvacationDomainUserGet($domain, $user): \COMPITAUT\DirectAdminAPI\Model\WebEmailVacationDetail
```

List detailed vacation configuration for user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\VacationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = 'domain_example'; // string | Domain
$user = 'user_example'; // string | Email user

try {
    $result = $apiInstance->apiEmailvacationDomainUserGet($domain, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VacationApi->apiEmailvacationDomainUserGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**| Domain | |
| **user** | **string**| Email user | |

### Return type

[**\COMPITAUT\DirectAdminAPI\Model\WebEmailVacationDetail**](../Model/WebEmailVacationDetail.md)

### Authorization

[DaBasicAuth](../../README.md#DaBasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiEmailvacationDomainUserPut()`

```php
apiEmailvacationDomainUserPut($domain, $user, $details)
```

create or modify vacation configuration for user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: DaBasicAuth
$config = COMPITAUT\DirectAdminAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new COMPITAUT\DirectAdminAPI\Api\VacationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = 'domain_example'; // string | Domain
$user = 'user_example'; // string | Email user
$details = new \COMPITAUT\DirectAdminAPI\Model\WebEmailVacationDetail(); // \COMPITAUT\DirectAdminAPI\Model\WebEmailVacationDetail | Email user

try {
    $apiInstance->apiEmailvacationDomainUserPut($domain, $user, $details);
} catch (Exception $e) {
    echo 'Exception when calling VacationApi->apiEmailvacationDomainUserPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**| Domain | |
| **user** | **string**| Email user | |
| **details** | [**\COMPITAUT\DirectAdminAPI\Model\WebEmailVacationDetail**](../Model/WebEmailVacationDetail.md)| Email user | |

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
