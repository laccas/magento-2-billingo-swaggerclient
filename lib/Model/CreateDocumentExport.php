<?php
/**
 * CreateDocumentExport
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
 * CreateDocumentExport Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CreateDocumentExport implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CreateDocumentExport';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'query_type' => '\Swagger\Client\Model\DocumentExportQueryType',
        'start_date' => '\DateTime',
        'end_date' => '\DateTime',
        'document_block_id' => 'int',
        'export_type' => '\Swagger\Client\Model\DocumentExportType',
        'number_start_year' => 'int',
        'number_start_sequence' => 'int',
        'number_end_year' => 'int',
        'number_end_sequence' => 'int',
        'payment_method' => '\Swagger\Client\Model\PaymentMethod',
        'sort_by' => '\Swagger\Client\Model\DocumentExportSortBy',
        'other_options' => '\Swagger\Client\Model\DocumentExportOtherOptions',
        'filter_extra' => '\Swagger\Client\Model\DocumentExportFilterExtra'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'query_type' => null,
        'start_date' => 'date',
        'end_date' => 'date',
        'document_block_id' => null,
        'export_type' => null,
        'number_start_year' => null,
        'number_start_sequence' => null,
        'number_end_year' => null,
        'number_end_sequence' => null,
        'payment_method' => null,
        'sort_by' => null,
        'other_options' => null,
        'filter_extra' => null
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
        'query_type' => 'query_type',
        'start_date' => 'start_date',
        'end_date' => 'end_date',
        'document_block_id' => 'document_block_id',
        'export_type' => 'export_type',
        'number_start_year' => 'number_start_year',
        'number_start_sequence' => 'number_start_sequence',
        'number_end_year' => 'number_end_year',
        'number_end_sequence' => 'number_end_sequence',
        'payment_method' => 'payment_method',
        'sort_by' => 'sort_by',
        'other_options' => 'other_options',
        'filter_extra' => 'filter_extra'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'query_type' => 'setQueryType',
        'start_date' => 'setStartDate',
        'end_date' => 'setEndDate',
        'document_block_id' => 'setDocumentBlockId',
        'export_type' => 'setExportType',
        'number_start_year' => 'setNumberStartYear',
        'number_start_sequence' => 'setNumberStartSequence',
        'number_end_year' => 'setNumberEndYear',
        'number_end_sequence' => 'setNumberEndSequence',
        'payment_method' => 'setPaymentMethod',
        'sort_by' => 'setSortBy',
        'other_options' => 'setOtherOptions',
        'filter_extra' => 'setFilterExtra'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'query_type' => 'getQueryType',
        'start_date' => 'getStartDate',
        'end_date' => 'getEndDate',
        'document_block_id' => 'getDocumentBlockId',
        'export_type' => 'getExportType',
        'number_start_year' => 'getNumberStartYear',
        'number_start_sequence' => 'getNumberStartSequence',
        'number_end_year' => 'getNumberEndYear',
        'number_end_sequence' => 'getNumberEndSequence',
        'payment_method' => 'getPaymentMethod',
        'sort_by' => 'getSortBy',
        'other_options' => 'getOtherOptions',
        'filter_extra' => 'getFilterExtra'
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
        $this->container['query_type'] = isset($data['query_type']) ? $data['query_type'] : null;
        $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
        $this->container['end_date'] = isset($data['end_date']) ? $data['end_date'] : null;
        $this->container['document_block_id'] = isset($data['document_block_id']) ? $data['document_block_id'] : null;
        $this->container['export_type'] = isset($data['export_type']) ? $data['export_type'] : null;
        $this->container['number_start_year'] = isset($data['number_start_year']) ? $data['number_start_year'] : null;
        $this->container['number_start_sequence'] = isset($data['number_start_sequence']) ? $data['number_start_sequence'] : null;
        $this->container['number_end_year'] = isset($data['number_end_year']) ? $data['number_end_year'] : null;
        $this->container['number_end_sequence'] = isset($data['number_end_sequence']) ? $data['number_end_sequence'] : null;
        $this->container['payment_method'] = isset($data['payment_method']) ? $data['payment_method'] : null;
        $this->container['sort_by'] = isset($data['sort_by']) ? $data['sort_by'] : null;
        $this->container['other_options'] = isset($data['other_options']) ? $data['other_options'] : null;
        $this->container['filter_extra'] = isset($data['filter_extra']) ? $data['filter_extra'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['query_type'] === null) {
            $invalidProperties[] = "'query_type' can't be null";
        }
        if ($this->container['start_date'] === null) {
            $invalidProperties[] = "'start_date' can't be null";
        }
        if ($this->container['end_date'] === null) {
            $invalidProperties[] = "'end_date' can't be null";
        }
        if ($this->container['export_type'] === null) {
            $invalidProperties[] = "'export_type' can't be null";
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
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets query_type
     *
     * @return \Swagger\Client\Model\DocumentExportQueryType
     */
    public function getQueryType()
    {
        return $this->container['query_type'];
    }

    /**
     * Sets query_type
     *
     * @param \Swagger\Client\Model\DocumentExportQueryType $query_type query_type
     *
     * @return $this
     */
    public function setQueryType($query_type)
    {
        $this->container['query_type'] = $query_type;

        return $this;
    }

    /**
     * Gets start_date
     *
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->container['start_date'];
    }

    /**
     * Sets start_date
     *
     * @param \DateTime $start_date start_date
     *
     * @return $this
     */
    public function setStartDate($start_date)
    {
        $this->container['start_date'] = $start_date;

        return $this;
    }

    /**
     * Gets end_date
     *
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->container['end_date'];
    }

    /**
     * Sets end_date
     *
     * @param \DateTime $end_date end_date
     *
     * @return $this
     */
    public function setEndDate($end_date)
    {
        $this->container['end_date'] = $end_date;

        return $this;
    }

    /**
     * Gets document_block_id
     *
     * @return int
     */
    public function getDocumentBlockId()
    {
        return $this->container['document_block_id'];
    }

    /**
     * Sets document_block_id
     *
     * @param int $document_block_id document_block_id
     *
     * @return $this
     */
    public function setDocumentBlockId($document_block_id)
    {
        $this->container['document_block_id'] = $document_block_id;

        return $this;
    }

    /**
     * Gets export_type
     *
     * @return \Swagger\Client\Model\DocumentExportType
     */
    public function getExportType()
    {
        return $this->container['export_type'];
    }

    /**
     * Sets export_type
     *
     * @param \Swagger\Client\Model\DocumentExportType $export_type export_type
     *
     * @return $this
     */
    public function setExportType($export_type)
    {
        $this->container['export_type'] = $export_type;

        return $this;
    }

    /**
     * Gets number_start_year
     *
     * @return int
     */
    public function getNumberStartYear()
    {
        return $this->container['number_start_year'];
    }

    /**
     * Sets number_start_year
     *
     * @param int $number_start_year number_start_year
     *
     * @return $this
     */
    public function setNumberStartYear($number_start_year)
    {
        $this->container['number_start_year'] = $number_start_year;

        return $this;
    }

    /**
     * Gets number_start_sequence
     *
     * @return int
     */
    public function getNumberStartSequence()
    {
        return $this->container['number_start_sequence'];
    }

    /**
     * Sets number_start_sequence
     *
     * @param int $number_start_sequence number_start_sequence
     *
     * @return $this
     */
    public function setNumberStartSequence($number_start_sequence)
    {
        $this->container['number_start_sequence'] = $number_start_sequence;

        return $this;
    }

    /**
     * Gets number_end_year
     *
     * @return int
     */
    public function getNumberEndYear()
    {
        return $this->container['number_end_year'];
    }

    /**
     * Sets number_end_year
     *
     * @param int $number_end_year number_end_year
     *
     * @return $this
     */
    public function setNumberEndYear($number_end_year)
    {
        $this->container['number_end_year'] = $number_end_year;

        return $this;
    }

    /**
     * Gets number_end_sequence
     *
     * @return int
     */
    public function getNumberEndSequence()
    {
        return $this->container['number_end_sequence'];
    }

    /**
     * Sets number_end_sequence
     *
     * @param int $number_end_sequence number_end_sequence
     *
     * @return $this
     */
    public function setNumberEndSequence($number_end_sequence)
    {
        $this->container['number_end_sequence'] = $number_end_sequence;

        return $this;
    }

    /**
     * Gets payment_method
     *
     * @return \Swagger\Client\Model\PaymentMethod
     */
    public function getPaymentMethod()
    {
        return $this->container['payment_method'];
    }

    /**
     * Sets payment_method
     *
     * @param \Swagger\Client\Model\PaymentMethod $payment_method payment_method
     *
     * @return $this
     */
    public function setPaymentMethod($payment_method)
    {
        $this->container['payment_method'] = $payment_method;

        return $this;
    }

    /**
     * Gets sort_by
     *
     * @return \Swagger\Client\Model\DocumentExportSortBy
     */
    public function getSortBy()
    {
        return $this->container['sort_by'];
    }

    /**
     * Sets sort_by
     *
     * @param \Swagger\Client\Model\DocumentExportSortBy $sort_by sort_by
     *
     * @return $this
     */
    public function setSortBy($sort_by)
    {
        $this->container['sort_by'] = $sort_by;

        return $this;
    }

    /**
     * Gets other_options
     *
     * @return \Swagger\Client\Model\DocumentExportOtherOptions
     */
    public function getOtherOptions()
    {
        return $this->container['other_options'];
    }

    /**
     * Sets other_options
     *
     * @param \Swagger\Client\Model\DocumentExportOtherOptions $other_options other_options
     *
     * @return $this
     */
    public function setOtherOptions($other_options)
    {
        $this->container['other_options'] = $other_options;

        return $this;
    }

    /**
     * Gets filter_extra
     *
     * @return \Swagger\Client\Model\DocumentExportFilterExtra
     */
    public function getFilterExtra()
    {
        return $this->container['filter_extra'];
    }

    /**
     * Sets filter_extra
     *
     * @param \Swagger\Client\Model\DocumentExportFilterExtra $filter_extra filter_extra
     *
     * @return $this
     */
    public function setFilterExtra($filter_extra)
    {
        $this->container['filter_extra'] = $filter_extra;

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
