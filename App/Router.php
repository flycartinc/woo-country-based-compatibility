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
        add_filter('wdr_discounted_cart_item_price', [self::$main, 'getPrice'], 10,2);
    }
}