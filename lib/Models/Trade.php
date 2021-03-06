<?php
/**
 * Trade
 *
 * PHP version 5
 *
 * @category Class
 * @package  SteamTrades
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * SteamTrades API
 *
 * API Explorer for SteamTrades' RESTful API.
 *
 * OpenAPI spec version: 1.0
 * Contact: devs@steamtrad.es
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SteamTrades\Models;

use \ArrayAccess;

/**
 * Trade Class Doc Comment
 *
 * @category    Class
 * @description Information about a user-initiated trade
 * @package     SteamTrades
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Trade implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Trade';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'status' => 'string',
        'message' => 'string',
        'initiation_time' => '\DateTime',
        'completion_time' => '\DateTime',
        'tradeoffer_url' => 'string',
        'denial_reason' => 'string'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'status' => 'status',
        'message' => 'message',
        'initiation_time' => 'initiation_time',
        'completion_time' => 'completion_time',
        'tradeoffer_url' => 'tradeoffer_url',
        'denial_reason' => 'denial_reason'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'status' => 'setStatus',
        'message' => 'setMessage',
        'initiation_time' => 'setInitiationTime',
        'completion_time' => 'setCompletionTime',
        'tradeoffer_url' => 'setTradeofferUrl',
        'denial_reason' => 'setDenialReason'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'status' => 'getStatus',
        'message' => 'getMessage',
        'initiation_time' => 'getInitiationTime',
        'completion_time' => 'getCompletionTime',
        'tradeoffer_url' => 'getTradeofferUrl',
        'denial_reason' => 'getDenialReason'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    const STATUS_PENDING = 'pending';
    const STATUS_IN_PROGRESS = 'in_progress';
    const STATUS_SUCCEEDED = 'succeeded';
    const STATUS_CANCELED = 'canceled';
    const STATUS_FAILED = 'failed';
    const STATUS_DECLINED = 'declined';
    const STATUS_TIMEOUT = 'timeout';
    const STATUS_DENIED = 'denied';
    const DENIAL_REASON_WOULD_ESCROW = 'would_escrow';
    const DENIAL_REASON_PRIVATE_INVENTORY = 'private_inventory';
    const DENIAL_REASON_MUST_NOT_TRADE = 'must_not_trade';
    const DENIAL_REASON_ITEM_GONE = 'item_gone';
    const DENIAL_REASON_INVALID_TRADE_URL = 'invalid_trade_url';
    const DENIAL_REASON_IMPOSSIBLE_ITEM_COMBINATION = 'impossible_item_combination';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_PENDING,
            self::STATUS_IN_PROGRESS,
            self::STATUS_SUCCEEDED,
            self::STATUS_CANCELED,
            self::STATUS_FAILED,
            self::STATUS_DECLINED,
            self::STATUS_TIMEOUT,
            self::STATUS_DENIED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getDenialReasonAllowableValues()
    {
        return [
            self::DENIAL_REASON_WOULD_ESCROW,
            self::DENIAL_REASON_PRIVATE_INVENTORY,
            self::DENIAL_REASON_MUST_NOT_TRADE,
            self::DENIAL_REASON_ITEM_GONE,
            self::DENIAL_REASON_INVALID_TRADE_URL,
            self::DENIAL_REASON_IMPOSSIBLE_ITEM_COMBINATION,
        ];
    }
    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['initiation_time'] = isset($data['initiation_time']) ? $data['initiation_time'] : null;
        $this->container['completion_time'] = isset($data['completion_time']) ? $data['completion_time'] : null;
        $this->container['tradeoffer_url'] = isset($data['tradeoffer_url']) ? $data['tradeoffer_url'] : null;
        $this->container['denial_reason'] = isset($data['denial_reason']) ? $data['denial_reason'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['id'] === null) {
            $invalid_properties[] = "'id' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalid_properties[] = "'status' can't be null";
        }
        $allowed_values = ["pending", "in_progress", "succeeded", "canceled", "failed", "declined", "timeout", "denied"];
        if (!in_array($this->container['status'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'status', must be one of 'pending', 'in_progress', 'succeeded', 'canceled', 'failed', 'declined', 'timeout', 'denied'.";
        }

        if ($this->container['message'] === null) {
            $invalid_properties[] = "'message' can't be null";
        }
        if ($this->container['initiation_time'] === null) {
            $invalid_properties[] = "'initiation_time' can't be null";
        }
        if ($this->container['completion_time'] === null) {
            $invalid_properties[] = "'completion_time' can't be null";
        }
        if ($this->container['tradeoffer_url'] === null) {
            $invalid_properties[] = "'tradeoffer_url' can't be null";
        }
        $allowed_values = ["would_escrow", "private_inventory", "must_not_trade", "item_gone", "invalid_trade_url", "impossible_item_combination"];
        if (!in_array($this->container['denial_reason'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'denial_reason', must be one of 'would_escrow', 'private_inventory', 'must_not_trade', 'item_gone', 'invalid_trade_url', 'impossible_item_combination'.";
        }

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if ($this->container['id'] === null) {
            return false;
        }
        if ($this->container['status'] === null) {
            return false;
        }
        $allowed_values = ["pending", "in_progress", "succeeded", "canceled", "failed", "declined", "timeout", "denied"];
        if (!in_array($this->container['status'], $allowed_values)) {
            return false;
        }
        if ($this->container['message'] === null) {
            return false;
        }
        if ($this->container['initiation_time'] === null) {
            return false;
        }
        if ($this->container['completion_time'] === null) {
            return false;
        }
        if ($this->container['tradeoffer_url'] === null) {
            return false;
        }
        $allowed_values = ["would_escrow", "private_inventory", "must_not_trade", "item_gone", "invalid_trade_url", "impossible_item_combination"];
        if (!in_array($this->container['denial_reason'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets id
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param string $id Our internal ID uniquely identifying this trade
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets status
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     * @param string $status
     * @return $this
     */
    public function setStatus($status)
    {
        $allowed_values = array('pending', 'in_progress', 'succeeded', 'canceled', 'failed', 'declined', 'timeout', 'denied');
        if ((!in_array($status, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'status', must be one of 'pending', 'in_progress', 'succeeded', 'canceled', 'failed', 'declined', 'timeout', 'denied'");
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets message
     * @return string
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     * @param string $message Message sent with this trade.
     * @return $this
     */
    public function setMessage($message)
    {
        $this->container['message'] = $message;

        return $this;
    }

    /**
     * Gets initiation_time
     * @return \DateTime
     */
    public function getInitiationTime()
    {
        return $this->container['initiation_time'];
    }

    /**
     * Sets initiation_time
     * @param \DateTime $initiation_time Timestamp the trade was initiated
     * @return $this
     */
    public function setInitiationTime($initiation_time)
    {
        $this->container['initiation_time'] = $initiation_time;

        return $this;
    }

    /**
     * Gets completion_time
     * @return \DateTime
     */
    public function getCompletionTime()
    {
        return $this->container['completion_time'];
    }

    /**
     * Sets completion_time
     * @param \DateTime $completion_time Timestamp the trade was completed or blank if not yet completed
     * @return $this
     */
    public function setCompletionTime($completion_time)
    {
        $this->container['completion_time'] = $completion_time;

        return $this;
    }

    /**
     * Gets tradeoffer_url
     * @return string
     */
    public function getTradeofferUrl()
    {
        return $this->container['tradeoffer_url'];
    }

    /**
     * Sets tradeoffer_url
     * @param string $tradeoffer_url The URL to the tradeoffer sent to the trade partner. Only set if the trade is in `in_progress` state, else absent.
     * @return $this
     */
    public function setTradeofferUrl($tradeoffer_url)
    {
        $this->container['tradeoffer_url'] = $tradeoffer_url;

        return $this;
    }

    /**
     * Gets denial_reason
     * @return string
     */
    public function getDenialReason()
    {
        return $this->container['denial_reason'];
    }

    /**
     * Sets denial_reason
     * @param string $denial_reason If trade status is `denied`, the reason why the trade was denied, else absent.
     * @return $this
     */
    public function setDenialReason($denial_reason)
    {
        $allowed_values = array('would_escrow', 'private_inventory', 'must_not_trade', 'item_gone', 'invalid_trade_url', 'impossible_item_combination');
        if (!is_null($denial_reason) && (!in_array($denial_reason, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'denial_reason', must be one of 'would_escrow', 'private_inventory', 'must_not_trade', 'item_gone', 'invalid_trade_url', 'impossible_item_combination'");
        }
        $this->container['denial_reason'] = $denial_reason;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\SteamTrades\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\SteamTrades\ObjectSerializer::sanitizeForSerialization($this));
    }
}


