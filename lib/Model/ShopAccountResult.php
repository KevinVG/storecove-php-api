<?php
/**
 * ShopAccountResult
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Storecove API
 *
 * Storecove API
 *
 * OpenAPI spec version: 2.0.1
 * Contact: apisupport@storecove.nl
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.1
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * ShopAccountResult Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ShopAccountResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ShopAccountResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'username' => 'string',
        'external_user_id' => 'string',
        'email' => 'string',
        'from_date' => '\DateTime',
        'sign_in_error_confirmed' => 'bool',
        'sign_in_error_confirmed_at' => '\DateTime',
        'shop' => '\Swagger\Client\Model\Shop'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int64',
        'username' => null,
        'external_user_id' => null,
        'email' => null,
        'from_date' => 'date',
        'sign_in_error_confirmed' => null,
        'sign_in_error_confirmed_at' => 'date',
        'shop' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'username' => 'username',
        'external_user_id' => 'external_user_id',
        'email' => 'email',
        'from_date' => 'from_date',
        'sign_in_error_confirmed' => 'sign_in_error_confirmed',
        'sign_in_error_confirmed_at' => 'sign_in_error_confirmed_at',
        'shop' => 'shop'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'username' => 'setUsername',
        'external_user_id' => 'setExternalUserId',
        'email' => 'setEmail',
        'from_date' => 'setFromDate',
        'sign_in_error_confirmed' => 'setSignInErrorConfirmed',
        'sign_in_error_confirmed_at' => 'setSignInErrorConfirmedAt',
        'shop' => 'setShop'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'username' => 'getUsername',
        'external_user_id' => 'getExternalUserId',
        'email' => 'getEmail',
        'from_date' => 'getFromDate',
        'sign_in_error_confirmed' => 'getSignInErrorConfirmed',
        'sign_in_error_confirmed_at' => 'getSignInErrorConfirmedAt',
        'shop' => 'getShop'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['username'] = isset($data['username']) ? $data['username'] : null;
        $this->container['external_user_id'] = isset($data['external_user_id']) ? $data['external_user_id'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['from_date'] = isset($data['from_date']) ? $data['from_date'] : null;
        $this->container['sign_in_error_confirmed'] = isset($data['sign_in_error_confirmed']) ? $data['sign_in_error_confirmed'] : null;
        $this->container['sign_in_error_confirmed_at'] = isset($data['sign_in_error_confirmed_at']) ? $data['sign_in_error_confirmed_at'] : null;
        $this->container['shop'] = isset($data['shop']) ? $data['shop'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        return true;
    }


    /**
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id The Storecove id for the ShopAccount
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->container['username'];
    }

    /**
     * Sets username
     *
     * @param string $username See <<_openapi_shopaccountinput>>.
     *
     * @return $this
     */
    public function setUsername($username)
    {
        $this->container['username'] = $username;

        return $this;
    }

    /**
     * Gets external_user_id
     *
     * @return string
     */
    public function getExternalUserId()
    {
        return $this->container['external_user_id'];
    }

    /**
     * Sets external_user_id
     *
     * @param string $external_user_id See <<_openapi_shopaccountinput>>.
     *
     * @return $this
     */
    public function setExternalUserId($external_user_id)
    {
        $this->container['external_user_id'] = $external_user_id;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email See <<_openapi_shopaccountinput>>.
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets from_date
     *
     * @return \DateTime
     */
    public function getFromDate()
    {
        return $this->container['from_date'];
    }

    /**
     * Sets from_date
     *
     * @param \DateTime $from_date The date from invoices will be collected. This field defaults to the first day of the month                          the ShopAccount was created in.
     *
     * @return $this
     */
    public function setFromDate($from_date)
    {
        $this->container['from_date'] = $from_date;

        return $this;
    }

    /**
     * Gets sign_in_error_confirmed
     *
     * @return bool
     */
    public function getSignInErrorConfirmed()
    {
        return $this->container['sign_in_error_confirmed'];
    }

    /**
     * Sets sign_in_error_confirmed
     *
     * @param bool $sign_in_error_confirmed Whether or not Storecove has detected and confirmed a sign-in failure. This field is reset                          to false each time a ShopAccount is updated and the username or password has changed.
     *
     * @return $this
     */
    public function setSignInErrorConfirmed($sign_in_error_confirmed)
    {
        $this->container['sign_in_error_confirmed'] = $sign_in_error_confirmed;

        return $this;
    }

    /**
     * Gets sign_in_error_confirmed_at
     *
     * @return \DateTime
     */
    public function getSignInErrorConfirmedAt()
    {
        return $this->container['sign_in_error_confirmed_at'];
    }

    /**
     * Sets sign_in_error_confirmed_at
     *
     * @param \DateTime $sign_in_error_confirmed_at The date on which the sign-in error was confirmed.
     *
     * @return $this
     */
    public function setSignInErrorConfirmedAt($sign_in_error_confirmed_at)
    {
        $this->container['sign_in_error_confirmed_at'] = $sign_in_error_confirmed_at;

        return $this;
    }

    /**
     * Gets shop
     *
     * @return \Swagger\Client\Model\Shop
     */
    public function getShop()
    {
        return $this->container['shop'];
    }

    /**
     * Sets shop
     *
     * @param \Swagger\Client\Model\Shop $shop See <<_openapi_shopaccountinput>>.
     *
     * @return $this
     */
    public function setShop($shop)
    {
        $this->container['shop'] = $shop;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
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
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

