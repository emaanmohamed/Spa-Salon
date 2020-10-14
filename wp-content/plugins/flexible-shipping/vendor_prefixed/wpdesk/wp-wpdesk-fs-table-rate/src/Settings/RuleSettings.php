<?php

/**
 * Rule settings.
 *
 * @package WPDesk\FS\TableRate\Settings
 */
namespace FSVendor\WPDesk\FS\TableRate\Settings;

/**
 * Rule settings interface.
 */
interface RuleSettings
{
    /**
     * @return string
     */
    public function get_rule_key();
    /**
     * @return string
     */
    public function get_based_on();
    /**
     * @return boolean
     */
    public function is_based_on_weight();
    /**
     * @return boolean
     */
    public function is_based_on_value();
    /**
     * @return boolean
     */
    public function is_based_on_none();
    /**
     * @return string
     */
    public function get_min();
    /**
     * @return string
     */
    public function get_max();
    /**
     * @return string
     */
    public function get_cost_per_order();
}
