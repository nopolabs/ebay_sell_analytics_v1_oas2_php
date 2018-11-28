<?php
/**
 * Record
 *
 * PHP version 5
 *
 * @category Class
 * @package  Nopolabs\EBay\Sell\Analytics
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Analytics API
 *
 * The Analytics API provides information about a seller's business performance. The getTrafficReport method shows how buyers are engaging with listings and the getSellerStandardsProfile methods show if the seller is meeting buyer expectations.
 *
 * OpenAPI spec version: v1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.1
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Nopolabs\EBay\Sell\Analytics\Model;

use \ArrayAccess;
use \Nopolabs\EBay\Sell\Analytics\ObjectSerializer;

/**
 * Record Class Doc Comment
 *
 * @category Class
 * @description Type that defines the fields of the individual record of the report.
 * @package  Nopolabs\EBay\Sell\Analytics
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Record implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Record';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'dimension_values' => '\Nopolabs\EBay\Sell\Analytics\Model\Value[]',
        'metric_values' => '\Nopolabs\EBay\Sell\Analytics\Model\Value[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'dimension_values' => null,
        'metric_values' => null
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
        'dimension_values' => 'dimensionValues',
        'metric_values' => 'metricValues'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'dimension_values' => 'setDimensionValues',
        'metric_values' => 'setMetricValues'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'dimension_values' => 'getDimensionValues',
        'metric_values' => 'getMetricValues'
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
        $this->container['dimension_values'] = isset($data['dimension_values']) ? $data['dimension_values'] : null;
        $this->container['metric_values'] = isset($data['metric_values']) ? $data['metric_values'] : null;
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
     * Gets dimension_values
     *
     * @return \Nopolabs\EBay\Sell\Analytics\Model\Value[]
     */
    public function getDimensionValues()
    {
        return $this->container['dimension_values'];
    }

    /**
     * Sets dimension_values
     *
     * @param \Nopolabs\EBay\Sell\Analytics\Model\Value[] $dimension_values The container for the dimension value. For example: &quot;value&quot;: &quot;142133954229&quot;,, which is the listing ID.
     *
     * @return $this
     */
    public function setDimensionValues($dimension_values)
    {
        $this->container['dimension_values'] = $dimension_values;

        return $this;
    }

    /**
     * Gets metric_values
     *
     * @return \Nopolabs\EBay\Sell\Analytics\Model\Value[]
     */
    public function getMetricValues()
    {
        return $this->container['metric_values'];
    }

    /**
     * Sets metric_values
     *
     * @param \Nopolabs\EBay\Sell\Analytics\Model\Value[] $metric_values The container for the metric value and the indicator of whether the service was able to computed this value.
     *
     * @return $this
     */
    public function setMetricValues($metric_values)
    {
        $this->container['metric_values'] = $metric_values;

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

