<?php

namespace WCBC\App\Controller;
defined("ABSPATH") or die();
class Main
{
    /**
     * @param $price
     * @return float|int|mixed|string
     */
    function getPrice($price)
    {
        if (!is_numeric($price) || empty($price) || !function_exists('wcpbc_the_zone')) {
            return $price;
        }

        if (!is_object(wcpbc_the_zone()) || !method_exists(wcpbc_the_zone(), 'get_exchange_rate_price')) {
            return $price;
        }
        return wcpbc_the_zone()->get_exchange_rate_price($price, true, 'generic', null);
    }
}