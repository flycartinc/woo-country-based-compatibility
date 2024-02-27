<?php

namespace WCBC\App;

use WCBC\App\Controller\Main;

defined("ABSPATH") or die();
class Router
{
    /**
     * @var Main
     */
    private static $main;

    function init()
    {
        self::$main = empty(self::$main) ? new Main() : self::$main;
        add_filter('advanced_woo_discount_rules_converted_currency_value', [self::$main, 'getPrice'], 10);

    }
}