<?php
/**
 * PeppolIdentifierCreate
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
 * PeppolIdentifierCreate Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PeppolIdentifierCreate implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PeppolIdentifierCreate';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'identifier' => 'string',
        'scheme' => 'string',
        'superscheme' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'identifier' => null,
        'scheme' => null,
        'superscheme' => null
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
        'identifier' => 'identifier',
        'scheme' => 'scheme',
        'superscheme' => 'superscheme'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'identifier' => 'setIdentifier',
        'scheme' => 'setScheme',
        'superscheme' => 'setSuperscheme'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'identifier' => 'getIdentifier',
        'scheme' => 'getScheme',
        'superscheme' => 'getSuperscheme'
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
        $this->container['identifier'] = isset($data['identifier']) ? $data['identifier'] : null;
        $this->container['scheme'] = isset($data['scheme']) ? $data['scheme'] : null;
        $this->container['superscheme'] = isset($data['superscheme']) ? $data['superscheme'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['identifier'] === null) {
            $invalidProperties[] = "'identifier' can't be null";
        }
        if ((strlen($this->container['identifier']) > 64)) {
            $invalidProperties[] = "invalid value for 'identifier', the character length must be smaller than or equal to 64.";
        }

        if ((strlen($this->container['identifier']) < 2)) {
            $invalidProperties[] = "invalid value for 'identifier', the character length must be bigger than or equal to 2.";
        }

        if ($this->container['scheme'] === null) {
            $invalidProperties[] = "'scheme' can't be null";
        }
        if ((strlen($this->container['scheme']) > 64)) {
            $invalidProperties[] = "invalid value for 'scheme', the character length must be smaller than or equal to 64.";
        }

        if ((strlen($this->container['scheme']) < 2)) {
            $invalidProperties[] = "invalid value for 'scheme', the character length must be bigger than or equal to 2.";
        }

        if ($this->container['superscheme'] === null) {
            $invalidProperties[] = "'superscheme' can't be null";
        }
        if ((strlen($this->container['superscheme']) > 64)) {
            $invalidProperties[] = "invalid value for 'superscheme', the character length must be smaller than or equal to 64.";
        }

        if ((strlen($this->container['superscheme']) < 2)) {
            $invalidProperties[] = "invalid value for 'superscheme', the character length must be bigger than or equal to 2.";
        }

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

        if ($this->container['identifier'] === null) {
            return false;
        }
        if (strlen($this->container['identifier']) > 64) {
            return false;
        }
        if (strlen($this->container['identifier']) < 2) {
            return false;
        }
        if ($this->container['scheme'] === null) {
            return false;
        }
        if (strlen($this->container['scheme']) > 64) {
            return false;
        }
        if (strlen($this->container['scheme']) < 2) {
            return false;
        }
        if ($this->container['superscheme'] === null) {
            return false;
        }
        if (strlen($this->container['superscheme']) > 64) {
            return false;
        }
        if (strlen($this->container['superscheme']) < 2) {
            return false;
        }
        return true;
    }


    /**
     * Gets identifier
     *
     * @return string
     */
    public function getIdentifier()
    {
        return $this->container['identifier'];
    }

    /**
     * Sets identifier
     *
     * @param string $identifier The identifier.
     *
     * @return $this
     */
    public function setIdentifier($identifier)
    {
        if ((strlen($identifier) > 64)) {
            throw new \InvalidArgumentException('invalid length for $identifier when calling PeppolIdentifierCreate., must be smaller than or equal to 64.');
        }
        if ((strlen($identifier) < 2)) {
            throw new \InvalidArgumentException('invalid length for $identifier when calling PeppolIdentifierCreate., must be bigger than or equal to 2.');
        }

        $this->container['identifier'] = $identifier;

        return $this;
    }

    /**
     * Gets scheme
     *
     * @return string
     */
    public function getScheme()
    {
        return $this->container['scheme'];
    }

    /**
     * Sets scheme
     *
     * @param string $scheme The scheme of the identifier. See <<_peppol_schemes_list>> for a list.
     *
     * @return $this
     */
    public function setScheme($scheme)
    {
        if ((strlen($scheme) > 64)) {
            throw new \InvalidArgumentException('invalid length for $scheme when calling PeppolIdentifierCreate., must be smaller than or equal to 64.');
        }
        if ((strlen($scheme) < 2)) {
            throw new \InvalidArgumentException('invalid length for $scheme when calling PeppolIdentifierCreate., must be bigger than or equal to 2.');
        }

        $this->container['scheme'] = $scheme;

        return $this;
    }

    /**
     * Gets superscheme
     *
     * @return string
     */
    public function getSuperscheme()
    {
        return $this->container['superscheme'];
    }

    /**
     * Sets superscheme
     *
     * @param string $superscheme The superscheme of the identifier. Should always be \"iso6523-actorid-upis\".
     *
     * @return $this
     */
    public function setSuperscheme($superscheme)
    {
        if ((strlen($superscheme) > 64)) {
            throw new \InvalidArgumentException('invalid length for $superscheme when calling PeppolIdentifierCreate., must be smaller than or equal to 64.');
        }
        if ((strlen($superscheme) < 2)) {
            throw new \InvalidArgumentException('invalid length for $superscheme when calling PeppolIdentifierCreate., must be bigger than or equal to 2.');
        }

        $this->container['superscheme'] = $superscheme;

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


