<?php
namespace Dgm\UspsSimple;


class FormFields
{
    /**
     * @param string $defaultUspsApiUserId
     * @param string $shippingMethodTitle
     * @return array
     */
    public static function build($defaultUspsApiUserId, $shippingMethodTitle)
    {
        /** @noinspection AdditionOperationOnArraysInspection */
        return self::options($defaultUspsApiUserId) + self::uspsServices($shippingMethodTitle);
    }

    /**
     * @param string $defaultUspsApiUserId
     * @return array
     */
    private static function options($defaultUspsApiUserId)
    {
        return [
            'enabled' => [
                'title' => 'Enable/Disable',
                'type' => 'checkbox',
                'label' => 'Enable this shipping method',
                'default' => 'no'
            ],
            'sender' => [
                'title' => __('Postcode', 'woo-usps-simple-shipping'),
                'type' => 'text',
                'description' => __('Enter the origin postcode.', 'woo-usps-simple-shipping'),
                'default' => '',
                'desc_tip' => true
            ],
            'user_id' => [
                'title' => __('User ID', 'woo-usps-simple-shipping'),
                'type' => 'text',
                'description' => __('Enter user id, which was provided after registering at USPS website, or use our id.', 'woo-usps-simple-shipping'),
                'default' => '',
                'placeholder' => $defaultUspsApiUserId,
                'desc_tip' => true
            ],
            'commercial_rate' => [
                'title' => __('Rates', 'woo-usps-simple-shipping'),
                'type' => 'checkbox',
                'label' => 'Priority use Commercial Base Pricing',
                'default' => 'yes',
                'desc_tip' => true,
                'description' => __('Some services offer several rates. If this is the case, Commercial Base Pricing should be used as priority.', 'woo-usps-simple-shipping'),
            ],
            'group_by_weight' => [
                'title' => __('Packing', 'woo-usps-simple-shipping'),
                'type' => 'checkbox',
                'label' => 'Quote regular items by weight',
                'default' => 'no',
                'desc_tip' => true,
                'description' => __('If enabled regular-size items (less then 12 inches) are quoted by their total weight. Large items are quoted individually still. Otherwise, all items are quoted individually.', 'woo-usps-simple-shipping'),
            ],
        ];
    }

    /**
     * @param string $shippingMethodTitle
     * @return array
     */
    private static function uspsServices($shippingMethodTitle)
    {
        $uspsServices = include(__DIR__.'/../data-domestic-services-usps.php');

        $helptip = __('This controls the title which the customer sees during checkout.', 'woo-usps-simple-shipping');

        $fields = [];
        foreach ($uspsServices as $id => $def) {

            $id = strtolower($id);

            $fields[$id] = [
                'title' => $def['name'],
                'type'  => 'title',
            ];

            $fields["t_{$id}"] = [
                'title'           => 'Title',
                'type'            => 'text',
                'description'     => $helptip,
                'placeholder'     => "{$def['name']} ({$shippingMethodTitle})",
                'desc_tip'        => true
            ];

            foreach ($def['services'] as $subid => $subtitle) {
                $fields["{$id}_{$subid}"] = [
                    'label'           => "{$subtitle} <span class='uspss-subid'>[{$subid}]</span>",
                    'type'            => 'checkbox',
                    'default'         => 'yes',
                    'class'           => 'uspss-subservice-checkbox',
                ];
            }
        }

        return $fields;
    }
}