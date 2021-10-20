<?php
/**
 * PropertyValidationCountry
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
 * Swagger Codegen version: 2.4.23
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
 * PropertyValidationCountry Class Doc Comment
 *
 * @category Class
 * @package  MarketPay
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PropertyValidationCountry implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PropertyValidationCountry';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'value' => 'string',
        'status' => 'string',
        'operator_comments' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'value' => null,
        'status' => null,
        'operator_comments' => null
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
        'value' => 'Value',
        'status' => 'Status',
        'operator_comments' => 'OperatorComments'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'value' => 'setValue',
        'status' => 'setStatus',
        'operator_comments' => 'setOperatorComments'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'value' => 'getValue',
        'status' => 'getStatus',
        'operator_comments' => 'getOperatorComments'
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

    const VALUE_NOT_SPECIFIED = 'NotSpecified';
    const VALUE_AD = 'AD';
    const VALUE_AE = 'AE';
    const VALUE_AF = 'AF';
    const VALUE_AG = 'AG';
    const VALUE_AI = 'AI';
    const VALUE_AL = 'AL';
    const VALUE_AM = 'AM';
    const VALUE_AO = 'AO';
    const VALUE_AQ = 'AQ';
    const VALUE_AR = 'AR';
    const VALUE__AS = 'AS';
    const VALUE_AT = 'AT';
    const VALUE_AU = 'AU';
    const VALUE_AW = 'AW';
    const VALUE_AX = 'AX';
    const VALUE_AZ = 'AZ';
    const VALUE_BA = 'BA';
    const VALUE_BB = 'BB';
    const VALUE_BD = 'BD';
    const VALUE_BE = 'BE';
    const VALUE_BF = 'BF';
    const VALUE_BG = 'BG';
    const VALUE_BH = 'BH';
    const VALUE_BI = 'BI';
    const VALUE_BJ = 'BJ';
    const VALUE_BL = 'BL';
    const VALUE_BM = 'BM';
    const VALUE_BN = 'BN';
    const VALUE_BO = 'BO';
    const VALUE_BQ = 'BQ';
    const VALUE_BR = 'BR';
    const VALUE_BS = 'BS';
    const VALUE_BT = 'BT';
    const VALUE_BV = 'BV';
    const VALUE_BW = 'BW';
    const VALUE_BY = 'BY';
    const VALUE_BZ = 'BZ';
    const VALUE_CA = 'CA';
    const VALUE_CC = 'CC';
    const VALUE_CD = 'CD';
    const VALUE_CF = 'CF';
    const VALUE_CG = 'CG';
    const VALUE_CH = 'CH';
    const VALUE_CI = 'CI';
    const VALUE_CK = 'CK';
    const VALUE_CL = 'CL';
    const VALUE_CM = 'CM';
    const VALUE_CN = 'CN';
    const VALUE_CO = 'CO';
    const VALUE_CR = 'CR';
    const VALUE_CU = 'CU';
    const VALUE_CV = 'CV';
    const VALUE_CW = 'CW';
    const VALUE_CX = 'CX';
    const VALUE_CY = 'CY';
    const VALUE_CZ = 'CZ';
    const VALUE_DE = 'DE';
    const VALUE_DJ = 'DJ';
    const VALUE_DK = 'DK';
    const VALUE_DM = 'DM';
    const VALUE__DO = 'DO';
    const VALUE_DZ = 'DZ';
    const VALUE_EC = 'EC';
    const VALUE_EE = 'EE';
    const VALUE_EG = 'EG';
    const VALUE_EH = 'EH';
    const VALUE_ER = 'ER';
    const VALUE_ES = 'ES';
    const VALUE_ET = 'ET';
    const VALUE_FI = 'FI';
    const VALUE_FJ = 'FJ';
    const VALUE_FK = 'FK';
    const VALUE_FM = 'FM';
    const VALUE_FO = 'FO';
    const VALUE_FR = 'FR';
    const VALUE_GA = 'GA';
    const VALUE_GB = 'GB';
    const VALUE_GD = 'GD';
    const VALUE_GE = 'GE';
    const VALUE_GF = 'GF';
    const VALUE_GG = 'GG';
    const VALUE_GH = 'GH';
    const VALUE_GI = 'GI';
    const VALUE_GL = 'GL';
    const VALUE_GM = 'GM';
    const VALUE_GN = 'GN';
    const VALUE_GP = 'GP';
    const VALUE_GQ = 'GQ';
    const VALUE_GR = 'GR';
    const VALUE_GS = 'GS';
    const VALUE_GT = 'GT';
    const VALUE_GU = 'GU';
    const VALUE_GW = 'GW';
    const VALUE_GY = 'GY';
    const VALUE_HK = 'HK';
    const VALUE_HM = 'HM';
    const VALUE_HN = 'HN';
    const VALUE_HR = 'HR';
    const VALUE_HT = 'HT';
    const VALUE_HU = 'HU';
    const VALUE_ID = 'ID';
    const VALUE_IE = 'IE';
    const VALUE_IL = 'IL';
    const VALUE_IM = 'IM';
    const VALUE_IN = 'IN';
    const VALUE_IO = 'IO';
    const VALUE_IQ = 'IQ';
    const VALUE_IR = 'IR';
    const VALUE_IS = 'IS';
    const VALUE_IT = 'IT';
    const VALUE_JE = 'JE';
    const VALUE_JM = 'JM';
    const VALUE_JO = 'JO';
    const VALUE_JP = 'JP';
    const VALUE_KE = 'KE';
    const VALUE_KG = 'KG';
    const VALUE_KH = 'KH';
    const VALUE_KI = 'KI';
    const VALUE_KM = 'KM';
    const VALUE_KN = 'KN';
    const VALUE_KP = 'KP';
    const VALUE_KR = 'KR';
    const VALUE_KW = 'KW';
    const VALUE_KY = 'KY';
    const VALUE_KZ = 'KZ';
    const VALUE_LA = 'LA';
    const VALUE_LB = 'LB';
    const VALUE_LC = 'LC';
    const VALUE_LI = 'LI';
    const VALUE_LK = 'LK';
    const VALUE_LR = 'LR';
    const VALUE_LS = 'LS';
    const VALUE_LT = 'LT';
    const VALUE_LU = 'LU';
    const VALUE_LV = 'LV';
    const VALUE_LY = 'LY';
    const VALUE_MA = 'MA';
    const VALUE_MC = 'MC';
    const VALUE_MD = 'MD';
    const VALUE_ME = 'ME';
    const VALUE_MF = 'MF';
    const VALUE_MG = 'MG';
    const VALUE_MH = 'MH';
    const VALUE_MK = 'MK';
    const VALUE_ML = 'ML';
    const VALUE_MM = 'MM';
    const VALUE_MN = 'MN';
    const VALUE_MO = 'MO';
    const VALUE_MP = 'MP';
    const VALUE_MQ = 'MQ';
    const VALUE_MR = 'MR';
    const VALUE_MS = 'MS';
    const VALUE_MT = 'MT';
    const VALUE_MU = 'MU';
    const VALUE_MV = 'MV';
    const VALUE_MW = 'MW';
    const VALUE_MX = 'MX';
    const VALUE_MY = 'MY';
    const VALUE_MZ = 'MZ';
    const VALUE_NA = 'NA';
    const VALUE_NC = 'NC';
    const VALUE_NE = 'NE';
    const VALUE_NF = 'NF';
    const VALUE_NG = 'NG';
    const VALUE_NI = 'NI';
    const VALUE_NL = 'NL';
    const VALUE_NO = 'NO';
    const VALUE_NP = 'NP';
    const VALUE_NR = 'NR';
    const VALUE_NU = 'NU';
    const VALUE_NZ = 'NZ';
    const VALUE_OM = 'OM';
    const VALUE_PA = 'PA';
    const VALUE_PE = 'PE';
    const VALUE_PF = 'PF';
    const VALUE_PG = 'PG';
    const VALUE_PH = 'PH';
    const VALUE_PK = 'PK';
    const VALUE_PL = 'PL';
    const VALUE_PM = 'PM';
    const VALUE_PN = 'PN';
    const VALUE_PR = 'PR';
    const VALUE_PS = 'PS';
    const VALUE_PT = 'PT';
    const VALUE_PW = 'PW';
    const VALUE_PY = 'PY';
    const VALUE_QA = 'QA';
    const VALUE_RE = 'RE';
    const VALUE_RO = 'RO';
    const VALUE_RS = 'RS';
    const VALUE_RU = 'RU';
    const VALUE_RW = 'RW';
    const VALUE_SA = 'SA';
    const VALUE_SB = 'SB';
    const VALUE_SC = 'SC';
    const VALUE_SD = 'SD';
    const VALUE_SE = 'SE';
    const VALUE_SG = 'SG';
    const VALUE_SH = 'SH';
    const VALUE_SI = 'SI';
    const VALUE_SJ = 'SJ';
    const VALUE_SK = 'SK';
    const VALUE_SL = 'SL';
    const VALUE_SM = 'SM';
    const VALUE_SN = 'SN';
    const VALUE_SO = 'SO';
    const VALUE_SR = 'SR';
    const VALUE_SS = 'SS';
    const VALUE_ST = 'ST';
    const VALUE_SV = 'SV';
    const VALUE_SX = 'SX';
    const VALUE_SY = 'SY';
    const VALUE_SZ = 'SZ';
    const VALUE_TC = 'TC';
    const VALUE_TD = 'TD';
    const VALUE_TF = 'TF';
    const VALUE_TG = 'TG';
    const VALUE_TH = 'TH';
    const VALUE_TJ = 'TJ';
    const VALUE_TK = 'TK';
    const VALUE_TL = 'TL';
    const VALUE_TM = 'TM';
    const VALUE_TN = 'TN';
    const VALUE_TO = 'TO';
    const VALUE_TR = 'TR';
    const VALUE_TT = 'TT';
    const VALUE_TV = 'TV';
    const VALUE_TW = 'TW';
    const VALUE_TZ = 'TZ';
    const VALUE_UA = 'UA';
    const VALUE_UG = 'UG';
    const VALUE_UM = 'UM';
    const VALUE_US = 'US';
    const VALUE_UY = 'UY';
    const VALUE_UZ = 'UZ';
    const VALUE_VA = 'VA';
    const VALUE_VC = 'VC';
    const VALUE_VE = 'VE';
    const VALUE_VG = 'VG';
    const VALUE_VI = 'VI';
    const VALUE_VN = 'VN';
    const VALUE_VU = 'VU';
    const VALUE_WF = 'WF';
    const VALUE_WS = 'WS';
    const VALUE_YE = 'YE';
    const VALUE_YT = 'YT';
    const VALUE_ZA = 'ZA';
    const VALUE_ZM = 'ZM';
    const VALUE_ZW = 'ZW';
    const STATUS_MISSING = 'MISSING';
    const STATUS_NOT_VALIDATED = 'NOT_VALIDATED';
    const STATUS_ACCEPTED = 'ACCEPTED';
    const STATUS_REJECTED = 'REJECTED';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getValueAllowableValues()
    {
        return [
            self::VALUE_NOT_SPECIFIED,
            self::VALUE_AD,
            self::VALUE_AE,
            self::VALUE_AF,
            self::VALUE_AG,
            self::VALUE_AI,
            self::VALUE_AL,
            self::VALUE_AM,
            self::VALUE_AO,
            self::VALUE_AQ,
            self::VALUE_AR,
            self::VALUE__AS,
            self::VALUE_AT,
            self::VALUE_AU,
            self::VALUE_AW,
            self::VALUE_AX,
            self::VALUE_AZ,
            self::VALUE_BA,
            self::VALUE_BB,
            self::VALUE_BD,
            self::VALUE_BE,
            self::VALUE_BF,
            self::VALUE_BG,
            self::VALUE_BH,
            self::VALUE_BI,
            self::VALUE_BJ,
            self::VALUE_BL,
            self::VALUE_BM,
            self::VALUE_BN,
            self::VALUE_BO,
            self::VALUE_BQ,
            self::VALUE_BR,
            self::VALUE_BS,
            self::VALUE_BT,
            self::VALUE_BV,
            self::VALUE_BW,
            self::VALUE_BY,
            self::VALUE_BZ,
            self::VALUE_CA,
            self::VALUE_CC,
            self::VALUE_CD,
            self::VALUE_CF,
            self::VALUE_CG,
            self::VALUE_CH,
            self::VALUE_CI,
            self::VALUE_CK,
            self::VALUE_CL,
            self::VALUE_CM,
            self::VALUE_CN,
            self::VALUE_CO,
            self::VALUE_CR,
            self::VALUE_CU,
            self::VALUE_CV,
            self::VALUE_CW,
            self::VALUE_CX,
            self::VALUE_CY,
            self::VALUE_CZ,
            self::VALUE_DE,
            self::VALUE_DJ,
            self::VALUE_DK,
            self::VALUE_DM,
            self::VALUE__DO,
            self::VALUE_DZ,
            self::VALUE_EC,
            self::VALUE_EE,
            self::VALUE_EG,
            self::VALUE_EH,
            self::VALUE_ER,
            self::VALUE_ES,
            self::VALUE_ET,
            self::VALUE_FI,
            self::VALUE_FJ,
            self::VALUE_FK,
            self::VALUE_FM,
            self::VALUE_FO,
            self::VALUE_FR,
            self::VALUE_GA,
            self::VALUE_GB,
            self::VALUE_GD,
            self::VALUE_GE,
            self::VALUE_GF,
            self::VALUE_GG,
            self::VALUE_GH,
            self::VALUE_GI,
            self::VALUE_GL,
            self::VALUE_GM,
            self::VALUE_GN,
            self::VALUE_GP,
            self::VALUE_GQ,
            self::VALUE_GR,
            self::VALUE_GS,
            self::VALUE_GT,
            self::VALUE_GU,
            self::VALUE_GW,
            self::VALUE_GY,
            self::VALUE_HK,
            self::VALUE_HM,
            self::VALUE_HN,
            self::VALUE_HR,
            self::VALUE_HT,
            self::VALUE_HU,
            self::VALUE_ID,
            self::VALUE_IE,
            self::VALUE_IL,
            self::VALUE_IM,
            self::VALUE_IN,
            self::VALUE_IO,
            self::VALUE_IQ,
            self::VALUE_IR,
            self::VALUE_IS,
            self::VALUE_IT,
            self::VALUE_JE,
            self::VALUE_JM,
            self::VALUE_JO,
            self::VALUE_JP,
            self::VALUE_KE,
            self::VALUE_KG,
            self::VALUE_KH,
            self::VALUE_KI,
            self::VALUE_KM,
            self::VALUE_KN,
            self::VALUE_KP,
            self::VALUE_KR,
            self::VALUE_KW,
            self::VALUE_KY,
            self::VALUE_KZ,
            self::VALUE_LA,
            self::VALUE_LB,
            self::VALUE_LC,
            self::VALUE_LI,
            self::VALUE_LK,
            self::VALUE_LR,
            self::VALUE_LS,
            self::VALUE_LT,
            self::VALUE_LU,
            self::VALUE_LV,
            self::VALUE_LY,
            self::VALUE_MA,
            self::VALUE_MC,
            self::VALUE_MD,
            self::VALUE_ME,
            self::VALUE_MF,
            self::VALUE_MG,
            self::VALUE_MH,
            self::VALUE_MK,
            self::VALUE_ML,
            self::VALUE_MM,
            self::VALUE_MN,
            self::VALUE_MO,
            self::VALUE_MP,
            self::VALUE_MQ,
            self::VALUE_MR,
            self::VALUE_MS,
            self::VALUE_MT,
            self::VALUE_MU,
            self::VALUE_MV,
            self::VALUE_MW,
            self::VALUE_MX,
            self::VALUE_MY,
            self::VALUE_MZ,
            self::VALUE_NA,
            self::VALUE_NC,
            self::VALUE_NE,
            self::VALUE_NF,
            self::VALUE_NG,
            self::VALUE_NI,
            self::VALUE_NL,
            self::VALUE_NO,
            self::VALUE_NP,
            self::VALUE_NR,
            self::VALUE_NU,
            self::VALUE_NZ,
            self::VALUE_OM,
            self::VALUE_PA,
            self::VALUE_PE,
            self::VALUE_PF,
            self::VALUE_PG,
            self::VALUE_PH,
            self::VALUE_PK,
            self::VALUE_PL,
            self::VALUE_PM,
            self::VALUE_PN,
            self::VALUE_PR,
            self::VALUE_PS,
            self::VALUE_PT,
            self::VALUE_PW,
            self::VALUE_PY,
            self::VALUE_QA,
            self::VALUE_RE,
            self::VALUE_RO,
            self::VALUE_RS,
            self::VALUE_RU,
            self::VALUE_RW,
            self::VALUE_SA,
            self::VALUE_SB,
            self::VALUE_SC,
            self::VALUE_SD,
            self::VALUE_SE,
            self::VALUE_SG,
            self::VALUE_SH,
            self::VALUE_SI,
            self::VALUE_SJ,
            self::VALUE_SK,
            self::VALUE_SL,
            self::VALUE_SM,
            self::VALUE_SN,
            self::VALUE_SO,
            self::VALUE_SR,
            self::VALUE_SS,
            self::VALUE_ST,
            self::VALUE_SV,
            self::VALUE_SX,
            self::VALUE_SY,
            self::VALUE_SZ,
            self::VALUE_TC,
            self::VALUE_TD,
            self::VALUE_TF,
            self::VALUE_TG,
            self::VALUE_TH,
            self::VALUE_TJ,
            self::VALUE_TK,
            self::VALUE_TL,
            self::VALUE_TM,
            self::VALUE_TN,
            self::VALUE_TO,
            self::VALUE_TR,
            self::VALUE_TT,
            self::VALUE_TV,
            self::VALUE_TW,
            self::VALUE_TZ,
            self::VALUE_UA,
            self::VALUE_UG,
            self::VALUE_UM,
            self::VALUE_US,
            self::VALUE_UY,
            self::VALUE_UZ,
            self::VALUE_VA,
            self::VALUE_VC,
            self::VALUE_VE,
            self::VALUE_VG,
            self::VALUE_VI,
            self::VALUE_VN,
            self::VALUE_VU,
            self::VALUE_WF,
            self::VALUE_WS,
            self::VALUE_YE,
            self::VALUE_YT,
            self::VALUE_ZA,
            self::VALUE_ZM,
            self::VALUE_ZW,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_MISSING,
            self::STATUS_NOT_VALIDATED,
            self::STATUS_ACCEPTED,
            self::STATUS_REJECTED,
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
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['operator_comments'] = isset($data['operator_comments']) ? $data['operator_comments'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getValueAllowableValues();
        if (!is_null($this->container['value']) && !in_array($this->container['value'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'value', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
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
     * Gets value
     *
     * @return string
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     *
     * @param string $value value
     *
     * @return $this
     */
    public function setValue($value)
    {
        $allowedValues = $this->getValueAllowableValues();
        if (!is_null($value) && !in_array($value, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'value', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['value'] = $value;

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
        if (!is_null($status) && !in_array($status, $allowedValues, true)) {
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
     * Gets operator_comments
     *
     * @return string
     */
    public function getOperatorComments()
    {
        return $this->container['operator_comments'];
    }

    /**
     * Sets operator_comments
     *
     * @param string $operator_comments operator_comments
     *
     * @return $this
     */
    public function setOperatorComments($operator_comments)
    {
        $this->container['operator_comments'] = $operator_comments;

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


