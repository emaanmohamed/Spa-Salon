<?php

namespace FSVendor;

if (!\interface_exists('FSVendor\\WPDesk_Translable')) {
    require_once 'Translable.php';
}
interface WPDesk_Translatable extends \FSVendor\WPDesk_Translable
{
    /** @return string */
    public function get_text_domain();
}
