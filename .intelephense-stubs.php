<?php

/**
 * Intelephense stubs for PrestaShop 1.7.x classes
 * This file helps the IDE understand PrestaShop core classes
 */

namespace PrestaShop\PrestaShop\Core\Payment;

/**
 * PrestaShop PaymentOption class
 */
class PaymentOption
{
    /**
     * Set module name
     * @param string $moduleName
     * @return $this
     */
    public function setModuleName($moduleName)
    {
        return $this;
    }

    /**
     * Set call to action text
     * @param string $text
     * @return $this
     */
    public function setCallToActionText($text)
    {
        return $this;
    }

    /**
     * Set action URL
     * @param string $action
     * @return $this
     */
    public function setAction($action)
    {
        return $this;
    }

    /**
     * Set logo URL
     * @param string $logo
     * @return $this
     */
    public function setLogo($logo)
    {
        return $this;
    }

    /**
     * Set additional information
     * @param string $info
     * @return $this
     */
    public function setAdditionalInformation($info)
    {
        return $this;
    }
}

namespace PrestaShop\PrestaShop\Core\Grid\Column\Type;

/**
 * DataColumn class for PrestaShop Grid system
 */
class DataColumn
{
    /**
     * Constructor
     * @param string $id Column ID
     */
    public function __construct($id) {}

    /**
     * Set column name
     * @param string $name Column name
     * @return $this
     */
    public function setName($name)
    {
        return $this;
    }

    /**
     * Set column options
     * @param array $options Options array
     * @return $this
     */
    public function setOptions(array $options)
    {
        return $this;
    }
}

namespace PrestaShop\PrestaShop\Core\Grid\Definition;

/**
 * GridDefinitionInterface for PrestaShop Grid system
 */
interface GridDefinitionInterface
{
    /**
     * Get columns collection
     * @return \PrestaShop\PrestaShop\Core\Grid\Column\ColumnCollectionInterface
     */
    public function getColumns();
}

namespace PrestaShop\PrestaShop\Core\Grid\Column;

/**
 * ColumnCollectionInterface for PrestaShop Grid system
 */
interface ColumnCollectionInterface
{
    /**
     * Add column after specific column
     * @param string $id Column ID to add after
     * @param \PrestaShop\PrestaShop\Core\Grid\Column\Type\DataColumn $column Column to add
     * @return $this
     */
    public function addAfter($id, $column);

    /**
     * Add column
     * @param \PrestaShop\PrestaShop\Core\Grid\Column\Type\DataColumn $column Column to add
     * @return $this
     */
    public function add($column);
}

namespace Doctrine\DBAL\Query;

/**
 * QueryBuilder class for Doctrine DBAL
 */
class QueryBuilder
{
    /**
     * Add SELECT clause
     * @param string|array $select Select fields
     * @return $this
     */
    public function addSelect($select)
    {
        return $this;
    }

    /**
     * Add WHERE condition
     * @param string $where WHERE condition
     * @param mixed $value Parameter value
     * @return $this
     */
    public function where($where, $value = null)
    {
        return $this;
    }

    /**
     * Add AND WHERE condition
     * @param string $where WHERE condition
     * @param mixed $value Parameter value
     * @return $this
     */
    public function andWhere($where, $value = null)
    {
        return $this;
    }

    /**
     * Add OR WHERE condition
     * @param string $where WHERE condition
     * @param mixed $value Parameter value
     * @return $this
     */
    public function orWhere($where, $value = null)
    {
        return $this;
    }

    /**
     * Set parameter value
     * @param string $key Parameter key
     * @param mixed $value Parameter value
     * @return $this
     */
    public function setParameter($key, $value)
    {
        return $this;
    }

    /**
     * Set multiple parameters
     * @param array $params Parameters array
     * @return $this
     */
    public function setParameters(array $params)
    {
        return $this;
    }

    /**
     * Add JOIN clause
     * @param string $fromAlias Alias of the table to join
     * @param string $join Table name to join
     * @param string $alias Alias for the joined table
     * @param string|null $condition Join condition
     * @return $this
     */
    public function leftJoin($fromAlias, $join, $alias, $condition = null)
    {
        return $this;
    }

    /**
     * Add INNER JOIN clause
     * @param string $fromAlias Alias of the table to join
     * @param string $join Table name to join
     * @param string $alias Alias for the joined table
     * @param string|null $condition Join condition
     * @return $this
     */
    public function innerJoin($fromAlias, $join, $alias, $condition = null)
    {
        return $this;
    }

