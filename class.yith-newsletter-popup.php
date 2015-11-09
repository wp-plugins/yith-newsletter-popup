<?php/** * Main class * * @author Your Inspiration Themes * @package YITH Newsletter Popup * @version 1.0.0 */if (!defined('YITH_NEWSLETTER_POPUP')) {    exit;} // Exit if accessed directlyif (!class_exists('YITH_Newsletter_Popup')) {    /**     * YITH Newsletter Popup     *     * @since 1.0.0     */    class YITH_Newsletter_Popup    {        /**         * Plugin version         *         * @var string         * @since 1.0.0         */        public $version = '1.0.2';        /**         * Plugin object         *         * @var string         * @since 1.0.0         */        public $obj = null;        /**         * Constructor         *         * @return mixed|YITH_Newsletter_Popup_Admin|YITH_Newsletter_Popup_Frontend         * @since 1.0.0         */        public function __construct()        {            if (is_admin()) {                $this->obj = new YITH_Newsletter_Popup_Admin($this->version);            } //is_admin()            else {                $this->obj = new YITH_Newsletter_Popup_Frontend($this->version);            }            return $this->obj;        }    }} //!class_exists('YITH_Newsletter_Popup')