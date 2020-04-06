<?php
/**
 * KycValidationUserLegalStatusResponse
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
 * Swagger Codegen version: 2.4.13
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
 * KycValidationUserLegalStatusResponse Class Doc Comment
 *
 * @category Class
 * @package  MarketPay
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class KycValidationUserLegalStatusResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'KycValidationUserLegalStatusResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'shareholders' => '\MarketPay\Model\KycShareHolderContainerDto[]',
        'board_members' => '\MarketPay\Model\KycBoardMemberContainerDto[]',
        'validations' => '\MarketPay\Model\KycValidationPerLevelStatus[]',
        'user_data' => '\MarketPay\Model\KycLegalUserDataDto',
        'kyc_level_override' => 'string',
        'kyc_level_override_reason' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'shareholders' => null,
        'board_members' => null,
        'validations' => null,
        'user_data' => null,
        'kyc_level_override' => null,
        'kyc_level_override_reason' => null
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
        'shareholders' => 'Shareholders',
        'board_members' => 'BoardMembers',
        'validations' => 'Validations',
        'user_data' => 'UserData',
        'kyc_level_override' => 'KycLevelOverride',
        'kyc_level_override_reason' => 'KycLevelOverrideReason'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'shareholders' => 'setShareholders',
        'board_members' => 'setBoardMembers',
        'validations' => 'setValidations',
        'user_data' => 'setUserData',
        'kyc_level_override' => 'setKycLevelOverride',
        'kyc_level_override_reason' => 'setKycLevelOverrideReason'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'shareholders' => 'getShareholders',
        'board_members' => 'getBoardMembers',
        'validations' => 'getValidations',
        'user_data' => 'getUserData',
        'kyc_level_override' => 'getKycLevelOverride',
        'kyc_level_override_reason' => 'getKycLevelOverrideReason'
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

    const KYC_LEVEL_OVERRIDE_SUPERLIGHT_SERVICE = 'SUPERLIGHT_SERVICE';
    const KYC_LEVEL_OVERRIDE_LIGHT_SERVICE = 'LIGHT_SERVICE';
    const KYC_LEVEL_OVERRIDE_LIGHT_CROUDFUNDING = 'LIGHT_CROUDFUNDING';
    const KYC_LEVEL_OVERRIDE_STRONG_CROWDFUNDING = 'STRONG_CROWDFUNDING';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getKycLevelOverrideAllowableValues()
    {
        return [
            self::KYC_LEVEL_OVERRIDE_SUPERLIGHT_SERVICE,
            self::KYC_LEVEL_OVERRIDE_LIGHT_SERVICE,
            self::KYC_LEVEL_OVERRIDE_LIGHT_CROUDFUNDING,
            self::KYC_LEVEL_OVERRIDE_STRONG_CROWDFUNDING,
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
        $this->container['shareholders'] = isset($data['shareholders']) ? $data['shareholders'] : null;
        $this->container['board_members'] = isset($data['board_members']) ? $data['board_members'] : null;
        $this->container['validations'] = isset($data['validations']) ? $data['validations'] : null;
        $this->container['user_data'] = isset($data['user_data']) ? $data['user_data'] : null;
        $this->container['kyc_level_override'] = isset($data['kyc_level_override']) ? $data['kyc_level_override'] : null;
        $this->container['kyc_level_override_reason'] = isset($data['kyc_level_override_reason']) ? $data['kyc_level_override_reason'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getKycLevelOverrideAllowableValues();
        if (!is_null($this->container['kyc_level_override']) && !in_array($this->container['kyc_level_override'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'kyc_level_override', must be one of '%s'",
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
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets shareholders
     *
     * @return \MarketPay\Model\KycShareHolderContainerDto[]
     */
    public function getShareholders()
    {
        return $this->container['shareholders'];
    }

    /**
     * Sets shareholders
     *
     * @param \MarketPay\Model\KycShareHolderContainerDto[] $shareholders shareholders
     *
     * @return $this
     */
    public function setShareholders($shareholders)
    {
        $this->container['shareholders'] = $shareholders;

        return $this;
    }

    /**
     * Gets board_members
     *
     * @return \MarketPay\Model\KycBoardMemberContainerDto[]
     */
    public function getBoardMembers()
    {
        return $this->container['board_members'];
    }

    /**
     * Sets board_members
     *
     * @param \MarketPay\Model\KycBoardMemberContainerDto[] $board_members board_members
     *
     * @return $this
     */
    public function setBoardMembers($board_members)
    {
        $this->container['board_members'] = $board_members;

        return $this;
    }

    /**
     * Gets validations
     *
     * @return \MarketPay\Model\KycValidationPerLevelStatus[]
     */
    public function getValidations()
    {
        return $this->container['validations'];
    }

    /**
     * Sets validations
     *
     * @param \MarketPay\Model\KycValidationPerLevelStatus[] $validations validations
     *
     * @return $this
     */
    public function setValidations($validations)
    {
        $this->container['validations'] = $validations;

        return $this;
    }

    /**
     * Gets user_data
     *
     * @return \MarketPay\Model\KycLegalUserDataDto
     */
    public function getUserData()
    {
        return $this->container['user_data'];
    }

    /**
     * Sets user_data
     *
     * @param \MarketPay\Model\KycLegalUserDataDto $user_data user_data
     *
     * @return $this
     */
    public function setUserData($user_data)
    {
        $this->container['user_data'] = $user_data;

        return $this;
    }

    /**
     * Gets kyc_level_override
     *
     * @return string
     */
    public function getKycLevelOverride()
    {
        return $this->container['kyc_level_override'];
    }

    /**
     * Sets kyc_level_override
     *
     * @param string $kyc_level_override kyc_level_override
     *
     * @return $this
     */
    public function setKycLevelOverride($kyc_level_override)
    {
        $allowedValues = $this->getKycLevelOverrideAllowableValues();
        if (!is_null($kyc_level_override) && !in_array($kyc_level_override, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'kyc_level_override', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['kyc_level_override'] = $kyc_level_override;

        return $this;
    }

    /**
     * Gets kyc_level_override_reason
     *
     * @return string
     */
    public function getKycLevelOverrideReason()
    {
        return $this->container['kyc_level_override_reason'];
    }

    /**
     * Sets kyc_level_override_reason
     *
     * @param string $kyc_level_override_reason kyc_level_override_reason
     *
     * @return $this
     */
    public function setKycLevelOverrideReason($kyc_level_override_reason)
    {
        $this->container['kyc_level_override_reason'] = $kyc_level_override_reason;

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