    /**
     * Add ORDER BY clause
     * @param string $sort Sort field
     * @param string|null $order Sort order (ASC/DESC)
     * @return $this
     */
    public function orderBy($sort, $order = null)
    {
        return $this;
    }

    /**
     * Add GROUP BY clause
     * @param string $groupBy Group by field
     * @return $this
     */
    public function groupBy($groupBy)
    {
        return $this;
    }

    /**
     * Set maximum number of results
     * @param int $maxResults Maximum results
     * @return $this
     */
    public function setMaxResults($maxResults)
    {
        return $this;
    }

    /**
     * Set first result offset
     * @param int $firstResult First result offset
     * @return $this
     */
    public function setFirstResult($firstResult)
    {
        return $this;
    }

    /**
     * Get SQL query string
     * @return string SQL query
     */
    public function getSQL()
    {
        return '';
    }

    /**
     * Execute query and return results
     * @return array Query results
     */
    public function execute()
    {
        return [];
    }
}

// Return to global namespace for other classes
namespace {

    /**
     * ObjectModel base class for PrestaShop models
     */
    class ObjectModel
    {
        /**
         * Type constants for field definitions
         */
        const TYPE_INT = 1;
        const TYPE_BOOL = 2;
        const TYPE_STRING = 3;
        const TYPE_FLOAT = 4;
        const TYPE_DATE = 5;
        const TYPE_HTML = 6;
        const TYPE_NOTHING = 7;
        const TYPE_SQL = 8;

        /**
         * @var int Object ID
         */
        public $id;

        /**
         * @var array Definition array
         */
        public static $definition = [];

        /**
         * Constructor
         * @param int|null $id Object ID
         * @param int|null $idLang Language ID
         * @param int|null $idShop Shop ID
         */
        public function __construct($id = null, $idLang = null, $idShop = null) {}

        /**
         * Add object to database
         * @param bool $autoDate Auto date
         * @param bool $nullValues Null values
         * @return bool
         */
        public function add($autoDate = true, $nullValues = false)
        {
            return true;
        }

        /**
         * Update object in database
         * @param bool $nullValues Null values
         * @return bool
         */
        public function update($nullValues = false)
        {
            return true;
        }

        /**
         * Delete object from database
         * @return bool
         */
        public function delete()
        {
            return true;
        }

        /**
         * Save object
         * @param bool $nullValues Null values
         * @param bool $autoDate Auto date
         * @return bool
         */
        public function save($nullValues = false, $autoDate = true)
        {
            return true;
        }

        /**
         * Get object by ID
         * @param int $id Object ID
         * @param int|null $idLang Language ID
         * @return static|false
         */
        public static function getById($id, $idLang = null)
        {
            return false;
        }
    }

    /**
     * Base class for payment modules in PrestaShop
     */
    class PaymentModule extends Module
    {
        /**
         * @var string Module name
         */
        public $name;

        /**
         * @var string Module tab
         */
        public $tab;

        /**
         * @var string Module version
         */
        public $version;

        /**
         * @var string Module author
         */
        public $author;

        /**
         * @var array PS versions compatibility
         */
        public $ps_versions_compliancy;

        /**
         * @var bool Bootstrap flag
         */
        public $bootstrap;

        /**
         * @var string Display name
         */
        public $displayName;

        /**
         * @var string Description
         */
        public $description;

        /**
         * @var string Confirmation message for uninstall
         */
        public $confirmuninstall;

        /**
         * @var string Warning message
         */
        public $warning;

        /**
         * @var bool Active flag
         */
        public $active;

        /**
         * @var Context Context instance
         */
        public $context;

        /**
         * @var int Current order ID (set after validateOrder)
         */
        public $currentOrder;

        /**
         * Constructor
         */
        public function __construct() {}

        /**
         * Install the module
         * @return bool
         */
        public function install()
        {
            return true;
        }

        /**
         * Uninstall the module
         * @return bool
         */
        public function uninstall()
        {
            return true;
        }

        /**
         * Register a hook
         * @param string $hookName
         * @return bool
         */
        public function registerHook($hookName)
        {
            return true;
        }

        /**
         * Get content for configuration page
         * @return string
         */
        public function getContent()
        {
            return '';
        }

        /**
         * Check currency compatibility
         * @param Cart $cart
         * @return bool
         */
        public function checkCurrency($cart)
        {
            return true;
        }

        /**
         * Get currency
         * @param int $idCurrency
         * @return array|false
         */
        public function getCurrency($idCurrency)
        {
            return [];
        }

