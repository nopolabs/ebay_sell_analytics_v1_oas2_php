<?php
/**
 * Cycle
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
 * Cycle Class Doc Comment
 *
 * @category Class
 * @description A complex type that describes a program cycle.
 * @package  Nopolabs\EBay\Sell\Analytics
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Cycle implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Cycle';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'cycle_type' => 'string',
        'evaluation_date' => 'string',
        'evaluation_month' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'cycle_type' => null,
        'evaluation_date' => null,
        'evaluation_month' => null
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
        'cycle_type' => 'cycleType',
        'evaluation_date' => 'evaluationDate',
        'evaluation_month' => 'evaluationMonth'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cycle_type' => 'setCycleType',
        'evaluation_date' => 'setEvaluationDate',
        'evaluation_month' => 'setEvaluationMonth'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cycle_type' => 'getCycleType',
        'evaluation_date' => 'getEvaluationDate',
        'evaluation_month' => 'getEvaluationMonth'
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
        $this->container['cycle_type'] = isset($data['cycle_type']) ? $data['cycle_type'] : null;
        $this->container['evaluation_date'] = isset($data['evaluation_date']) ? $data['evaluation_date'] : null;
        $this->container['evaluation_month'] = isset($data['evaluation_month']) ? $data['evaluation_month'] : null;
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
     * Gets cycle_type
     *
     * @return string
     */
    public function getCycleType()
    {
        return $this->container['cycle_type'];
    }

    /**
     * Sets cycle_type
     *
     * @param string $cycle_type The cycle type, either CURRENT or PROJECTED. For implementation help, refer to <a href='https://developer.ebay.com/devzone/rest/api-ref/analytics/types/CycleTypeEnum.html'>eBay API documentation</a>
     *
     * @return $this
     */
    public function setCycleType($cycle_type)
    {
        $this->container['cycle_type'] = $cycle_type;

        return $this;
    }

    /**
     * Gets evaluation_date
     *
     * @return string
     */
    public function getEvaluationDate()
    {
        return $this->container['evaluation_date'];
    }

    /**
     * Sets evaluation_date
     *
     * @param string $evaluation_date The date on which the current, effective seller level was computed.
     *
     * @return $this
     */
    public function setEvaluationDate($evaluation_date)
    {
        $this->container['evaluation_date'] = $evaluation_date;

        return $this;
    }

    /**
     * Gets evaluation_month
     *
     * @return string
     */
    public function getEvaluationMonth()
    {
        return $this->container['evaluation_month'];
    }

    /**
     * Sets evaluation_month
     *
     * @param string $evaluation_month The month in which the current, effective seller level was computed.
     *
     * @return $this
     */
    public function setEvaluationMonth($evaluation_month)
    {
        $this->container['evaluation_month'] = $evaluation_month;

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

