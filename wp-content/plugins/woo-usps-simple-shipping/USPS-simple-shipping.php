<?php
/**
 * Plugin Name: USPS Simple Shipping for Woocommerce
 * Plugin URI: http://wordpress.org/plugins/woo-usps-simple-shipping
 * Description: The USPS Simple plugin calculates rates for domestic shipping dynamically using USPS API during checkout.
 * Version: 1.3
 * Author: dangoodman
 * Requires PHP: 5.6
 * Requires at least: 4.0
 * Tested up to: 5.5
 * WC requires at least: 2.6
 * WC tested up to: 4.5
 */

require_once(__DIR__.'/autoload.php');

/**
 * Check if WooCommerce is active
 */
if (in_array('woocommerce/woocommerce.php', apply_filters('active_plugins', get_option('active_plugins')), true)) {

    class USPS_Simple_Shipping {

        public function __construct() {
            add_action( 'woocommerce_shipping_init', array( $this, 'shippingInit' ) );
            add_filter( 'woocommerce_shipping_methods', array( $this, 'addShippingMethod' ) );
        }


        /**
         * Load gateway class
         */
        public function shippingInit() {
            include_once( 'class-shipping-usps.php' );
        }

        /**
         * Add method to WC
         */
        public function addShippingMethod( $methods ) {
            $methods[] = 'USPS_Simple_Shipping_Method';
            return $methods;
        }


    }

    new USPS_Simple_Shipping();
}