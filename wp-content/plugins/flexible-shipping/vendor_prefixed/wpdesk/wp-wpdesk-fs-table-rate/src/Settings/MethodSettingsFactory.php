<?php

/**
 * Method Factory.
 *
 * @package WPDesk\FS\TableRate\Settings
 */
namespace FSVendor\WPDesk\FS\TableRate\Settings;

/**
 * Can create Method.
 */
class MethodSettingsFactory
{
    /**
     * @param array $shipping_method_array
     *
     * @return MethodSettings
     */
    public static function create_from_array($shipping_method_array)
    {
        return new \FSVendor\WPDesk\FS\TableRate\Settings\MethodSettingsImplementation(isset($shipping_method_array['id']) ? $shipping_method_array['id'] : 'no', isset($shipping_method_array['method_enabled']) ? $shipping_method_array['method_enabled'] : 'no', isset($shipping_method_array['method_title']) ? $shipping_method_array['method_title'] : '', isset($shipping_method_array['method_description']) ? $shipping_method_array['method_description'] : '', isset($shipping_method_array['method_free_shipping']) ? $shipping_method_array['method_free_shipping'] : '', isset($shipping_method_array['method_free_shipping_label']) ? $shipping_method_array['method_free_shipping_label'] : '', isset($shipping_method_array['method_free_shipping_cart_notice']) ? $shipping_method_array['method_free_shipping_cart_notice'] : 'no', isset($shipping_method_array['method_calculation_method']) ? $shipping_method_array['method_calculation_method'] : 'sum', isset($shipping_method_array['method_visibility']) ? $shipping_method_array['method_visibility'] : 'no', isset($shipping_method_array['method_default']) ? $shipping_method_array['method_default'] : 'no', isset($shipping_method_array['method_debug_mode']) ? $shipping_method_array['method_debug_mode'] : 'no', isset($shipping_method_array['method_integration']) ? $shipping_method_array['method_integration'] : 'no', \FSVendor\WPDesk\FS\TableRate\Settings\IntegrationSettingsFactory::create_from_shipping_method_settings($shipping_method_array), isset($shipping_method_array['method_rules']) ? \FSVendor\WPDesk\FS\TableRate\Settings\RuleSettingsFactory::create_rules_from_shipping_rules_array($shipping_method_array['method_rules']) : array());
    }
}
