<?php

/**
 * Rule settings implementation.
 *
 * @package WPDesk\FS\TableRate\Settings
 */
namespace FSVendor\WPDesk\FS\TableRate\Settings;

use FSVendor\WPDesk\FS\TableRate\BasedOnOptions;
use FSVendor\WPDesk\FS\TableRate\Logger\CanFormatForLog;
/**
 * Rule Settings Implementation
 */
class RuleSettingsImplementation implements \FSVendor\WPDesk\FS\TableRate\Settings\RuleSettings, \FSVendor\WPDesk\FS\TableRate\Logger\CanFormatForLog
{
    const BASED_ON_NONE = 'none';
    const BASED_ON_VALUE = 'value';
    const BASED_ON_WEIGHT = 'weight';
    /**
     * @var string
     */
    private $rule_key;
    /**
     * @var string
     */
    private $based_on;
    /**
     * @var string
     */
    private $min;
    /**
     * @var string
     */
    private $max;
    /**
     * @var string
     */
    private $cost_per_order;
    /**
     * RuleImplementation constructor.
     *
     * @param string $rule_key
     * @param string $based_on
     * @param string $min
     * @param string $max
     * @param string $cost_per_order
     */
    public function __construct($rule_key, $based_on, $min, $max, $cost_per_order)
    {
        $this->rule_key = $rule_key;
        $this->based_on = $based_on;
        $this->min = $min;
        $this->max = $max;
        $this->cost_per_order = $cost_per_order;
    }
    /**
     * @inheritDoc
     */
    public function get_rule_key()
    {
        return $this->rule_key;
    }
    /**
     * @inheritDoc
     */
    public function get_based_on()
    {
        return $this->based_on;
    }
    /**
     * @inheritDoc
     */
    public function is_based_on_weight()
    {
        return self::BASED_ON_WEIGHT === $this->based_on;
    }
    /**
     * @inheritDoc
     */
    public function is_based_on_value()
    {
        return self::BASED_ON_VALUE === $this->based_on;
    }
    /**
     * @inheritDoc
     */
    public function is_based_on_none()
    {
        return self::BASED_ON_NONE === $this->based_on;
    }
    /**
     * @inheritDoc
     */
    public function get_min()
    {
        return $this->min;
    }
    /**
     * @inheritDoc
     */
    public function get_max()
    {
        return $this->max;
    }
    /**
     * @inheritDoc
     */
    public function get_cost_per_order()
    {
        return $this->cost_per_order;
    }
    /**
     * @return string
     */
    public function format_for_log()
    {
        return \sprintf(\__('Rule %1$s:%2$s based on: %3$s min: %4$s max: %5$s cost per order: %6$s', 'flexible-shipping'), $this->get_rule_key(), "\n", (new \FSVendor\WPDesk\FS\TableRate\BasedOnOptions())->get_option_label($this->get_based_on()) . "; ", $this->get_min() . "; ", $this->get_max() . "; ", $this->get_cost_per_order());
    }
}
