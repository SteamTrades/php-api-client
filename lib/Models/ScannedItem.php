<?php
/**
 * ScannedItem
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
 * ScannedItem Class Doc Comment
 *
 * @category    Class
 * @description Information about an item in a remote inventory
 * @package     SteamTrades
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ScannedItem implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ScannedItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'steam_asset_id' => 'string',
        'category' => '\SteamTrades\Models\ItemCategory',
        'steam_class_id' => 'string',
        'steam_instance_id' => 'string'
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
        'steam_asset_id' => 'steam_asset_id',
        'category' => 'category',
        'steam_class_id' => 'steam_class_id',
        'steam_instance_id' => 'steam_instance_id'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'steam_asset_id' => 'setSteamAssetId',
        'category' => 'setCategory',
        'steam_class_id' => 'setSteamClassId',
        'steam_instance_id' => 'setSteamInstanceId'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'steam_asset_id' => 'getSteamAssetId',
        'category' => 'getCategory',
        'steam_class_id' => 'getSteamClassId',
        'steam_instance_id' => 'getSteamInstanceId'
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
        $this->container['steam_asset_id'] = isset($data['steam_asset_id']) ? $data['steam_asset_id'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['steam_class_id'] = isset($data['steam_class_id']) ? $data['steam_class_id'] : null;
        $this->container['steam_instance_id'] = isset($data['steam_instance_id']) ? $data['steam_instance_id'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['steam_asset_id'] === null) {
            $invalid_properties[] = "'steam_asset_id' can't be null";
        }
        if ($this->container['category'] === null) {
            $invalid_properties[] = "'category' can't be null";
        }
        if ($this->container['steam_class_id'] === null) {
            $invalid_properties[] = "'steam_class_id' can't be null";
        }
        if ($this->container['steam_instance_id'] === null) {
            $invalid_properties[] = "'steam_instance_id' can't be null";
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

        if ($this->container['steam_asset_id'] === null) {
            return false;
        }
        if ($this->container['category'] === null) {
            return false;
        }
        if ($this->container['steam_class_id'] === null) {
            return false;
        }
        if ($this->container['steam_instance_id'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets steam_asset_id
     * @return string
     */
    public function getSteamAssetId()
    {
        return $this->container['steam_asset_id'];
    }

    /**
     * Sets steam_asset_id
     * @param string $steam_asset_id Steam asset ID
     * @return $this
     */
    public function setSteamAssetId($steam_asset_id)
    {
        $this->container['steam_asset_id'] = $steam_asset_id;

        return $this;
    }

    /**
     * Gets category
     * @return \SteamTrades\Models\ItemCategory
     */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
     * Sets category
     * @param \SteamTrades\Models\ItemCategory $category Item category this item belongs to
     * @return $this
     */
    public function setCategory($category)
    {
        $this->container['category'] = $category;

        return $this;
    }

    /**
     * Gets steam_class_id
     * @return string
     */
    public function getSteamClassId()
    {
        return $this->container['steam_class_id'];
    }

    /**
     * Sets steam_class_id
     * @param string $steam_class_id Steam item class ID
     * @return $this
     */
    public function setSteamClassId($steam_class_id)
    {
        $this->container['steam_class_id'] = $steam_class_id;

        return $this;
    }

    /**
     * Gets steam_instance_id
     * @return string
     */
    public function getSteamInstanceId()
    {
        return $this->container['steam_instance_id'];
    }

    /**
     * Sets steam_instance_id
     * @param string $steam_instance_id Steam item instance ID
     * @return $this
     */
    public function setSteamInstanceId($steam_instance_id)
    {
        $this->container['steam_instance_id'] = $steam_instance_id;

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