        /**
         * Translate a string
         * @param string $string
         * @param string|null $specific
         * @return string
         */
        public function l($string, $specific = null)
        {
            return $string;
        }

        /**
         * Display a template
         * @param string $template
         * @return string
         */
        public function display($file, $template)
        {
            return '';
        }

        /**
         * Display confirmation message
         * @param string $message
         * @return string
         */
        public function displayConfirmation($message)
        {
            return '';
        }

        /**
         * Fetch a template
         * @param string $template
         * @return string
         */
        public function fetch($template)
        {
            return '';
        }

        /**
         * Validate order
         * @param int $idCart Cart ID
         * @param int $idOrderState Order state ID
         * @param float $amountPaid Amount paid
         * @param string $paymentMethod Payment method name
         * @param string $message Message
         * @param array $extraVars Extra variables
         * @param int|null $currencyId Currency ID
         * @param bool $dontTouchAmount Don't touch amount
         * @param string $secureKey Secure key
         * @param Shop|null $shop Shop instance
         * @return bool
         */
        public function validateOrder($idCart, $idOrderState, $amountPaid, $paymentMethod = '', $message = null, $extraVars = array(), $currencyId = null, $dontTouchAmount = false, $secureKey = null, $shop = null)
        {
            return true;
        }
    }

    /**
     * Base class for PrestaShop modules
     */
    class Module
    {
        /**
         * @var string Module name
         */
        public $name;

        /**
         * @var string Module version
         */
        public $version;

        /**
         * @var Context Context instance
         */
        public $context;

        /**
         * @var array Error messages
         */
        public $_errors = [];

        /**
         * @var bool Active flag
         */
        public $active;

        /**
         * Constructor
         */
        public function __construct() {}

        /**
         * Get payment modules
         * @return array Array of payment modules
         */
        public static function getPaymentModules()
        {
            return [];
        }

        /**
         * Get module instance by name
         * @param string $moduleName
         * @return Module|false
         */
        public static function getInstanceByName($moduleName)
        {
            return false;
        }

        /**
         * Translate a string
         * @param string $string
         * @param string|null $specific
         * @return string
         */
        public function l($string, $specific = null)
        {
            return $string;
        }
    }

    /**
     * Configuration management class
     */
    class Configuration
    {
        /**
         * Get a configuration value
         * @param string $key
         * @param mixed $default
         * @param int|null $idShopGroup
         * @param int|null $idShop
         * @return mixed
         */
        public static function get($key, $default = null, $idShopGroup = null, $idShop = null)
        {
            return $default;
        }

        /**
         * Get multiple configuration values
         * @param array $keys Array of configuration keys
         * @param int|null $idLang Language ID
         * @param int|null $idShopGroup Shop group ID
         * @param int|null $idShop Shop ID
         * @return array Array of configuration values
         */
        public static function getMultiple($keys, $idLang = null, $idShopGroup = null, $idShop = null)
        {
            return [];
        }

        /**
         * Update a configuration value
         * @param string $key
         * @param mixed $value
         * @return bool
         */
        public static function updateValue($key, $value)
        {
            return true;
        }

        /**
         * Delete a configuration value
         * @param string $key
         * @return bool
         */
        public static function deleteByName($key)
        {
            return true;
        }
    }

    /**
     * Shop management class
     */
    class Shop
    {
        const CONTEXT_ALL = 1;
        const CONTEXT_GROUP = 2;
        const CONTEXT_SHOP = 3;

        /**
         * @var int Shop ID
         */
        public $id;

        /**
         * @var string Physical URI
         */
        public $physical_uri;

        /**
         * @var string Theme name
         */
        public $theme;

        /**
         * Constructor
         * @param int|null $id Shop ID
         */
        public function __construct($id = null) {}

        /**
         * Check if shop feature is active
         * @return bool
         */
        public static function isFeatureActive()
        {
            return false;
        }

        /**
         * Set shop context
         * @param int $type
         * @return void
         */
        public static function setContext($type) {}
    }

    /**
     * Order class
     */
    class Order
    {
        /**
         * @var int Order ID
         */
        public $id;

        /**
         * @var int Cart ID
         */
        public $id_cart;

        /**
         * @var int Customer ID
         */
        public $id_customer;

        /**
         * @var int Currency ID
         */
        public $id_currency;

        /**
         * @var int Order state ID
         */
        public $current_state;

        /**
         * @var string Reference
         */
        public $reference;

