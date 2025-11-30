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

// Return to global namespace for other classes
namespace {

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
         * @return string
         */
        public function l($string)
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
         * @var Context Context instance
         */
        public $context;

        /**
         * @var array Error messages
         */
        public $_errors = [];

        /**
         * Constructor
         */
        public function __construct() {}
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
         * @return mixed
         */
        public static function get($key, $default = null)
        {
            return $default;
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
         * Get context instance
         * @return Context
         */
        public static function getContext()
        {
            return new self();
        }
    }

    /**
     * Cart class
     */
    class Cart
    {
        /**
         * @var int Cart ID
         */
        public $id;

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
         * @return float
         */
        public function getOrderTotal($withTaxes = true)
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
         * @param int $idLang
         * @param array $params
         * @return string
         */
        public function getPageLink($controller, $ssl = false, $idLang = null, $params = [])
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
     * Escape SQL string
     * @param string $string
     * @param bool $htmlOk
     * @return string
     */
    function pSQL($string, $htmlOk = false)
    {
        return $string;
    }

    // PrestaShop constants
    define('_PS_VERSION_', '1.7.8.0');
    define('_PS_MODULE_DIR_', '/var/www/presta17.avalonbg.com/modules/');
    define('_DB_PREFIX_', 'ps_');
    define('_MYSQL_ENGINE_', 'InnoDB');
} // End of global namespace
