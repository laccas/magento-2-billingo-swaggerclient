<?php
/**
 * DocumentSummary
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Billingo API v3
 *
 * This is a Billingo API v3 documentation. Our API based on REST software architectural style. API has resource-oriented URLs, accepts JSON-encoded request bodies and returns JSON-encoded responses. To use this API you have to generate a new API key on our [site](https://app.billingo.hu/api-key). After that, you can test your API key on this page.
 *
 * OpenAPI spec version: 3.0.15
 * Contact: hello@billingo.hu
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.46
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
 * DocumentSummary Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DocumentSummary implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DocumentSummary';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'net_amount' => 'float',
        'net_amount_local' => 'float',
        'gross_amount_local' => 'float',
        'vat_amount' => 'float',
        'vat_amount_local' => 'float',
        'vat_rate_summary' => '\Swagger\Client\Model\DocumentVatRateSummary[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'net_amount' => 'float',
        'net_amount_local' => 'float',
        'gross_amount_local' => 'float',
        'vat_amount' => 'float',
        'vat_amount_local' => 'float',
        'vat_rate_summary' => null
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
        'net_amount' => 'net_amount',
        'net_amount_local' => 'net_amount_local',
        'gross_amount_local' => 'gross_amount_local',
        'vat_amount' => 'vat_amount',
        'vat_amount_local' => 'vat_amount_local',
        'vat_rate_summary' => 'vat_rate_summary'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'net_amount' => 'setNetAmount',
        'net_amount_local' => 'setNetAmountLocal',
        'gross_amount_local' => 'setGrossAmountLocal',
        'vat_amount' => 'setVatAmount',
        'vat_amount_local' => 'setVatAmountLocal',
        'vat_rate_summary' => 'setVatRateSummary'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'net_amount' => 'getNetAmount',
        'net_amount_local' => 'getNetAmountLocal',
        'gross_amount_local' => 'getGrossAmountLocal',
        'vat_amount' => 'getVatAmount',
        'vat_amount_local' => 'getVatAmountLocal',
        'vat_rate_summary' => 'getVatRateSummary'
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
        $this->container['net_amount'] = isset($data['net_amount']) ? $data['net_amount'] : null;
        $this->container['net_amount_local'] = isset($data['net_amount_local']) ? $data['net_amount_local'] : null;
        $this->container['gross_amount_local'] = isset($data['gross_amount_local']) ? $data['gross_amount_local'] : null;
        $this->container['vat_amount'] = isset($data['vat_amount']) ? $data['vat_amount'] : null;
        $this->container['vat_amount_local'] = isset($data['vat_amount_local']) ? $data['vat_amount_local'] : null;
        $this->container['vat_rate_summary'] = isset($data['vat_rate_summary']) ? $data['vat_rate_summary'] : null;
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
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets net_amount
     *
     * @return float
     */
    public function getNetAmount()
    {
        return $this->container['net_amount'];
    }

    /**
     * Sets net_amount
     *
     * @param float $net_amount net_amount
     *
     * @return $this
     */
    public function setNetAmount($net_amount)
    {
        $this->container['net_amount'] = $net_amount;

        return $this;
    }

    /**
     * Gets net_amount_local
     *
     * @return float
     */
    public function getNetAmountLocal()
    {
        return $this->container['net_amount_local'];
    }

    /**
     * Sets net_amount_local
     *
     * @param float $net_amount_local net_amount_local
     *
     * @return $this
     */
    public function setNetAmountLocal($net_amount_local)
    {
        $this->container['net_amount_local'] = $net_amount_local;

        return $this;
    }

    /**
     * Gets gross_amount_local
     *
     * @return float
     */
    public function getGrossAmountLocal()
    {
        return $this->container['gross_amount_local'];
    }

    /**
     * Sets gross_amount_local
     *
     * @param float $gross_amount_local gross_amount_local
     *
     * @return $this
     */
    public function setGrossAmountLocal($gross_amount_local)
    {
        $this->container['gross_amount_local'] = $gross_amount_local;

        return $this;
    }

    /**
     * Gets vat_amount
     *
     * @return float
     */
    public function getVatAmount()
    {
        return $this->container['vat_amount'];
    }

    /**
     * Sets vat_amount
     *
     * @param float $vat_amount vat_amount
     *
     * @return $this
     */
    public function setVatAmount($vat_amount)
    {
        $this->container['vat_amount'] = $vat_amount;

        return $this;
    }

    /**
     * Gets vat_amount_local
     *
     * @return float
     */
    public function getVatAmountLocal()
    {
        return $this->container['vat_amount_local'];
    }

    /**
     * Sets vat_amount_local
     *
     * @param float $vat_amount_local vat_amount_local
     *
     * @return $this
     */
    public function setVatAmountLocal($vat_amount_local)
    {
        $this->container['vat_amount_local'] = $vat_amount_local;

        return $this;
    }

    /**
     * Gets vat_rate_summary
     *
     * @return \Swagger\Client\Model\DocumentVatRateSummary[]
     */
    public function getVatRateSummary()
    {
        return $this->container['vat_rate_summary'];
    }

    /**
     * Sets vat_rate_summary
     *
     * @param \Swagger\Client\Model\DocumentVatRateSummary[] $vat_rate_summary vat_rate_summary
     *
     * @return $this
     */
    public function setVatRateSummary($vat_rate_summary)
    {
        $this->container['vat_rate_summary'] = $vat_rate_summary;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