        /**
         * @var float Total paid
         */
        public $total_paid;

        /**
         * @var float Total paid tax included
         */
        public $total_paid_tax_incl;

        /**
         * @var float Total paid tax excluded
         */
        public $total_paid_tax_excl;

        /**
         * Constructor
         * @param int|null $id Order ID
         */
        public function __construct($id = null) {}

        /**
         * Get order by cart ID
         * @param int $idCart Cart ID
         * @return Order|false
         */
        public static function getOrderByCartId($idCart)
        {
            return false;
        }

        /**
         * Get order history
         * @param int $idLang Language ID
         * @param int|null $idOrderState Order state ID
         * @return array
         */
        public function getHistory($idLang, $idOrderState = null)
        {
            return [];
        }
    }

    /**
     * Order state class
     */
    class OrderState
    {
        /**
         * @var int Order state ID
         */
        public $id;

        /**
         * @var array Order state names
         */
        public $name;

        /**
         * @var bool Send email flag
         */
        public $send_mail;

        /**
         * @var bool Send email flag (alternative property name)
         */
        public $send_email;

        /**
         * @var string Email template
         */
        public $template;

        /**
         * @var bool Invoice flag
         */
        public $invoice;

        /**
         * @var string Color
         */
        public $color;

        /**
         * @var bool Unremovable flag
         */
        public $unremovable;

        /**
         * @var bool Logable flag
         */
        public $logable;

        /**
         * @var bool Hidden flag
         */
        public $hidden;

        /**
         * @var bool Active flag
         */
        public $active;

        /**
         * @var string Module name
         */
        public $module_name;

        /**
         * Constructor
         * @param int|null $id Order state ID
         */
        public function __construct($id = null) {}

        /**
         * Add order state
         * @return bool
         */
        public function add()
        {
            return true;
        }

        /**
         * Delete order state
         * @return bool
         */
        public function delete()
        {
            return true;
        }

        /**
         * Update order state
         * @return bool
         */
        public function update()
        {
            return true;
        }

        /**
         * Check if order state exists in database
         * @param int $id
         * @param string $table
         * @return bool
         */
        public static function existsInDatabase($id, $table)
        {
            return false;
        }
    }

    /**
     * Tools utility class
     */
    class Tools
    {
        /**
         * Check if form is submitted
         * @param string $submit
         * @return bool
         */
        public static function isSubmit($submit)
        {
            return false;
        }

        /**
         * Get value from request
         * @param string $key
         * @param mixed $defaultValue
         * @return mixed
         */
        public static function getValue($key, $defaultValue = false)
        {
            return $defaultValue;
        }

        /**
         * Get admin token
         * @param string $tab
         * @return string
         */
        public static function getAdminTokenLite($tab)
        {
            return '';
        }

        /**
         * Redirect to URL
         * @param string $url
         * @return void
         */
        public static function redirect($url) {}

        /**
         * Convert string to lowercase
         * @param string $str
         * @return string
         */
        public static function strtolower($str)
        {
            return '';
        }

        /**
         * Get file contents
         * @param string $filename
         * @return string|false
         */
        public static function file_get_contents($filename)
        {
            return '';
        }

        /**
         * Safe output (escape HTML)
         * @param string $string
         * @return string
         */
        public static function safeOutput($string)
        {
            return '';
        }

        /**
         * Substring
         * @param string $str
         * @param int $start
         * @param int|null $length
         * @return string
         */
        public static function substr($str, $start, $length = null)
        {
            return '';
        }
    }

    /**
     * Validation utility class
     */
    class Validate
    {
        /**
         * Check if object is loaded from database
         * @param object $object
         * @return bool
         */
        public static function isLoadedObject($object)
        {
            return false;
        }

        /**
         * Check if value is unsigned integer
         * @param mixed $value
         * @return bool
         */
        public static function isUnsignedInt($value)
        {
            return false;
        }

        /**
         * Check if value is valid email
         * @param string $email
         * @return bool
         */
        public static function isEmail($email)
        {
            return false;
        }

        /**
         * Check if value is valid mail name
         * @param string $name
         * @return bool
         */
        public static function isMailName($name)
        {
            return false;
        }

        /**
         * Check if value is valid template name
         * @param string $name
         * @return bool
         */
        public static function isTplName($name)
        {
            return false;
        }

        /**
         * Check if value is valid mail subject
         * @param string $subject
         * @return bool
         */
        public static function isMailSubject($subject)
        {
            return false;
        }

