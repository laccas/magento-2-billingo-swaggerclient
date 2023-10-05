<?php
/**
 * Feature
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
use \Swagger\Client\ObjectSerializer;

/**
 * Feature Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Feature
{
    /**
     * Possible values of this enum
     */
    const API_LIMIT_BASIC = 'api_limit_basic';
    const API_LIMIT_MAX = 'api_limit_max';
    const API_LIMIT_PRO = 'api_limit_pro';
    const API_LIMIT_PRO_LIMITED = 'api_limit_pro_limited';
    const API_LIMIT_STANDARD = 'api_limit_standard';
    const BANKSYNC_PLUS = 'banksync_plus';
    const BILLINGO_BUSINESS = 'billingo_business';
    const BILLINGO_ONE = 'billingo_one';
    const CAMPAIGN_MANAGER_BASIC = 'campaign_manager_basic';
    const CAMPAIGN_MANAGER_STANDARD = 'campaign_manager_standard';
    const CEGINFO_ENTERPRISE = 'ceginfo_enterprise';
    const CEGINFO_PRO = 'ceginfo_pro';
    const CEGINFO_STANDARD = 'ceginfo_standard';
    const FLAT_TAX_PLUS = 'flat_tax_plus';
    const INNOVATOR = 'innovator';
    const INVENTORY = 'inventory';
    const LIMIT_INCREASE = 'limit_increase';
    const MASTER = 'master';
    const PARTNERMONITOR_BASIC = 'partnermonitor_basic';
    const PARTNERMONITOR_PRO = 'partnermonitor_pro';
    const PARTNERMONITOR_STANDARD = 'partnermonitor_standard';
    const SOFTPOS = 'softpos';
    const SUBSCRIPTION_BASIC = 'subscription_basic';
    const SUBSCRIPTION_PRO = 'subscription_pro';
    const SUBSCRIPTION_STANDARD = 'subscription_standard';
    const TENDERMONITOR_STANDARD = 'tendermonitor_standard';
    const TENDERMONITOR_VIP = 'tendermonitor_vip';
    const WHITELABEL = 'whitelabel';
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::API_LIMIT_BASIC,
            self::API_LIMIT_MAX,
            self::API_LIMIT_PRO,
            self::API_LIMIT_PRO_LIMITED,
            self::API_LIMIT_STANDARD,
            self::BANKSYNC_PLUS,
            self::BILLINGO_BUSINESS,
            self::BILLINGO_ONE,
            self::CAMPAIGN_MANAGER_BASIC,
            self::CAMPAIGN_MANAGER_STANDARD,
            self::CEGINFO_ENTERPRISE,
            self::CEGINFO_PRO,
            self::CEGINFO_STANDARD,
            self::FLAT_TAX_PLUS,
            self::INNOVATOR,
            self::INVENTORY,
            self::LIMIT_INCREASE,
            self::MASTER,
            self::PARTNERMONITOR_BASIC,
            self::PARTNERMONITOR_PRO,
            self::PARTNERMONITOR_STANDARD,
            self::SOFTPOS,
            self::SUBSCRIPTION_BASIC,
            self::SUBSCRIPTION_PRO,
            self::SUBSCRIPTION_STANDARD,
            self::TENDERMONITOR_STANDARD,
            self::TENDERMONITOR_VIP,
            self::WHITELABEL
        ];
    }
}
