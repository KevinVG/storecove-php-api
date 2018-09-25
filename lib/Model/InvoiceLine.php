<?php
/**
 * InvoiceLine
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
 * InvoiceLine Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InvoiceLine implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'InvoiceLine';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'description' => 'string',
        'name' => 'string',
        'invoice_period' => 'string',
        'item_price' => 'float',
        'quantity' => 'float',
        'quantity_unit_code' => 'string',
        'allowance_charge' => 'float',
        'amount_excluding_vat' => 'float',
        'tax' => '\Swagger\Client\Model\Tax',
        'accounting_cost' => 'string',
        'accounting_cost_code' => '\Swagger\Client\Model\AccountingCostCode',
        'delivery' => '\Swagger\Client\Model\Delivery',
        'sellers_item_identification' => 'string',
        'standard_item_identification' => 'string',
        'standard_item_identification_scheme_id' => 'string',
        'standard_item_identification_scheme_agency_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'description' => null,
        'name' => null,
        'invoice_period' => null,
        'item_price' => null,
        'quantity' => null,
        'quantity_unit_code' => null,
        'allowance_charge' => null,
        'amount_excluding_vat' => null,
        'tax' => null,
        'accounting_cost' => null,
        'accounting_cost_code' => null,
        'delivery' => null,
        'sellers_item_identification' => null,
        'standard_item_identification' => null,
        'standard_item_identification_scheme_id' => null,
        'standard_item_identification_scheme_agency_id' => null
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
        'description' => 'description',
        'name' => 'name',
        'invoice_period' => 'invoicePeriod',
        'item_price' => 'itemPrice',
        'quantity' => 'quantity',
        'quantity_unit_code' => 'quantityUnitCode',
        'allowance_charge' => 'allowanceCharge',
        'amount_excluding_vat' => 'amountExcludingVat',
        'tax' => 'tax',
        'accounting_cost' => 'accountingCost',
        'accounting_cost_code' => 'accountingCostCode',
        'delivery' => 'delivery',
        'sellers_item_identification' => 'sellersItemIdentification',
        'standard_item_identification' => 'standardItemIdentification',
        'standard_item_identification_scheme_id' => 'standardItemIdentificationSchemeId',
        'standard_item_identification_scheme_agency_id' => 'standardItemIdentificationSchemeAgencyId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'description' => 'setDescription',
        'name' => 'setName',
        'invoice_period' => 'setInvoicePeriod',
        'item_price' => 'setItemPrice',
        'quantity' => 'setQuantity',
        'quantity_unit_code' => 'setQuantityUnitCode',
        'allowance_charge' => 'setAllowanceCharge',
        'amount_excluding_vat' => 'setAmountExcludingVat',
        'tax' => 'setTax',
        'accounting_cost' => 'setAccountingCost',
        'accounting_cost_code' => 'setAccountingCostCode',
        'delivery' => 'setDelivery',
        'sellers_item_identification' => 'setSellersItemIdentification',
        'standard_item_identification' => 'setStandardItemIdentification',
        'standard_item_identification_scheme_id' => 'setStandardItemIdentificationSchemeId',
        'standard_item_identification_scheme_agency_id' => 'setStandardItemIdentificationSchemeAgencyId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'description' => 'getDescription',
        'name' => 'getName',
        'invoice_period' => 'getInvoicePeriod',
        'item_price' => 'getItemPrice',
        'quantity' => 'getQuantity',
        'quantity_unit_code' => 'getQuantityUnitCode',
        'allowance_charge' => 'getAllowanceCharge',
        'amount_excluding_vat' => 'getAmountExcludingVat',
        'tax' => 'getTax',
        'accounting_cost' => 'getAccountingCost',
        'accounting_cost_code' => 'getAccountingCostCode',
        'delivery' => 'getDelivery',
        'sellers_item_identification' => 'getSellersItemIdentification',
        'standard_item_identification' => 'getStandardItemIdentification',
        'standard_item_identification_scheme_id' => 'getStandardItemIdentificationSchemeId',
        'standard_item_identification_scheme_agency_id' => 'getStandardItemIdentificationSchemeAgencyId'
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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['invoice_period'] = isset($data['invoice_period']) ? $data['invoice_period'] : null;
        $this->container['item_price'] = isset($data['item_price']) ? $data['item_price'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['quantity_unit_code'] = isset($data['quantity_unit_code']) ? $data['quantity_unit_code'] : 'C62';
        $this->container['allowance_charge'] = isset($data['allowance_charge']) ? $data['allowance_charge'] : null;
        $this->container['amount_excluding_vat'] = isset($data['amount_excluding_vat']) ? $data['amount_excluding_vat'] : null;
        $this->container['tax'] = isset($data['tax']) ? $data['tax'] : null;
        $this->container['accounting_cost'] = isset($data['accounting_cost']) ? $data['accounting_cost'] : null;
        $this->container['accounting_cost_code'] = isset($data['accounting_cost_code']) ? $data['accounting_cost_code'] : null;
        $this->container['delivery'] = isset($data['delivery']) ? $data['delivery'] : null;
        $this->container['sellers_item_identification'] = isset($data['sellers_item_identification']) ? $data['sellers_item_identification'] : null;
        $this->container['standard_item_identification'] = isset($data['standard_item_identification']) ? $data['standard_item_identification'] : null;
        $this->container['standard_item_identification_scheme_id'] = isset($data['standard_item_identification_scheme_id']) ? $data['standard_item_identification_scheme_id'] : 'GTIN';
        $this->container['standard_item_identification_scheme_agency_id'] = isset($data['standard_item_identification_scheme_agency_id']) ? $data['standard_item_identification_scheme_agency_id'] : '9';
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['description']) && (strlen($this->container['description']) < 1)) {
            $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['name']) && (strlen($this->container['name']) < 1)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['invoice_period']) && !preg_match("/^[0-9]{4}-[0-9]{2}-[0-9]{2} - [0-9]{4}-[0-9]{2}-[0-9]{2}$/", $this->container['invoice_period'])) {
            $invalidProperties[] = "invalid value for 'invoice_period', must be conform to the pattern /^[0-9]{4}-[0-9]{2}-[0-9]{2} - [0-9]{4}-[0-9]{2}-[0-9]{2}$/.";
        }

        if ($this->container['amount_excluding_vat'] === null) {
            $invalidProperties[] = "'amount_excluding_vat' can't be null";
        }
        if (!is_null($this->container['accounting_cost']) && (strlen($this->container['accounting_cost']) < 1)) {
            $invalidProperties[] = "invalid value for 'accounting_cost', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['sellers_item_identification']) && (strlen($this->container['sellers_item_identification']) < 1)) {
            $invalidProperties[] = "invalid value for 'sellers_item_identification', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['standard_item_identification']) && (strlen($this->container['standard_item_identification']) < 1)) {
            $invalidProperties[] = "invalid value for 'standard_item_identification', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['standard_item_identification_scheme_id']) && (strlen($this->container['standard_item_identification_scheme_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'standard_item_identification_scheme_id', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['standard_item_identification_scheme_agency_id']) && (strlen($this->container['standard_item_identification_scheme_agency_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'standard_item_identification_scheme_agency_id', the character length must be bigger than or equal to 1.";
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

        if (strlen($this->container['description']) < 1) {
            return false;
        }
        if (strlen($this->container['name']) < 1) {
            return false;
        }
        if (!preg_match("/^[0-9]{4}-[0-9]{2}-[0-9]{2} - [0-9]{4}-[0-9]{2}-[0-9]{2}$/", $this->container['invoice_period'])) {
            return false;
        }
        if ($this->container['amount_excluding_vat'] === null) {
            return false;
        }
        if (strlen($this->container['accounting_cost']) < 1) {
            return false;
        }
        if (strlen($this->container['sellers_item_identification']) < 1) {
            return false;
        }
        if (strlen($this->container['standard_item_identification']) < 1) {
            return false;
        }
        if (strlen($this->container['standard_item_identification_scheme_id']) < 1) {
            return false;
        }
        if (strlen($this->container['standard_item_identification_scheme_agency_id']) < 1) {
            return false;
        }
        return true;
    }


    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description The description for this invoice line.
     *
     * @return $this
     */
    public function setDescription($description)
    {

        if (!is_null($description) && (strlen($description) < 1)) {
            throw new \InvalidArgumentException('invalid length for $description when calling InvoiceLine., must be bigger than or equal to 1.');
        }

        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name A short name for this invoice line. If not provided, it will be taken from description and description will be set to an emtpy string.
     *
     * @return $this
     */
    public function setName($name)
    {

        if (!is_null($name) && (strlen($name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $name when calling InvoiceLine., must be bigger than or equal to 1.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets invoice_period
     *
     * @return string
     */
    public function getInvoicePeriod()
    {
        return $this->container['invoice_period'];
    }

    /**
     * Sets invoice_period
     *
     * @param string $invoice_period The period (or specific date) to which the invoice line applies. Format: yyyy-mm-dd - yyyy-mm-dd.
     *
     * @return $this
     */
    public function setInvoicePeriod($invoice_period)
    {

        if (!is_null($invoice_period) && (!preg_match("/^[0-9]{4}-[0-9]{2}-[0-9]{2} - [0-9]{4}-[0-9]{2}-[0-9]{2}$/", $invoice_period))) {
            throw new \InvalidArgumentException("invalid value for $invoice_period when calling InvoiceLine., must conform to the pattern /^[0-9]{4}-[0-9]{2}-[0-9]{2} - [0-9]{4}-[0-9]{2}-[0-9]{2}$/.");
        }

        $this->container['invoice_period'] = $invoice_period;

        return $this;
    }

    /**
     * Gets item_price
     *
     * @return float
     */
    public function getItemPrice()
    {
        return $this->container['item_price'];
    }

    /**
     * Sets item_price
     *
     * @param float $item_price The price per item (may be fractional)
     *
     * @return $this
     */
    public function setItemPrice($item_price)
    {
        $this->container['item_price'] = $item_price;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return float
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param float $quantity The number of items (may be fractional).
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets quantity_unit_code
     *
     * @return string
     */
    public function getQuantityUnitCode()
    {
        return $this->container['quantity_unit_code'];
    }

    /**
     * Sets quantity_unit_code
     *
     * @param string $quantity_unit_code A unit code from UNECE Rec20. The complete list can be found at http://www.datypic.com/sc/ubl20/a-unitCode-4.html
     *
     * @return $this
     */
    public function setQuantityUnitCode($quantity_unit_code)
    {
        $this->container['quantity_unit_code'] = $quantity_unit_code;

        return $this;
    }

    /**
     * Gets allowance_charge
     *
     * @return float
     */
    public function getAllowanceCharge()
    {
        return $this->container['allowance_charge'];
    }

    /**
     * Sets allowance_charge
     *
     * @param float $allowance_charge The discount or surcharge on this item. Should be negative for discounts
     *
     * @return $this
     */
    public function setAllowanceCharge($allowance_charge)
    {
        $this->container['allowance_charge'] = $allowance_charge;

        return $this;
    }

    /**
     * Gets amount_excluding_vat
     *
     * @return float
     */
    public function getAmountExcludingVat()
    {
        return $this->container['amount_excluding_vat'];
    }

    /**
     * Sets amount_excluding_vat
     *
     * @param float $amount_excluding_vat The amount excluding VAT. Should equal quantity x itemPrice + allowanceCharge. A difference of 5 cents or 1% between the calculated value and the provided value is allowed.
     *
     * @return $this
     */
    public function setAmountExcludingVat($amount_excluding_vat)
    {
        $this->container['amount_excluding_vat'] = $amount_excluding_vat;

        return $this;
    }

    /**
     * Gets tax
     *
     * @return \Swagger\Client\Model\Tax
     */
    public function getTax()
    {
        return $this->container['tax'];
    }

    /**
     * Sets tax
     *
     * @param \Swagger\Client\Model\Tax $tax tax
     *
     * @return $this
     */
    public function setTax($tax)
    {
        $this->container['tax'] = $tax;

        return $this;
    }

    /**
     * Gets accounting_cost
     *
     * @return string
     */
    public function getAccountingCost()
    {
        return $this->container['accounting_cost'];
    }

    /**
     * Sets accounting_cost
     *
     * @param string $accounting_cost The buyer's accounting cost centre for this invoice line, expressed as text.
     *
     * @return $this
     */
    public function setAccountingCost($accounting_cost)
    {

        if (!is_null($accounting_cost) && (strlen($accounting_cost) < 1)) {
            throw new \InvalidArgumentException('invalid length for $accounting_cost when calling InvoiceLine., must be bigger than or equal to 1.');
        }

        $this->container['accounting_cost'] = $accounting_cost;

        return $this;
    }

    /**
     * Gets accounting_cost_code
     *
     * @return \Swagger\Client\Model\AccountingCostCode
     */
    public function getAccountingCostCode()
    {
        return $this->container['accounting_cost_code'];
    }

    /**
     * Sets accounting_cost_code
     *
     * @param \Swagger\Client\Model\AccountingCostCode $accounting_cost_code accounting_cost_code
     *
     * @return $this
     */
    public function setAccountingCostCode($accounting_cost_code)
    {
        $this->container['accounting_cost_code'] = $accounting_cost_code;

        return $this;
    }

    /**
     * Gets delivery
     *
     * @return \Swagger\Client\Model\Delivery
     */
    public function getDelivery()
    {
        return $this->container['delivery'];
    }

    /**
     * Sets delivery
     *
     * @param \Swagger\Client\Model\Delivery $delivery The delivery of the invoice line.
     *
     * @return $this
     */
    public function setDelivery($delivery)
    {
        $this->container['delivery'] = $delivery;

        return $this;
    }

    /**
     * Gets sellers_item_identification
     *
     * @return string
     */
    public function getSellersItemIdentification()
    {
        return $this->container['sellers_item_identification'];
    }

    /**
     * Sets sellers_item_identification
     *
     * @param string $sellers_item_identification The ID the seller assigned to this item.
     *
     * @return $this
     */
    public function setSellersItemIdentification($sellers_item_identification)
    {

        if (!is_null($sellers_item_identification) && (strlen($sellers_item_identification) < 1)) {
            throw new \InvalidArgumentException('invalid length for $sellers_item_identification when calling InvoiceLine., must be bigger than or equal to 1.');
        }

        $this->container['sellers_item_identification'] = $sellers_item_identification;

        return $this;
    }

    /**
     * Gets standard_item_identification
     *
     * @return string
     */
    public function getStandardItemIdentification()
    {
        return $this->container['standard_item_identification'];
    }

    /**
     * Sets standard_item_identification
     *
     * @param string $standard_item_identification Standardized ID for the item.
     *
     * @return $this
     */
    public function setStandardItemIdentification($standard_item_identification)
    {

        if (!is_null($standard_item_identification) && (strlen($standard_item_identification) < 1)) {
            throw new \InvalidArgumentException('invalid length for $standard_item_identification when calling InvoiceLine., must be bigger than or equal to 1.');
        }

        $this->container['standard_item_identification'] = $standard_item_identification;

        return $this;
    }

    /**
     * Gets standard_item_identification_scheme_id
     *
     * @return string
     */
    public function getStandardItemIdentificationSchemeId()
    {
        return $this->container['standard_item_identification_scheme_id'];
    }

    /**
     * Sets standard_item_identification_scheme_id
     *
     * @param string $standard_item_identification_scheme_id The scheme for the standardized ID for the item.
     *
     * @return $this
     */
    public function setStandardItemIdentificationSchemeId($standard_item_identification_scheme_id)
    {

        if (!is_null($standard_item_identification_scheme_id) && (strlen($standard_item_identification_scheme_id) < 1)) {
            throw new \InvalidArgumentException('invalid length for $standard_item_identification_scheme_id when calling InvoiceLine., must be bigger than or equal to 1.');
        }

        $this->container['standard_item_identification_scheme_id'] = $standard_item_identification_scheme_id;

        return $this;
    }

    /**
     * Gets standard_item_identification_scheme_agency_id
     *
     * @return string
     */
    public function getStandardItemIdentificationSchemeAgencyId()
    {
        return $this->container['standard_item_identification_scheme_agency_id'];
    }

    /**
     * Sets standard_item_identification_scheme_agency_id
     *
     * @param string $standard_item_identification_scheme_agency_id The scheme agency for the standardized ID for the item.
     *
     * @return $this
     */
    public function setStandardItemIdentificationSchemeAgencyId($standard_item_identification_scheme_agency_id)
    {

        if (!is_null($standard_item_identification_scheme_agency_id) && (strlen($standard_item_identification_scheme_agency_id) < 1)) {
            throw new \InvalidArgumentException('invalid length for $standard_item_identification_scheme_agency_id when calling InvoiceLine., must be bigger than or equal to 1.');
        }

        $this->container['standard_item_identification_scheme_agency_id'] = $standard_item_identification_scheme_agency_id;

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

