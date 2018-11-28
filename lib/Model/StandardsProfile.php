<?php
/**
 * StandardsProfile
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
 * StandardsProfile Class Doc Comment
 *
 * @category Class
 * @description A complex type that defines a seller profile.
 * @package  Nopolabs\EBay\Sell\Analytics
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class StandardsProfile implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'StandardsProfile';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'cycle' => '\Nopolabs\EBay\Sell\Analytics\Model\Cycle',
        'default_program' => 'bool',
        'evaluation_reason' => 'string',
        'metrics' => '\Nopolabs\EBay\Sell\Analytics\Model\Metric[]',
        'program' => 'string',
        'standards_level' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'cycle' => null,
        'default_program' => null,
        'evaluation_reason' => null,
        'metrics' => null,
        'program' => null,
        'standards_level' => null
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
        'cycle' => 'cycle',
        'default_program' => 'defaultProgram',
        'evaluation_reason' => 'evaluationReason',
        'metrics' => 'metrics',
        'program' => 'program',
        'standards_level' => 'standardsLevel'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cycle' => 'setCycle',
        'default_program' => 'setDefaultProgram',
        'evaluation_reason' => 'setEvaluationReason',
        'metrics' => 'setMetrics',
        'program' => 'setProgram',
        'standards_level' => 'setStandardsLevel'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cycle' => 'getCycle',
        'default_program' => 'getDefaultProgram',
        'evaluation_reason' => 'getEvaluationReason',
        'metrics' => 'getMetrics',
        'program' => 'getProgram',
        'standards_level' => 'getStandardsLevel'
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
        $this->container['cycle'] = isset($data['cycle']) ? $data['cycle'] : null;
        $this->container['default_program'] = isset($data['default_program']) ? $data['default_program'] : null;
        $this->container['evaluation_reason'] = isset($data['evaluation_reason']) ? $data['evaluation_reason'] : null;
        $this->container['metrics'] = isset($data['metrics']) ? $data['metrics'] : null;
        $this->container['program'] = isset($data['program']) ? $data['program'] : null;
        $this->container['standards_level'] = isset($data['standards_level']) ? $data['standards_level'] : null;
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
     * Gets cycle
     *
     * @return \Nopolabs\EBay\Sell\Analytics\Model\Cycle
     */
    public function getCycle()
    {
        return $this->container['cycle'];
    }

    /**
     * Sets cycle
     *
     * @param \Nopolabs\EBay\Sell\Analytics\Model\Cycle $cycle cycle
     *
     * @return $this
     */
    public function setCycle($cycle)
    {
        $this->container['cycle'] = $cycle;

        return $this;
    }

    /**
     * Gets default_program
     *
     * @return bool
     */
    public function getDefaultProgram()
    {
        return $this->container['default_program'];
    }

    /**
     * Sets default_program
     *
     * @param bool $default_program If set to true, it indicates this is the default program. Except for sellers in China, a seller's default program is the site where the seller registered with eBay. Seller's in China select their default program when they register.
     *
     * @return $this
     */
    public function setDefaultProgram($default_program)
    {
        $this->container['default_program'] = $default_program;

        return $this;
    }

    /**
     * Gets evaluation_reason
     *
     * @return string
     */
    public function getEvaluationReason()
    {
        return $this->container['evaluation_reason'];
    }

    /**
     * Sets evaluation_reason
     *
     * @param string $evaluation_reason The type of logic used to calculate your overall seller level. eBay may override your calculated seller level if eBay determines there are special circumstances that warrant an override. In general, overrides performed by eBay protect your seller level.
     *
     * @return $this
     */
    public function setEvaluationReason($evaluation_reason)
    {
        $this->container['evaluation_reason'] = $evaluation_reason;

        return $this;
    }

    /**
     * Gets metrics
     *
     * @return \Nopolabs\EBay\Sell\Analytics\Model\Metric[]
     */
    public function getMetrics()
    {
        return $this->container['metrics'];
    }

    /**
     * Sets metrics
     *
     * @param \Nopolabs\EBay\Sell\Analytics\Model\Metric[] $metrics A list of the metrics that contributed to the evaluation. See the applicable metrics and requirements for each program: eBay Top Rated seller program standards
     *
     * @return $this
     */
    public function setMetrics($metrics)
    {
        $this->container['metrics'] = $metrics;

        return $this;
    }

    /**
     * Gets program
     *
     * @return string
     */
    public function getProgram()
    {
        return $this->container['program'];
    }

    /**
     * Sets program
     *
     * @param string $program Indicates the program to which the profile belongs. For implementation help, refer to <a href='https://developer.ebay.com/devzone/rest/api-ref/analytics/types/ProgramEnum.html'>eBay API documentation</a>
     *
     * @return $this
     */
    public function setProgram($program)
    {
        $this->container['program'] = $program;

        return $this;
    }

    /**
     * Gets standards_level
     *
     * @return string
     */
    public function getStandardsLevel()
    {
        return $this->container['standards_level'];
    }

    /**
     * Sets standards_level
     *
     * @param string $standards_level Indicates the overall standards level of the seller. For implementation help, refer to <a href='https://developer.ebay.com/devzone/rest/api-ref/analytics/types/StandardsLevelEnum.html'>eBay API documentation</a>
     *
     * @return $this
     */
    public function setStandardsLevel($standards_level)
    {
        $this->container['standards_level'] = $standards_level;

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

