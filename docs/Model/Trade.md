# Trade

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Our internal ID uniquely identifying this trade | 
**status** | **string** |  | 
**message** | **string** | Message sent with this trade. | 
**initiation_time** | [**\DateTime**](\DateTime.md) | Timestamp the trade was initiated | 
**completion_time** | [**\DateTime**](\DateTime.md) | Timestamp the trade was completed or blank if not yet completed | 
**tradeoffer_url** | **string** | The URL to the tradeoffer sent to the trade partner. Only set if the trade is in &#x60;in_progress&#x60; state, else absent. | 
**denial_reason** | **string** | If trade status is &#x60;denied&#x60;, the reason why the trade was denied, else absent. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


