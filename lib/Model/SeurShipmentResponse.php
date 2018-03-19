<?php
/**
 * SeurShipmentResponse
 *
 * PHP version 5
 *
 * @category Class
 * @package  MarketPay
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * MarketPay API
 *
 * API for Smart Contracts and Payments
 *
 * OpenAPI spec version: v2.01
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.1
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace MarketPay\Model;

use \ArrayAccess;
use \MarketPay\ObjectSerializer;

/**
 * SeurShipmentResponse Class Doc Comment
 *
 * @category Class
 * @package  MarketPay
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SeurShipmentResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SeurShipmentResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'locator_number' => 'string',
        'quotation' => 'int',
        'status' => 'string',
        'status_pick_up' => 'string',
        'status_pick_up_code' => 'string',
        'status_delivery' => 'string',
        'status_delivery_code' => 'string',
        'id' => 'string',
        'creation_date' => 'int',
        'tag' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'locator_number' => null,
        'quotation' => 'int32',
        'status' => null,
        'status_pick_up' => null,
        'status_pick_up_code' => null,
        'status_delivery' => null,
        'status_delivery_code' => null,
        'id' => null,
        'creation_date' => 'int64',
        'tag' => null
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
        'locator_number' => 'LocatorNumber',
        'quotation' => 'Quotation',
        'status' => 'Status',
        'status_pick_up' => 'StatusPickUp',
        'status_pick_up_code' => 'StatusPickUpCode',
        'status_delivery' => 'StatusDelivery',
        'status_delivery_code' => 'StatusDeliveryCode',
        'id' => 'Id',
        'creation_date' => 'CreationDate',
        'tag' => 'Tag'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'locator_number' => 'setLocatorNumber',
        'quotation' => 'setQuotation',
        'status' => 'setStatus',
        'status_pick_up' => 'setStatusPickUp',
        'status_pick_up_code' => 'setStatusPickUpCode',
        'status_delivery' => 'setStatusDelivery',
        'status_delivery_code' => 'setStatusDeliveryCode',
        'id' => 'setId',
        'creation_date' => 'setCreationDate',
        'tag' => 'setTag'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'locator_number' => 'getLocatorNumber',
        'quotation' => 'getQuotation',
        'status' => 'getStatus',
        'status_pick_up' => 'getStatusPickUp',
        'status_pick_up_code' => 'getStatusPickUpCode',
        'status_delivery' => 'getStatusDelivery',
        'status_delivery_code' => 'getStatusDeliveryCode',
        'id' => 'getId',
        'creation_date' => 'getCreationDate',
        'tag' => 'getTag'
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

    const STATUS_CREATED = 'CREATED';
    const STATUS_SUCCEEDED = 'SUCCEEDED';
    const STATUS_FAILED = 'FAILED';
    const STATUS_CANCELED = 'CANCELED';
    const STATUS_PICK_UP_UNKNOWN = 'Unknown';
    const STATUS_PICK_UP_READY = 'Ready';
    const STATUS_PICK_UP_STARTED = 'Started';
    const STATUS_PICK_UP_FAILED = 'Failed';
    const STATUS_PICK_UP_PICKED = 'Picked';
    const STATUS_DELIVERY_UNKNOWN = 'Unknown';
    const STATUS_DELIVERY_READY = 'Ready';
    const STATUS_DELIVERY_DELIVERED = 'Delivered';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_CREATED,
            self::STATUS_SUCCEEDED,
            self::STATUS_FAILED,
            self::STATUS_CANCELED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusPickUpAllowableValues()
    {
        return [
            self::STATUS_PICK_UP_UNKNOWN,
            self::STATUS_PICK_UP_READY,
            self::STATUS_PICK_UP_STARTED,
            self::STATUS_PICK_UP_FAILED,
            self::STATUS_PICK_UP_PICKED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusDeliveryAllowableValues()
    {
        return [
            self::STATUS_DELIVERY_UNKNOWN,
            self::STATUS_DELIVERY_READY,
            self::STATUS_DELIVERY_DELIVERED,
        ];
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
        $this->container['locator_number'] = isset($data['locator_number']) ? $data['locator_number'] : null;
        $this->container['quotation'] = isset($data['quotation']) ? $data['quotation'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['status_pick_up'] = isset($data['status_pick_up']) ? $data['status_pick_up'] : null;
        $this->container['status_pick_up_code'] = isset($data['status_pick_up_code']) ? $data['status_pick_up_code'] : null;
        $this->container['status_delivery'] = isset($data['status_delivery']) ? $data['status_delivery'] : null;
        $this->container['status_delivery_code'] = isset($data['status_delivery_code']) ? $data['status_delivery_code'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['creation_date'] = isset($data['creation_date']) ? $data['creation_date'] : null;
        $this->container['tag'] = isset($data['tag']) ? $data['tag'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getStatusAllowableValues();
        if (!in_array($this->container['status'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getStatusPickUpAllowableValues();
        if (!in_array($this->container['status_pick_up'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status_pick_up', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getStatusDeliveryAllowableValues();
        if (!in_array($this->container['status_delivery'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status_delivery', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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

        $allowedValues = $this->getStatusAllowableValues();
        if (!in_array($this->container['status'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getStatusPickUpAllowableValues();
        if (!in_array($this->container['status_pick_up'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getStatusDeliveryAllowableValues();
        if (!in_array($this->container['status_delivery'], $allowedValues)) {
            return false;
        }
        return true;
    }


    /**
     * Gets locator_number
     *
     * @return string
     */
    public function getLocatorNumber()
    {
        return $this->container['locator_number'];
    }

    /**
     * Sets locator_number
     *
     * @param string $locator_number locator_number
     *
     * @return $this
     */
    public function setLocatorNumber($locator_number)
    {
        $this->container['locator_number'] = $locator_number;

        return $this;
    }

    /**
     * Gets quotation
     *
     * @return int
     */
    public function getQuotation()
    {
        return $this->container['quotation'];
    }

    /**
     * Sets quotation
     *
     * @param int $quotation quotation
     *
     * @return $this
     */
    public function setQuotation($quotation)
    {
        $this->container['quotation'] = $quotation;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets status_pick_up
     *
     * @return string
     */
    public function getStatusPickUp()
    {
        return $this->container['status_pick_up'];
    }

    /**
     * Sets status_pick_up
     *
     * @param string $status_pick_up status_pick_up
     *
     * @return $this
     */
    public function setStatusPickUp($status_pick_up)
    {
        $allowedValues = $this->getStatusPickUpAllowableValues();
        if (!is_null($status_pick_up) && !in_array($status_pick_up, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status_pick_up', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status_pick_up'] = $status_pick_up;

        return $this;
    }

    /**
     * Gets status_pick_up_code
     *
     * @return string
     */
    public function getStatusPickUpCode()
    {
        return $this->container['status_pick_up_code'];
    }

    /**
     * Sets status_pick_up_code
     *
     * @param string $status_pick_up_code status_pick_up_code
     *
     * @return $this
     */
    public function setStatusPickUpCode($status_pick_up_code)
    {
        $this->container['status_pick_up_code'] = $status_pick_up_code;

        return $this;
    }

    /**
     * Gets status_delivery
     *
     * @return string
     */
    public function getStatusDelivery()
    {
        return $this->container['status_delivery'];
    }

    /**
     * Sets status_delivery
     *
     * @param string $status_delivery status_delivery
     *
     * @return $this
     */
    public function setStatusDelivery($status_delivery)
    {
        $allowedValues = $this->getStatusDeliveryAllowableValues();
        if (!is_null($status_delivery) && !in_array($status_delivery, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status_delivery', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status_delivery'] = $status_delivery;

        return $this;
    }

    /**
     * Gets status_delivery_code
     *
     * @return string
     */
    public function getStatusDeliveryCode()
    {
        return $this->container['status_delivery_code'];
    }

    /**
     * Sets status_delivery_code
     *
     * @param string $status_delivery_code status_delivery_code
     *
     * @return $this
     */
    public function setStatusDeliveryCode($status_delivery_code)
    {
        $this->container['status_delivery_code'] = $status_delivery_code;

        return $this;
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
     * @param string $id The item's ID
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets creation_date
     *
     * @return int
     */
    public function getCreationDate()
    {
        return $this->container['creation_date'];
    }

    /**
     * Sets creation_date
     *
     * @param int $creation_date When the item was created
     *
     * @return $this
     */
    public function setCreationDate($creation_date)
    {
        $this->container['creation_date'] = $creation_date;

        return $this;
    }

    /**
     * Gets tag
     *
     * @return string
     */
    public function getTag()
    {
        return $this->container['tag'];
    }

    /**
     * Sets tag
     *
     * @param string $tag Custom data that you can add to this item
     *
     * @return $this
     */
    public function setTag($tag)
    {
        $this->container['tag'] = $tag;

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


