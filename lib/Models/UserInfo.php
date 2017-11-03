<?php
/**
 * UserInfo
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
 * UserInfo Class Doc Comment
 *
 * @category    Class
 * @description Information about a Steam user
 * @package     SteamTrades
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class UserInfo implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'UserInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'steam_id' => 'string',
        'username' => 'string',
        'avatar_url' => 'string'
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
        'steam_id' => 'steam_id',
        'username' => 'username',
        'avatar_url' => 'avatar_url'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'steam_id' => 'setSteamId',
        'username' => 'setUsername',
        'avatar_url' => 'setAvatarUrl'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'steam_id' => 'getSteamId',
        'username' => 'getUsername',
        'avatar_url' => 'getAvatarUrl'
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
        $this->container['steam_id'] = isset($data['steam_id']) ? $data['steam_id'] : null;
        $this->container['username'] = isset($data['username']) ? $data['username'] : null;
        $this->container['avatar_url'] = isset($data['avatar_url']) ? $data['avatar_url'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['steam_id'] === null) {
            $invalid_properties[] = "'steam_id' can't be null";
        }
        if ($this->container['username'] === null) {
            $invalid_properties[] = "'username' can't be null";
        }
        if ($this->container['avatar_url'] === null) {
            $invalid_properties[] = "'avatar_url' can't be null";
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

        if ($this->container['steam_id'] === null) {
            return false;
        }
        if ($this->container['username'] === null) {
            return false;
        }
        if ($this->container['avatar_url'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets steam_id
     * @return string
     */
    public function getSteamId()
    {
        return $this->container['steam_id'];
    }

    /**
     * Sets steam_id
     * @param string $steam_id 64-bit Steam ID
     * @return $this
     */
    public function setSteamId($steam_id)
    {
        $this->container['steam_id'] = $steam_id;

        return $this;
    }

    /**
     * Gets username
     * @return string
     */
    public function getUsername()
    {
        return $this->container['username'];
    }

    /**
     * Sets username
     * @param string $username Currently set display name
     * @return $this
     */
    public function setUsername($username)
    {
        $this->container['username'] = $username;

        return $this;
    }

    /**
     * Gets avatar_url
     * @return string
     */
    public function getAvatarUrl()
    {
        return $this->container['avatar_url'];
    }

    /**
     * Sets avatar_url
     * @param string $avatar_url Avatar URL (max. resolution)
     * @return $this
     */
    public function setAvatarUrl($avatar_url)
    {
        $this->container['avatar_url'] = $avatar_url;

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