        /**
         * Check if value is valid generic name
         * @param string $name
         * @return bool
         */
        public static function isGenericName($name)
        {
            return false;
        }
    }

    /**
     * Language class for PrestaShop
     */
    class Language
    {
        /**
         * @var int Language ID
         */
        public $id;

        /**
         * Get all languages
         * @param bool $active Only active languages
         * @return array Array of language data
         */
        public static function getLanguages($active = true)
        {
            return [];
        }

        /**
         * Get ISO code by language ID
         * @param int $idLang Language ID
         * @return string|false ISO code or false
         */
        public static function getIsoById($idLang)
        {
            return '';
        }
    }

    /**
     * Helper form class
     */
    class HelperForm
    {
        /**
         * @var Module Module instance
         */
        public $module;

        /**
         * @var string Controller name
         */
        public $name_controller;

        /**
         * @var string Token
         */
        public $token;

        /**
         * @var string Current index
         */
        public $currentIndex;

        /**
         * @var int Default form language
         */
        public $default_form_language;

        /**
         * @var int Allow employee form language
         */
        public $allow_employee_form_lang;

        /**
         * @var string Title
         */
        public $title;

        /**
         * @var bool Show toolbar
         */
        public $show_toolbar;

        /**
         * @var bool Toolbar scroll
         */
        public $toolbar_scroll;

        /**
         * @var string Submit action
         */
        public $submit_action;

        /**
         * @var array Toolbar buttons
         */
        public $toolbar_btn;

        /**
         * @var array Fields values
         */
        public $fields_value;

        /**
         * Generate form
         * @param array $fieldsForm
         * @return string
         */
        public function generateForm($fieldsForm)
        {
            return '';
        }
    }

    /**
     * Admin controller base class
     */
    class AdminController
    {
        /**
         * @var string Current index
         */
        public static $currentIndex;
    }

    /**
     * Currency class
     */
    class Currency
    {
        /**
         * @var int Currency ID
         */
        public $id;

        /**
         * @var string ISO code
         */
        public $iso_code;

        /**
         * Constructor
         * @param int $id
         */
        public function __construct($id = null) {}
    }

    /**
     * Product class
     */
    class Product
    {
        /**
         * @var int Product ID
         */
        public $id;

        /**
         * Constructor
         * @param int $id
         */
        public function __construct($id = null) {}

        /**
         * Get static price
         * @param int $idProduct
         * @param bool $usetax
         * @return float
         */
        public static function getPriceStatic($idProduct, $usetax = true)
        {
            return 0.0;
        }
    }

    /**
     * Media class
     */
    class Media
    {
        /**
         * Get media path
         * @param string $path
         * @return string
         */
        public static function getMediaPath($path)
        {
            return $path;
        }
    }

    /**
     * Image class for PrestaShop
     */
    class Image
    {
        /**
         * @var int Image ID
         */
        public $id;

        /**
         * @var int Product ID
         */
        public $id_product;

        /**
         * Get cover image for product
         * @param int $idProduct Product ID
         * @return array|false Image data
         */
        public static function getCover($idProduct)
        {
            return [];
        }
    }

    /**
     * MailCore base class for PrestaShop mail
     */
    class MailCore
    {
        /**
         * Mail type constants
         */
        const TYPE_BOTH = 0;
        const TYPE_TEXT = 1;
        const TYPE_HTML = 2;

        /**
         * Mail method constants
         */
        const METHOD_DISABLE = 0;
        const METHOD_SMTP = 1;
        const METHOD_MAIL = 2;

        /**
         * Die or log error
         * @param bool $die Die on error
         * @param string $message Error message
         * @param array $args Message arguments
         * @return void
         */
        protected static function dieOrLog($die, $message, $args = []) {}

        /**
         * MIME encode string
         * @param string $str String to encode
         * @return string Encoded string
         */
        protected static function mimeEncode($str)
        {
            return $str;
        }

        /**
         * Convert email to punycode
         * @param string $email Email address
         * @return string Punycode email
         */
        protected static function toPunycode($email)
        {
            return $email;
        }

        /**
         * Get template base path
         * @param string $template Template name
         * @param string|false $moduleName Module name
         * @param string|null $theme Theme name
         * @return string Template path
         */
        protected static function getTemplateBasePath($template, $moduleName = false, $theme = null)
        {
            return '';
        }

        /**
         * Generate message ID
         * @return string Message ID
         */
        public static function generateId()
        {
            return '';
        }
    }

