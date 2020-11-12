<?php
/**
 * Account
 *
 * PHP version 5
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Accounting API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * OpenAPI spec version: 2.4.4
 * Contact: api@xero.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.2.3
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace XeroAPI\XeroPHP\Models\Accounting;

use \ArrayAccess;
use \XeroAPI\XeroPHP\AccountingObjectSerializer;
use \XeroAPI\XeroPHP\StringUtil;
/**
 * Account Class Doc Comment
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Account implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Account';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'code' => 'string',
        'name' => 'string',
        'account_id' => 'string',
        'type' => '\XeroAPI\XeroPHP\Models\Accounting\AccountType',
        'bank_account_number' => 'string',
        'status' => 'string',
        'description' => 'string',
        'bank_account_type' => 'string',
        'currency_code' => '\XeroAPI\XeroPHP\Models\Accounting\CurrencyCode',
        'tax_type' => 'string',
        'enable_payments_to_account' => 'bool',
        'show_in_expense_claims' => 'bool',
        'class' => 'string',
        'system_account' => 'string',
        'reporting_code' => 'string',
        'reporting_code_name' => 'string',
        'has_attachments' => 'bool',
        'updated_date_utc' => 'string',
        'add_to_watchlist' => 'bool',
        'validation_errors' => '\XeroAPI\XeroPHP\Models\Accounting\ValidationError[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'code' => null,
        'name' => null,
        'account_id' => 'uuid',
        'type' => null,
        'bank_account_number' => null,
        'status' => null,
        'description' => null,
        'bank_account_type' => null,
        'currency_code' => null,
        'tax_type' => null,
        'enable_payments_to_account' => null,
        'show_in_expense_claims' => null,
        'class' => null,
        'system_account' => null,
        'reporting_code' => null,
        'reporting_code_name' => null,
        'has_attachments' => null,
        'updated_date_utc' => null,
        'add_to_watchlist' => null,
        'validation_errors' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'code' => 'Code',
        'name' => 'Name',
        'account_id' => 'AccountID',
        'type' => 'Type',
        'bank_account_number' => 'BankAccountNumber',
        'status' => 'Status',
        'description' => 'Description',
        'bank_account_type' => 'BankAccountType',
        'currency_code' => 'CurrencyCode',
        'tax_type' => 'TaxType',
        'enable_payments_to_account' => 'EnablePaymentsToAccount',
        'show_in_expense_claims' => 'ShowInExpenseClaims',
        'class' => 'Class',
        'system_account' => 'SystemAccount',
        'reporting_code' => 'ReportingCode',
        'reporting_code_name' => 'ReportingCodeName',
        'has_attachments' => 'HasAttachments',
        'updated_date_utc' => 'UpdatedDateUTC',
        'add_to_watchlist' => 'AddToWatchlist',
        'validation_errors' => 'ValidationErrors'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'code' => 'setCode',
        'name' => 'setName',
        'account_id' => 'setAccountId',
        'type' => 'setType',
        'bank_account_number' => 'setBankAccountNumber',
        'status' => 'setStatus',
        'description' => 'setDescription',
        'bank_account_type' => 'setBankAccountType',
        'currency_code' => 'setCurrencyCode',
        'tax_type' => 'setTaxType',
        'enable_payments_to_account' => 'setEnablePaymentsToAccount',
        'show_in_expense_claims' => 'setShowInExpenseClaims',
        'class' => 'setClass',
        'system_account' => 'setSystemAccount',
        'reporting_code' => 'setReportingCode',
        'reporting_code_name' => 'setReportingCodeName',
        'has_attachments' => 'setHasAttachments',
        'updated_date_utc' => 'setUpdatedDateUtc',
        'add_to_watchlist' => 'setAddToWatchlist',
        'validation_errors' => 'setValidationErrors'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'code' => 'getCode',
        'name' => 'getName',
        'account_id' => 'getAccountId',
        'type' => 'getType',
        'bank_account_number' => 'getBankAccountNumber',
        'status' => 'getStatus',
        'description' => 'getDescription',
        'bank_account_type' => 'getBankAccountType',
        'currency_code' => 'getCurrencyCode',
        'tax_type' => 'getTaxType',
        'enable_payments_to_account' => 'getEnablePaymentsToAccount',
        'show_in_expense_claims' => 'getShowInExpenseClaims',
        'class' => 'getClass',
        'system_account' => 'getSystemAccount',
        'reporting_code' => 'getReportingCode',
        'reporting_code_name' => 'getReportingCodeName',
        'has_attachments' => 'getHasAttachments',
        'updated_date_utc' => 'getUpdatedDateUtc',
        'add_to_watchlist' => 'getAddToWatchlist',
        'validation_errors' => 'getValidationErrors'
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
        return self::$openAPIModelName;
    }

    const STATUS_ACTIVE = 'ACTIVE';
    const STATUS_ARCHIVED = 'ARCHIVED';
    const STATUS_DELETED = 'DELETED';
    const BANK_ACCOUNT_TYPE_BANK = 'BANK';
    const BANK_ACCOUNT_TYPE_CREDITCARD = 'CREDITCARD';
    const BANK_ACCOUNT_TYPE_PAYPAL = 'PAYPAL';
    const BANK_ACCOUNT_TYPE_NONE = 'NONE';
    const BANK_ACCOUNT_TYPE_EMPTY = '';
    const MODEL_CLASS_ASSET = 'ASSET';
    const MODEL_CLASS_EQUITY = 'EQUITY';
    const MODEL_CLASS_EXPENSE = 'EXPENSE';
    const MODEL_CLASS_LIABILITY = 'LIABILITY';
    const MODEL_CLASS_REVENUE = 'REVENUE';
    const SYSTEM_ACCOUNT_DEBTORS = 'DEBTORS';
    const SYSTEM_ACCOUNT_CREDITORS = 'CREDITORS';
    const SYSTEM_ACCOUNT_BANKCURRENCYGAIN = 'BANKCURRENCYGAIN';
    const SYSTEM_ACCOUNT_GST = 'GST';
    const SYSTEM_ACCOUNT_GSTONIMPORTS = 'GSTONIMPORTS';
    const SYSTEM_ACCOUNT_HISTORICAL = 'HISTORICAL';
    const SYSTEM_ACCOUNT_REALISEDCURRENCYGAIN = 'REALISEDCURRENCYGAIN';
    const SYSTEM_ACCOUNT_RETAINEDEARNINGS = 'RETAINEDEARNINGS';
    const SYSTEM_ACCOUNT_ROUNDING = 'ROUNDING';
    const SYSTEM_ACCOUNT_TRACKINGTRANSFERS = 'TRACKINGTRANSFERS';
    const SYSTEM_ACCOUNT_UNPAIDEXPCLM = 'UNPAIDEXPCLM';
    const SYSTEM_ACCOUNT_UNREALISEDCURRENCYGAIN = 'UNREALISEDCURRENCYGAIN';
    const SYSTEM_ACCOUNT_WAGEPAYABLES = 'WAGEPAYABLES';
    const SYSTEM_ACCOUNT_CISASSETS = 'CISASSETS';
    const SYSTEM_ACCOUNT_CISASSET = 'CISASSET';
    const SYSTEM_ACCOUNT_CISLABOUR = 'CISLABOUR';
    const SYSTEM_ACCOUNT_CISLABOUREXPENSE = 'CISLABOUREXPENSE';
    const SYSTEM_ACCOUNT_CISLABOURINCOME = 'CISLABOURINCOME';
    const SYSTEM_ACCOUNT_CISLIABILITY = 'CISLIABILITY';
    const SYSTEM_ACCOUNT_CISMATERIALS = 'CISMATERIALS';
    const SYSTEM_ACCOUNT_EMPTY = '';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_ACTIVE,
            self::STATUS_ARCHIVED,
            self::STATUS_DELETED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getBankAccountTypeAllowableValues()
    {
        return [
            self::BANK_ACCOUNT_TYPE_BANK,
            self::BANK_ACCOUNT_TYPE_CREDITCARD,
            self::BANK_ACCOUNT_TYPE_PAYPAL,
            self::BANK_ACCOUNT_TYPE_NONE,
            self::BANK_ACCOUNT_TYPE_EMPTY,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getClassAllowableValues()
    {
        return [
            self::MODEL_CLASS_ASSET,
            self::MODEL_CLASS_EQUITY,
            self::MODEL_CLASS_EXPENSE,
            self::MODEL_CLASS_LIABILITY,
            self::MODEL_CLASS_REVENUE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSystemAccountAllowableValues()
    {
        return [
            self::SYSTEM_ACCOUNT_DEBTORS,
            self::SYSTEM_ACCOUNT_CREDITORS,
            self::SYSTEM_ACCOUNT_BANKCURRENCYGAIN,
            self::SYSTEM_ACCOUNT_GST,
            self::SYSTEM_ACCOUNT_GSTONIMPORTS,
            self::SYSTEM_ACCOUNT_HISTORICAL,
            self::SYSTEM_ACCOUNT_REALISEDCURRENCYGAIN,
            self::SYSTEM_ACCOUNT_RETAINEDEARNINGS,
            self::SYSTEM_ACCOUNT_ROUNDING,
            self::SYSTEM_ACCOUNT_TRACKINGTRANSFERS,
            self::SYSTEM_ACCOUNT_UNPAIDEXPCLM,
            self::SYSTEM_ACCOUNT_UNREALISEDCURRENCYGAIN,
            self::SYSTEM_ACCOUNT_WAGEPAYABLES,
            self::SYSTEM_ACCOUNT_CISASSETS,
            self::SYSTEM_ACCOUNT_CISASSET,
            self::SYSTEM_ACCOUNT_CISLABOUR,
            self::SYSTEM_ACCOUNT_CISLABOUREXPENSE,
            self::SYSTEM_ACCOUNT_CISLABOURINCOME,
            self::SYSTEM_ACCOUNT_CISLIABILITY,
            self::SYSTEM_ACCOUNT_CISMATERIALS,
            self::SYSTEM_ACCOUNT_EMPTY,
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
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['account_id'] = isset($data['account_id']) ? $data['account_id'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['bank_account_number'] = isset($data['bank_account_number']) ? $data['bank_account_number'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['bank_account_type'] = isset($data['bank_account_type']) ? $data['bank_account_type'] : null;
        $this->container['currency_code'] = isset($data['currency_code']) ? $data['currency_code'] : null;
        $this->container['tax_type'] = isset($data['tax_type']) ? $data['tax_type'] : null;
        $this->container['enable_payments_to_account'] = isset($data['enable_payments_to_account']) ? $data['enable_payments_to_account'] : null;
        $this->container['show_in_expense_claims'] = isset($data['show_in_expense_claims']) ? $data['show_in_expense_claims'] : null;
        $this->container['class'] = isset($data['class']) ? $data['class'] : null;
        $this->container['system_account'] = isset($data['system_account']) ? $data['system_account'] : null;
        $this->container['reporting_code'] = isset($data['reporting_code']) ? $data['reporting_code'] : null;
        $this->container['reporting_code_name'] = isset($data['reporting_code_name']) ? $data['reporting_code_name'] : null;
        $this->container['has_attachments'] = isset($data['has_attachments']) ? $data['has_attachments'] : false;
        $this->container['updated_date_utc'] = isset($data['updated_date_utc']) ? $data['updated_date_utc'] : null;
        $this->container['add_to_watchlist'] = isset($data['add_to_watchlist']) ? $data['add_to_watchlist'] : null;
        $this->container['validation_errors'] = isset($data['validation_errors']) ? $data['validation_errors'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 150)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 150.";
        }

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getBankAccountTypeAllowableValues();
        if (!is_null($this->container['bank_account_type']) && !in_array($this->container['bank_account_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'bank_account_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getClassAllowableValues();
        if (!is_null($this->container['class']) && !in_array($this->container['class'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'class', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getSystemAccountAllowableValues();
        if (!is_null($this->container['system_account']) && !in_array($this->container['system_account'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'system_account', must be one of '%s'",
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
     * Gets code
     *
     * @return string|null
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param string|null $code Customer defined alpha numeric account code e.g 200 or SALES (max length = 10)
     *
     * @return $this
     */
    public function setCode($code)
    {

        $this->container['code'] = $code;

        return $this;
    }



    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name Name of account (max length = 150)
     *
     * @return $this
     */
    public function setName($name)
    {
        if (!is_null($name) && (mb_strlen($name) > 150)) {
            throw new \InvalidArgumentException('invalid length for $name when calling Account., must be smaller than or equal to 150.');
        }


        $this->container['name'] = $name;

        return $this;
    }



    /**
     * Gets account_id
     *
     * @return string|null
     */
    public function getAccountId()
    {
        return $this->container['account_id'];
    }

    /**
     * Sets account_id
     *
     * @param string|null $account_id The Xero identifier for an account – specified as a string following  the endpoint name   e.g. /297c2dc5-cc47-4afd-8ec8-74990b8761e9
     *
     * @return $this
     */
    public function setAccountId($account_id)
    {

        $this->container['account_id'] = $account_id;

        return $this;
    }



    /**
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type type
     *
     * @return $this
     */
    public function setType($type)
    {

        $this->container['type'] = $type;

        return $this;
    }



    /**
     * Gets bank_account_number
     *
     * @return string|null
     */
    public function getBankAccountNumber()
    {
        return $this->container['bank_account_number'];
    }

    /**
     * Sets bank_account_number
     *
     * @param string|null $bank_account_number For bank accounts only (Account Type BANK)
     *
     * @return $this
     */
    public function setBankAccountNumber($bank_account_number)
    {

        $this->container['bank_account_number'] = $bank_account_number;

        return $this;
    }



    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status Accounts with a status of ACTIVE can be updated to ARCHIVED. See Account Status Codes
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
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description Description of the Account. Valid for all types of accounts except bank accounts (max length = 4000)
     *
     * @return $this
     */
    public function setDescription($description)
    {

        $this->container['description'] = $description;

        return $this;
    }



    /**
     * Gets bank_account_type
     *
     * @return string|null
     */
    public function getBankAccountType()
    {
        return $this->container['bank_account_type'];
    }

    /**
     * Sets bank_account_type
     *
     * @param string|null $bank_account_type For bank accounts only. See Bank Account types
     *
     * @return $this
     */
    public function setBankAccountType($bank_account_type)
    {
        $allowedValues = $this->getBankAccountTypeAllowableValues();
        if (!is_null($bank_account_type) && !in_array($bank_account_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'bank_account_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }

        $this->container['bank_account_type'] = $bank_account_type;

        return $this;
    }



    /**
     * Gets currency_code
     *
     * @return string|null
     */
    public function getCurrencyCode()
    {
        return $this->container['currency_code'];
    }

    /**
     * Sets currency_code
     *
     * @param string|null $currency_code currency_code
     *
     * @return $this
     */
    public function setCurrencyCode($currency_code)
    {

        $this->container['currency_code'] = $currency_code;

        return $this;
    }



    /**
     * Gets tax_type
     *
     * @return string|null
     */
    public function getTaxType()
    {
        return $this->container['tax_type'];
    }

    /**
     * Sets tax_type
     *
     * @param string|null $tax_type The tax type from TaxRates
     *
     * @return $this
     */
    public function setTaxType($tax_type)
    {

        $this->container['tax_type'] = $tax_type;

        return $this;
    }



    /**
     * Gets enable_payments_to_account
     *
     * @return bool|null
     */
    public function getEnablePaymentsToAccount()
    {
        return $this->container['enable_payments_to_account'];
    }

    /**
     * Sets enable_payments_to_account
     *
     * @param bool|null $enable_payments_to_account Boolean – describes whether account can have payments applied to it
     *
     * @return $this
     */
    public function setEnablePaymentsToAccount($enable_payments_to_account)
    {

        $this->container['enable_payments_to_account'] = $enable_payments_to_account;

        return $this;
    }



    /**
     * Gets show_in_expense_claims
     *
     * @return bool|null
     */
    public function getShowInExpenseClaims()
    {
        return $this->container['show_in_expense_claims'];
    }

    /**
     * Sets show_in_expense_claims
     *
     * @param bool|null $show_in_expense_claims Boolean – describes whether account code is available for use with expense claims
     *
     * @return $this
     */
    public function setShowInExpenseClaims($show_in_expense_claims)
    {

        $this->container['show_in_expense_claims'] = $show_in_expense_claims;

        return $this;
    }



    /**
     * Gets class
     *
     * @return string|null
     */
    public function getClass()
    {
        return $this->container['class'];
    }

    /**
     * Sets class
     *
     * @param string|null $class See Account Class Types
     *
     * @return $this
     */
    public function setClass($class)
    {
        $allowedValues = $this->getClassAllowableValues();
        if (!is_null($class) && !in_array($class, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'class', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }

        $this->container['class'] = $class;

        return $this;
    }


    /**
     * Gets system_account
     *
     * @return string|null
     */
    public function getSystemAccount()
    {
        return $this->container['system_account'];
    }

    /**
     * Sets system_account
     *
     * @param string|null $system_account If this is a system account then this element is returned. See System Account types. Note that non-system accounts may have this element set as either “” or null.
     *
     * @return $this
     */
    public function setSystemAccount($system_account)
    {
        $allowedValues = $this->getSystemAccountAllowableValues();
        if (!is_null($system_account) && !in_array($system_account, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'system_account', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }

        $this->container['system_account'] = $system_account;

        return $this;
    }


    /**
     * Gets reporting_code
     *
     * @return string|null
     */
    public function getReportingCode()
    {
        return $this->container['reporting_code'];
    }

    /**
     * Sets reporting_code
     *
     * @param string|null $reporting_code Shown if set
     *
     * @return $this
     */
    public function setReportingCode($reporting_code)
    {

        $this->container['reporting_code'] = $reporting_code;

        return $this;
    }



    /**
     * Gets reporting_code_name
     *
     * @return string|null
     */
    public function getReportingCodeName()
    {
        return $this->container['reporting_code_name'];
    }

    /**
     * Sets reporting_code_name
     *
     * @param string|null $reporting_code_name Shown if set
     *
     * @return $this
     */
    public function setReportingCodeName($reporting_code_name)
    {

        $this->container['reporting_code_name'] = $reporting_code_name;

        return $this;
    }


    /**
     * Gets has_attachments
     *
     * @return bool|null
     */
    public function getHasAttachments()
    {
        return $this->container['has_attachments'];
    }

    /**
     * Sets has_attachments
     *
     * @param bool|null $has_attachments boolean to indicate if an account has an attachment (read only)
     *
     * @return $this
     */
    public function setHasAttachments($has_attachments)
    {

        $this->container['has_attachments'] = $has_attachments;

        return $this;
    }


    /**
     * Gets updated_date_utc
     *
     * @return string|null
     */
    public function getUpdatedDateUtc()
    {
        return $this->container['updated_date_utc'];
    }
    public function getUpdatedDateUtcAsDate()
    {
      if ($this->getUpdatedDateUtc() != null) {
        return StringUtil::convertStringToDateTime($this->getUpdatedDateUtc());
      } else {
        throw new Exception('can not convert null string to date');
      } 
    }

    /**
     * Sets updated_date_utc
     *
     * @param string|null $updated_date_utc Last modified date UTC format
     *
     * @return $this
     */
    public function setUpdatedDateUtc($updated_date_utc)
    {

        $this->container['updated_date_utc'] = $updated_date_utc;

        return $this;
    }


    /**
     * Gets add_to_watchlist
     *
     * @return bool|null
     */
    public function getAddToWatchlist()
    {
        return $this->container['add_to_watchlist'];
    }

    /**
     * Sets add_to_watchlist
     *
     * @param bool|null $add_to_watchlist Boolean – describes whether the account is shown in the watchlist widget on the dashboard
     *
     * @return $this
     */
    public function setAddToWatchlist($add_to_watchlist)
    {

        $this->container['add_to_watchlist'] = $add_to_watchlist;

        return $this;
    }



    /**
     * Gets validation_errors
     *
     * @return \XeroAPI\XeroPHP\Models\Accounting\ValidationError[]|null
     */
    public function getValidationErrors()
    {
        return $this->container['validation_errors'];
    }

    /**
     * Sets validation_errors
     *
     * @param \XeroAPI\XeroPHP\Models\Accounting\ValidationError[]|null $validation_errors Displays array of validation error messages from the API
     *
     * @return $this
     */
    public function setValidationErrors($validation_errors)
    {

        $this->container['validation_errors'] = $validation_errors;

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
        return json_encode(
            AccountingObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}


