# SteamTrades\TradeApi

All URIs are relative to *https://steamtrad.es/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**gameGet**](TradeApi.md#gameGet) | **GET** /game/ | List supported games
[**gameIdGet**](TradeApi.md#gameIdGet) | **GET** /game/{id}/ | Info about a game
[**itemMineGet**](TradeApi.md#itemMineGet) | **GET** /item/mine/ | List owned items
[**itemScanUserInventoryPost**](TradeApi.md#itemScanUserInventoryPost) | **POST** /item/scan_user_inventory/ | Scan Steam user inventory
[**itemUserInventoryGet**](TradeApi.md#itemUserInventoryGet) | **GET** /item/user_inventory/ | Get inventory scan results
[**tradeGet**](TradeApi.md#tradeGet) | **GET** /trade/ | List your trades
[**tradeIdGet**](TradeApi.md#tradeIdGet) | **GET** /trade/{id}/ | Get trade status
[**tradeRequestItemsPost**](TradeApi.md#tradeRequestItemsPost) | **POST** /trade/request_items/ | Request items
[**tradeSendItemsPost**](TradeApi.md#tradeSendItemsPost) | **POST** /trade/send_items/ | Send items
[**tradeTransferItemsPost**](TradeApi.md#tradeTransferItemsPost) | **POST** /trade/transfer_items/ | Transfer items
[**userInfoBySteamIdGet**](TradeApi.md#userInfoBySteamIdGet) | **GET** /user/info_by_steam_id/ | Steam user info by Steam ID
[**userInfoByTradeUrlGet**](TradeApi.md#userInfoByTradeUrlGet) | **GET** /user/info_by_trade_url/ | Steam user info by trade URL


# **gameGet**
> \SteamTrades\Models\Game[] gameGet()

List supported games

Obtains a list of all supported games.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
SteamTrades\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// SteamTrades\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new SteamTrades\Api\TradeApi();

try {
    $result = $api_instance->gameGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->gameGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\SteamTrades\Models\Game[]**](../Model/Game.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **gameIdGet**
> \SteamTrades\Models\Game gameIdGet($id)

Info about a game

Obtains information about a single supported game.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
SteamTrades\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// SteamTrades\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new SteamTrades\Api\TradeApi();
$id = "id_example"; // string | Game ID (e.g. 730 for CS:GO).

try {
    $result = $api_instance->gameIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->gameIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Game ID (e.g. 730 for CS:GO). |

### Return type

[**\SteamTrades\Models\Game**](../Model/Game.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **itemMineGet**
> \SteamTrades\Models\InlineResponse200 itemMineGet($context_id, $offset, $limit)

List owned items

Queries the list of items owned by you.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
SteamTrades\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// SteamTrades\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new SteamTrades\Api\TradeApi();
$context_id = "context_id_example"; // string | Inventory context ID for filtering.
$offset = 0; // int | Offset to start listing
$limit = 250; // int | Number of trades to retrieve

try {
    $result = $api_instance->itemMineGet($context_id, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->itemMineGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **context_id** | **string**| Inventory context ID for filtering. | [optional]
 **offset** | **int**| Offset to start listing | [optional] [default to 0]
 **limit** | **int**| Number of trades to retrieve | [optional] [default to 250]

### Return type

[**\SteamTrades\Models\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **itemScanUserInventoryPost**
> \SteamTrades\Models\InlineResponse2001 itemScanUserInventoryPost($trade_url, $context_id, $force_refresh)

Scan Steam user inventory

Queries information about the inventory scan state of a Steam user. If no scan is in progress and if there are no previous scans or all previous scans are invalid, a new scan is queued. Scans are considered invalid if they are outdated, if `force_refresh` was passed or is they simply do not exist, yet.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
SteamTrades\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// SteamTrades\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new SteamTrades\Api\TradeApi();
$trade_url = "trade_url_example"; // string | Trade URL of the target user.
$context_id = "context_id_example"; // string | Inventory context ID to retrieve items for.
$force_refresh = true; // bool | Do not use cached info (if exists), force rescan.

try {
    $result = $api_instance->itemScanUserInventoryPost($trade_url, $context_id, $force_refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->itemScanUserInventoryPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **trade_url** | **string**| Trade URL of the target user. |
 **context_id** | **string**| Inventory context ID to retrieve items for. |
 **force_refresh** | **bool**| Do not use cached info (if exists), force rescan. | [optional]

### Return type

[**\SteamTrades\Models\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **itemUserInventoryGet**
> \SteamTrades\Models\ScannedItem[] itemUserInventoryGet($trade_url, $context_id)

Get inventory scan results

Queries the cached list of items owned by a Steam user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
SteamTrades\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// SteamTrades\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new SteamTrades\Api\TradeApi();
$trade_url = "trade_url_example"; // string | Trade URL of the target user.
$context_id = "context_id_example"; // string | Inventory context ID to retrieve items for.

try {
    $result = $api_instance->itemUserInventoryGet($trade_url, $context_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->itemUserInventoryGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **trade_url** | **string**| Trade URL of the target user. |
 **context_id** | **string**| Inventory context ID to retrieve items for. |

### Return type

[**\SteamTrades\Models\ScannedItem[]**](../Model/ScannedItem.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **tradeGet**
> \SteamTrades\Models\InlineResponse2002 tradeGet($filter_ids, $offset, $limit)

List your trades

Queries a list of your trades, oldest trades first.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
SteamTrades\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// SteamTrades\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new SteamTrades\Api\TradeApi();
$filter_ids = array("filter_ids_example"); // string[] | If passed, returns only trades with given IDs
$offset = 0; // int | Offset to start listing
$limit = 250; // int | Number of trades to retrieve

try {
    $result = $api_instance->tradeGet($filter_ids, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->tradeGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter_ids** | [**string[]**](../Model/string.md)| If passed, returns only trades with given IDs | [optional]
 **offset** | **int**| Offset to start listing | [optional] [default to 0]
 **limit** | **int**| Number of trades to retrieve | [optional] [default to 250]

### Return type

[**\SteamTrades\Models\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **tradeIdGet**
> \SteamTrades\Models\Trade tradeIdGet($id)

Get trade status

Queries the status of a previously initiated trade.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
SteamTrades\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// SteamTrades\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new SteamTrades\Api\TradeApi();
$id = "id_example"; // string | Trade ID to query information for.

try {
    $result = $api_instance->tradeIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->tradeIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Trade ID to query information for. |

### Return type

[**\SteamTrades\Models\Trade**](../Model/Trade.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **tradeRequestItemsPost**
> \SteamTrades\Models\InlineResponse2003 tradeRequestItemsPost($trade_url, $context_id, $asset_ids, $message)

Request items

Sends a trade offer to a Steam user requesting items.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
SteamTrades\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// SteamTrades\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new SteamTrades\Api\TradeApi();
$trade_url = "trade_url_example"; // string | Trade URL of the user to request items from.
$context_id = "context_id_example"; // string | The context ID the asset IDs belong to.
$asset_ids = array("asset_ids_example"); // string[] | Steam asset IDs of the items to request, separated by commas.
$message = "message_example"; // string | Message sent with this trade. You may use `{verify_url}` to define where the trade verification URL is inserted. If `{verify_url}` isn't used, the URL is just appended. You message is limited to 65 characters (excluding URL).

try {
    $result = $api_instance->tradeRequestItemsPost($trade_url, $context_id, $asset_ids, $message);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->tradeRequestItemsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **trade_url** | **string**| Trade URL of the user to request items from. |
 **context_id** | **string**| The context ID the asset IDs belong to. |
 **asset_ids** | [**string[]**](../Model/string.md)| Steam asset IDs of the items to request, separated by commas. |
 **message** | **string**| Message sent with this trade. You may use &#x60;{verify_url}&#x60; to define where the trade verification URL is inserted. If &#x60;{verify_url}&#x60; isn&#39;t used, the URL is just appended. You message is limited to 65 characters (excluding URL). | [optional]

### Return type

[**\SteamTrades\Models\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **tradeSendItemsPost**
> \SteamTrades\Models\InlineResponse2005 tradeSendItemsPost($trade_url, $items, $message)

Send items

Sends a trade offer to a Steam user offering a list of your items.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
SteamTrades\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// SteamTrades\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new SteamTrades\Api\TradeApi();
$trade_url = "trade_url_example"; // string | Trade URL of the user to send items to.
$items = array("items_example"); // string[] | IDs of the items to send, separated by commas.
$message = "message_example"; // string | Message sent with this trade. You may use `{verify_url}` to define where the trade verification URL is inserted. If `{verify_url}` isn't used, the URL is just appended. You message is limited to 65 characters (excluding URL).

try {
    $result = $api_instance->tradeSendItemsPost($trade_url, $items, $message);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->tradeSendItemsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **trade_url** | **string**| Trade URL of the user to send items to. |
 **items** | [**string[]**](../Model/string.md)| IDs of the items to send, separated by commas. |
 **message** | **string**| Message sent with this trade. You may use &#x60;{verify_url}&#x60; to define where the trade verification URL is inserted. If &#x60;{verify_url}&#x60; isn&#39;t used, the URL is just appended. You message is limited to 65 characters (excluding URL). | [optional]

### Return type

[**\SteamTrades\Models\InlineResponse2005**](../Model/InlineResponse2005.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **tradeTransferItemsPost**
> \SteamTrades\Models\InlineResponse2004 tradeTransferItemsPost($items, $dst_app_id, $allow_foreign_dst, $move_physically)

Transfer items

Transfers items from this app to another (SteamTrades internal transfer). Other than trades with Steam users, these \"trades\" are performed instantly and no actual trade object is created unless when you using `move_physically`, which, when required, creates a regular trade.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
SteamTrades\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// SteamTrades\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new SteamTrades\Api\TradeApi();
$items = array("items_example"); // string[] | IDs of the items to transfer, separated by commas.
$dst_app_id = 56; // int | ID of the app receiving the items.
$allow_foreign_dst = false; // bool | Whether to allow transfer to apps of other users.
$move_physically = false; // bool | Whether to physically move the item to bots of the destination app (in case either the source or destination app, or both, have dedicated bots). Items are only moved phisically if this is required because source and destination app have different storage locations. All items that are in the physical trade (and thus not moved instantly) are listed in `items_in_trade`.

try {
    $result = $api_instance->tradeTransferItemsPost($items, $dst_app_id, $allow_foreign_dst, $move_physically);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->tradeTransferItemsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **items** | [**string[]**](../Model/string.md)| IDs of the items to transfer, separated by commas. |
 **dst_app_id** | **int**| ID of the app receiving the items. |
 **allow_foreign_dst** | **bool**| Whether to allow transfer to apps of other users. | [optional] [default to false]
 **move_physically** | **bool**| Whether to physically move the item to bots of the destination app (in case either the source or destination app, or both, have dedicated bots). Items are only moved phisically if this is required because source and destination app have different storage locations. All items that are in the physical trade (and thus not moved instantly) are listed in &#x60;items_in_trade&#x60;. | [optional] [default to false]

### Return type

[**\SteamTrades\Models\InlineResponse2004**](../Model/InlineResponse2004.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userInfoBySteamIdGet**
> \SteamTrades\Models\UserInfo userInfoBySteamIdGet($steam_id, $force_refresh)

Steam user info by Steam ID

Queries information about a Steam user, by its Steam ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
SteamTrades\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// SteamTrades\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new SteamTrades\Api\TradeApi();
$steam_id = "steam_id_example"; // string | Steam ID (64-bit) of the target user.
$force_refresh = true; // bool | Don't use cached results, force refresh. Defaults to `false`.

try {
    $result = $api_instance->userInfoBySteamIdGet($steam_id, $force_refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->userInfoBySteamIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **steam_id** | **string**| Steam ID (64-bit) of the target user. |
 **force_refresh** | **bool**| Don&#39;t use cached results, force refresh. Defaults to &#x60;false&#x60;. | [optional]

### Return type

[**\SteamTrades\Models\UserInfo**](../Model/UserInfo.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userInfoByTradeUrlGet**
> \SteamTrades\Models\UserInfo userInfoByTradeUrlGet($trade_url, $force_refresh)

Steam user info by trade URL

Queries information about a Steam user, by its trade URL.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
SteamTrades\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// SteamTrades\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new SteamTrades\Api\TradeApi();
$trade_url = "trade_url_example"; // string | Trade URL of the target user.
$force_refresh = true; // bool | Don't use cached results, force refresh. Defaults to `false`.

try {
    $result = $api_instance->userInfoByTradeUrlGet($trade_url, $force_refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->userInfoByTradeUrlGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **trade_url** | **string**| Trade URL of the target user. |
 **force_refresh** | **bool**| Don&#39;t use cached results, force refresh. Defaults to &#x60;false&#x60;. | [optional]

### Return type

[**\SteamTrades\Models\UserInfo**](../Model/UserInfo.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