    /**
     * Mail class for PrestaShop
     */
    class Mail extends MailCore
    {
        /**
         * @var string Template name
         */
        public $template;

        /**
         * @var string Subject
         */
        public $subject;

        /**
         * @var int Language ID
         */
        public $id_lang;

        /**
         * @var int|null Mail ID
         */
        public $id;

        /**
         * @var string Recipient email
         */
        public $recipient;

        /**
         * Send email
         * @param int $idLang Language ID
         * @param string $template Template name
         * @param string $subject Subject
         * @param array $templateVars Template variables
         * @param string $to To email
         * @param string $toName To name
         * @param string $from From email
         * @param string $fromName From name
         * @param string $fileAttachment File attachment path
         * @param bool $modeSMTP SMTP mode
         * @param string $templatePath Template path
         * @param bool $die Die on error
         * @param int $idShop Shop ID
         * @param string $bcc BCC email
         * @return bool
         */
        public static function Send($idLang, $template, $subject, $templateVars, $to, $toName = '', $from = null, $fromName = null, $fileAttachment = null, $modeSMTP = null, $templatePath = _PS_MAIL_DIR_, $die = false, $idShop = null, $bcc = null)
        {
            return true;
        }

        /**
         * Add mail to database
         * @return bool
         */
        public function add()
        {
            return true;
        }
    }

    /**
     * DskapiMail class - extends MailCore for plain text JSON emails
     */
    class DskapiMail extends MailCore
    {
        /**
         * Send email (plain text only, no subject prefix)
         * @param int $idLang Language ID
         * @param string $template Template name
         * @param string $subject Subject
         * @param array $templateVars Template variables
         * @param string $to To email
         * @param string|null $toName To name
         * @param string|null $from From email
         * @param string|null $fromName From name
         * @param string|null $fileAttachment File attachment path
         * @param bool|null $mode_smtp SMTP mode
         * @param string $templatePath Template path
         * @param bool $die Die on error
         * @param int|null $idShop Shop ID
         * @param string|null $bcc BCC email
         * @param string|null $replyTo Reply to email
         * @param string|null $replyToName Reply to name
         * @return bool
         */
        public static function send($idLang, $template, $subject, $templateVars, $to, $toName = null, $from = null, $fromName = null, $fileAttachment = null, $mode_smtp = null, $templatePath = _PS_MAIL_DIR_, $die = false, $idShop = null, $bcc = null, $replyTo = null, $replyToName = null)
        {
            return true;
        }
    }

    /**
     * Context class
     */
    class Context
    {
        /**
         * @var Cart Cart instance
         */
        public $cart;

        /**
         * @var Customer Customer instance
         */
        public $customer;

        /**
         * @var Currency Currency instance
         */
        public $currency;

        /**
         * @var Controller Controller instance
         */
        public $controller;

        /**
         * @var Smarty Smarty instance
         */
        public $smarty;

        /**
         * @var Link Link instance
         */
        public $link;

        /**
         * @var Language Language instance
         */
        public $language;

        /**
         * @var Shop Shop instance
         */
        public $shop;

        /**
         * Get context instance
         * @return Context
         */
        public static function getContext()
        {
            return new self();
        }

        /**
         * Get translator instance
         * @return object Translator instance
         */
        public function getTranslator()
        {
            return new stdClass();
        }
    }

    /**
     * Cart class
     */
    class Cart
    {
        /**
         * Constant for both delivery and invoice
         */
        const BOTH = 3;

        /**
         * Constant for delivery only
         */
        const ONLY_DELIVERY = 1;

        /**
         * Constant for invoice only
         */
        const ONLY_INVOICE = 2;

        /**
         * Constant for products only
         */
        const ONLY_PRODUCTS = 4;

        /**
         * Constant for discounts only
         */
        const ONLY_DISCOUNTS = 5;

        /**
         * Constant for shipping only
         */
        const ONLY_SHIPPING = 6;

        /**
         * Constant for wrapping only
         */
        const ONLY_WRAPPING = 7;

        /**
         * @var int Cart ID
         */
        public $id;

        /**
         * @var int Customer ID
         */
        public $id_customer;

        /**
         * @var int Currency ID
         */
        public $id_currency;

        /**
         * @var int Delivery address ID
         */
        public $id_address_delivery;

        /**
         * @var int Invoice address ID
         */
        public $id_address_invoice;

        /**
         * Get order total
         * @param bool $withTaxes
         * @param int $type Type of total (Cart::BOTH, Cart::ONLY_DELIVERY, etc.)
         * @return float
         */
        public function getOrderTotal($withTaxes = true, $type = self::BOTH)
        {
            return 0.0;
        }

