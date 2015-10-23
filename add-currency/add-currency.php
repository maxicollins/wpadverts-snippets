<?php
/**
Plugin Name: WPAdverts Snippets - Add Currency
Version: 1.0
Author: Greg Winiarski
Description: This plugin will add "Botswana pula" to Payments currencies list.
*/

// The code below you can paste in your theme functions.php or create
// new plugin and paste the code there.

add_filter("adverts_currency_list", "add_adverts_currency");

/**
 * Add new currency to the list
 * 
 * @var $list Array list of currencies
 * @return Array updated list of currencies
 */ 
function add_adverts_currency($list) {
    
    $list[] = array(
        "code"=>"NGN", // ISO 4217 currency code, see http://en.wikipedia.org/wiki/ISO_4217
        "sign"=>"N", // currency prefix or postfix
        "label"=>"Nigeria Naira" // currency long name
    );
    
    return $list;
}
