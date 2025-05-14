# COMPITAUT\DirectAdminAPI\SkinTranslationsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiSkinTranslationSkinLangGet()**](SkinTranslationsApi.md#apiSkinTranslationSkinLangGet) | **GET** /api/skin-translation/{skin}/{lang} | Skin translations by a language code |


## `apiSkinTranslationSkinLangGet()`

```php
apiSkinTranslationSkinLangGet($skin, $lang): array<string,mixed>
```

Skin translations by a language code

Get main skin translations merged with custom translations in JSON format following vue-gettext PO to JSON conversion rules.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new COMPITAUT\DirectAdminAPI\Api\SkinTranslationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$skin = 'skin_example'; // string | Skin's name
$lang = 'lang_example'; // string | Language code

try {
    $result = $apiInstance->apiSkinTranslationSkinLangGet($skin, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SkinTranslationsApi->apiSkinTranslationSkinLangGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **skin** | **string**| Skin&#39;s name | |
| **lang** | **string**| Language code | |

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