        /**
         * Get products from cart
         * @param bool $refresh Refresh cart products
         * @param bool $id_product Get specific product
         * @param int $id_country Country ID
         * @param bool $full Get full product details
         * @return array Array of products
         */
        public function getProducts($refresh = false, $id_product = false, $id_country = null, $full = false)
        {
            return [];
        }

        /**
         * Check if cart contains only virtual products
         * @return bool True if cart is virtual (contains only virtual products)
         */
        public function isVirtualCart()
        {
            return false;
        }
    }

    /**
     * Customer class
     */
    class Customer
    {
        /**
         * @var int Customer ID
         */
        public $id;

        /**
         * @var int Language ID
         */
        public $id_lang;

        /**
         * @var string First name
         */
        public $firstname;

        /**
         * @var string Last name
         */
        public $lastname;

        /**
         * @var string Email
         */
        public $email;

        /**
         * @var string Secure key
         */
        public $secure_key;

        /**
         * Constructor
         * @param int|null $id Customer ID
         */
        public function __construct($id = null) {}

        /**
         * Get customer addresses
         * @param int $idLang
         * @return array
         */
        public function getAddresses($idLang)
        {
            return [];
        }
    }

    /**
     * Controller base class
     */
    class Controller
    {
        /**
         * @var string PHP self
         */
        public $php_self;

        /**
         * @var Context Context instance
         */
        public $context;

        /**
         * Register stylesheet
         * @param string $id
         * @param string $relativePath
         * @param array $params
         * @return void
         */
        public function registerStylesheet($id, $relativePath, $params = []) {}

        /**
         * Register javascript
         * @param string $id
         * @param string $relativePath
         * @param array $params
         * @return void
         */
        public function registerJavascript($id, $relativePath, $params = []) {}
    }

    /**
     * Front controller base class
     */
    class FrontController extends Controller
    {
        /**
         * @var Module Module instance
         */
        public $module;

        /**
         * @var Context Context instance
         */
        public $context;

        /**
         * Post process method
         * @return void
         */
        public function postProcess() {}
    }

    /**
     * Module front controller base class
     */
    class ModuleFrontController extends FrontController
    {
        /**
         * @var PaymentModule|Module Module instance
         */
        public $module;

        /**
         * @var Context Context instance
         */
        public $context;
    }

    /**
     * Link class
     */
    class Link
    {
        /**
         * Get module link
         * @param string $module
         * @param string $controller
         * @param array $params
         * @param bool $ssl
         * @return string
         */
        public function getModuleLink($module, $controller, $params = [], $ssl = false)
        {
            return '';
        }

        /**
         * Get page link
         * @param string $controller
         * @param bool $ssl
         * @param bool $withId
         * @param int|null $idLang
         * @param array|null $params
         * @param bool|int|null $idShop Shop ID
         * @return string
         */
        public function getPageLink($controller, $ssl = false, $withId = true, $idLang = null, $params = null, $idShop = false)
        {
            return '';
        }

        /**
         * Get image link
         * @param string $name Rewrite name
         * @param int $idImage Image ID
         * @param string $type Image type
         * @return string
         */
        public function getImageLink($name, $idImage, $type = '')
        {
            return '';
        }
    }

    /**
     * Smarty template engine class
     */
    class Smarty
    {
        /**
         * Assign variables to template
         * @param string|array $tpl_var
         * @param mixed $value
         * @return void
         */
        public function assign($tpl_var, $value = null) {}
    }

    /**
     * Database class for PrestaShop
     */
    class Db
    {
        /**
         * Get database instance
         * @return Db
         */
        public static function getInstance()
        {
            return new self();
        }

        /**
         * Execute a SQL query
         * @param string $sql
         * @return bool
         */
        public function execute($sql)
        {
            return true;
        }

        /**
         * Get a single value from database
         * @param string|DbQuery $sql
         * @return mixed
         */
        public function getValue($sql)
        {
            return null;
        }
    }

    /**
     * Database query builder class
     */
    class DbQuery
    {
        /**
         * Select fields
         * @param string $fields
         * @return $this
         */
        public function select($fields)
        {
            return $this;
        }

        /**
         * From table
         * @param string $table
         * @return $this
         */
        public function from($table)
        {
            return $this;
        }

        /**
         * Where condition
         * @param string $condition
         * @return $this
         */
        public function where($condition)
        {
            return $this;
        }

