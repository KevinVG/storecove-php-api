<?php
/**
 * InvoiceRecipient
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
 * InvoiceRecipient Class Doc Comment
 *
 * @category Class
 * @description Ids that identify this invoice recipient. The list of identifiers should match with the accountingCustomerParty. I.e., you should not be sending an invoice for one accountingCustomerParty to the publicIdentifier of another.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InvoiceRecipient implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'InvoiceRecipient';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'widget_identification' => '\Swagger\Client\Model\WidgetIdentification',
        'public_identifiers' => '\Swagger\Client\Model\PublicIdentifiers',
        'emails' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'widget_identification' => null,
        'public_identifiers' => null,
        'emails' => 'email'
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
        'widget_identification' => 'widgetIdentification',
        'public_identifiers' => 'publicIdentifiers',
        'emails' => 'emails'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'widget_identification' => 'setWidgetIdentification',
        'public_identifiers' => 'setPublicIdentifiers',
        'emails' => 'setEmails'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'widget_identification' => 'getWidgetIdentification',
        'public_identifiers' => 'getPublicIdentifiers',
        'emails' => 'getEmails'
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
        $this->container['widget_identification'] = isset($data['widget_identification']) ? $data['widget_identification'] : null;
        $this->container['public_identifiers'] = isset($data['public_identifiers']) ? $data['public_identifiers'] : null;
        $this->container['emails'] = isset($data['emails']) ? $data['emails'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['id']) && (strlen($this->container['id']) < 2)) {
            $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 2.";
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

        if (strlen($this->container['id']) < 2) {
            return false;
        }
        return true;
    }


    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id DEPRECATED. Use widgetIdentification.id
     *
     * @return $this
     */
    public function setId($id)
    {

        if (!is_null($id) && (strlen($id) < 2)) {
            throw new \InvalidArgumentException('invalid length for $id when calling InvoiceRecipient., must be bigger than or equal to 2.');
        }

        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets widget_identification
     *
     * @return \Swagger\Client\Model\WidgetIdentification
     */
    public function getWidgetIdentification()
    {
        return $this->container['widget_identification'];
    }

    /**
     * Sets widget_identification
     *
     * @param \Swagger\Client\Model\WidgetIdentification $widget_identification The identification for the identifier related to the Storecove Destination Configuration widget.
     *
     * @return $this
     */
    public function setWidgetIdentification($widget_identification)
    {
        $this->container['widget_identification'] = $widget_identification;

        return $this;
    }

    /**
     * Gets public_identifiers
     *
     * @return \Swagger\Client\Model\PublicIdentifiers
     */
    public function getPublicIdentifiers()
    {
        return $this->container['public_identifiers'];
    }

    /**
     * Sets public_identifiers
     *
     * @param \Swagger\Client\Model\PublicIdentifiers $public_identifiers The public identifiers for this invoice recipient. These are the identifiers used on the Peppol network.
     *
     * @return $this
     */
    public function setPublicIdentifiers($public_identifiers)
    {
        $this->container['public_identifiers'] = $public_identifiers;

        return $this;
    }

    /**
     * Gets emails
     *
     * @return string[]
     */
    public function getEmails()
    {
        return $this->container['emails'];
    }

    /**
     * Sets emails
     *
     * @param string[] $emails The email addresses the invoice should be sent to if none of the other identifiers can be used
     *
     * @return $this
     */
    public function setEmails($emails)
    {
        $this->container['emails'] = $emails;

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


