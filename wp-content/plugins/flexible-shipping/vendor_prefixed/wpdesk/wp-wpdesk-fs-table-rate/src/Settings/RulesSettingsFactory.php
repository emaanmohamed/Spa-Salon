<?php

/**
 * Rules Factory.
 *
 * @package WPDesk\FS\TableRate\Settings
 */
namespace FSVendor\WPDesk\FS\TableRate\Settings;

/**
 * Can create Rules.
 */
class RulesSettingsFactory
{
    /**
     * @param array $shipping_rule_array
     *
     * @return RuleSettings
     */
    public static function create_single_from_array($shipping_rule_array)
    {
        return new \FSVendor\WPDesk\FS\TableRate\Settings\RuleSettingsImplementation($shipping_rule_array['based_on'], isset($shipping_rule_array['min']) ? $shipping_rule_array['min'] : '', isset($shipping_rule_array['max']) ? $shipping_rule_array['max'] : '', isset($shipping_rule_array['cost_per_order']) ? $shipping_rule_array['cost_per_order'] : '');
    }
    /**
     * @param array $shipping_rules_array
     *
     * @return RuleSettings[]
     */
    public static function create_rules_from_shipping_rules_array(array $shipping_rules_array)
    {
        $rules = array();
        foreach ($shipping_rules_array as $shipping_rule_array) {
            $rules[] = self::create_single_from_array($shipping_rule_array);
        }
        return $rules;
    }
}