        /**
         * Order by clause
         * @param string $orderBy
         * @return $this
         */
        public function orderBy($orderBy)
        {
            return $this;
        }
    }

    /**
     * Address class for PrestaShop
     */
    class Address
    {
        /**
         * @var int Address ID
         */
        public $id;

        /**
         * @var int Customer ID
         */
        public $id_customer;

        /**
         * @var string First name
         */
        public $firstname;

        /**
         * @var string Last name
         */
        public $lastname;

        /**
         * @var string Address line 1
         */
        public $address1;

        /**
         * @var string Address line 2
         */
        public $address2;

        /**
         * @var string City
         */
        public $city;

        /**
         * @var string Postcode
         */
        public $postcode;

        /**
         * @var string Phone
         */
        public $phone;

        /**
         * @var string Phone mobile
         */
        public $phone_mobile;

        /**
         * Constructor
         * @param int|null $id Address ID
         */
        public function __construct($id = null) {}
    }

    /**
     * Escape SQL string
     * @param string $string
     * @param bool $htmlOk
     * @return string
     */
    function pSQL($string, $htmlOk = false)
    {
        return $string;
    }

    /**
     * Hook management class
     */
    class Hook
    {
        /**
         * Execute hook
         * @param string $hookName Hook name
         * @param array $params Parameters
         * @param int|null $idModule Module ID
         * @param bool $arrayReturn Return array
         * @return mixed Hook result
         */
        public static function exec($hookName, $params = [], $idModule = null, $arrayReturn = false)
        {
            return null;
        }
    }

    /**
     * PrestaShop Logger class
     */
    class PrestaShopLogger
    {
        /**
         * Add log entry
         * @param string $message Log message
         * @param int $severity Severity level
         * @param int|null $errorCode Error code
         * @param string|null $objectType Object type
         * @param int|null $objectId Object ID
         * @param bool $allowDuplicate Allow duplicate entries
         * @param int|null $idShop Shop ID
         * @return void
         */
        public static function addLog($message, $severity = 1, $errorCode = null, $objectType = null, $objectId = null, $allowDuplicate = false, $idShop = null) {}
    }

    /**
     * ShopUrl class for URL management
     */
    class ShopUrl
    {
        /**
         * Cache main domain for shop
         * @param int $idShop Shop ID
         * @return void
         */
        public static function cacheMainDomainForShop($idShop) {}

        /**
         * Reset main domain cache
         * @return void
         */
        public static function resetMainDomainCache() {}
    }

    /**
     * SwiftMailer classes (placeholders)
     */
    class Swift_Message
    {
        public function setSubject($subject) {}
        public function setCharset($charset) {}
        public function setId($id) {}
        public function setReplyTo($email, $name = null) {}
        public function setFrom($email, $name = null) {}
        public function addTo($email, $name = null) {}
        public function addBcc($email) {}
        public function setBody($body, $contentType = null) {}
        public function attach($attachment) {}
        public function getSubject()
        {
            return '';
        }
        public function getTo()
        {
            return [];
        }
        public function getCc()
        {
            return [];
        }
        public function getBcc()
        {
            return [];
        }
    }

    class Swift_SmtpTransport
    {
        public function __construct($host, $port, $encryption = null) {}
        public function setUsername($username)
        {
            return $this;
        }
        public function setPassword($password)
        {
            return $this;
        }
    }

    class Swift_SendmailTransport
    {
        public function __construct() {}
    }

    class Swift_Mailer
    {
        public function __construct($transport) {}
        public function registerPlugin($plugin) {}
        public function send($message)
        {
            return true;
        }
    }

    class Swift_Attachment
    {
        public function setFilename($filename)
        {
            return $this;
        }
        public function setContentType($contentType)
        {
            return $this;
        }
        public function setBody($body)
        {
            return $this;
        }
    }

    class Swift_Plugins_DecoratorPlugin
    {
        public function __construct($replacements) {}
    }

    class Swift_SwiftException extends Exception {}

    // PrestaShop constants
    define('_PS_VERSION_', '1.7.8.0');
    define('_PS_MODULE_DIR_', '/var/www/presta17.avalonbg.com/modules/');
    define('_PS_MAIL_DIR_', '/var/www/presta17.avalonbg.com/mails/');
    define('_PS_IMG_DIR_', '/var/www/presta17.avalonbg.com/img/');
    define('_DB_PREFIX_', 'ps_');
    define('_MYSQL_ENGINE_', 'InnoDB');
} // End of global namespace
