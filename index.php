<?php
/*
Plugin Name: WooCommerce Product Columns
Plugin URI: http://github.com/daithi-coombes/woocommerce-product-columns.git
Description: Hide columns on the woocommerce product list page
Author: Daithi Coombes
Version: 0.1
Author URI: http://daithi-coombes.github.io
*/

/**
 * hide columns in the woocommerce product list
 * Columns are:
 *  - cb
 *  - title
 *  - comments
 *  - date
 *  - wpseo-score
 *  - wpseo-title
 *  - wpseo-metadesc
 *  - wpseo-focuskw
 * @param  array $columns An array of column_name=>html pairs
 * @return array          Returns the new array
 */
function cafe7_hide_woo_columns( $columns ){

	var_dump('woo-columns =>', $columns);

    unset($columns['wpseo-title']);
    unset($columns['wpseo-metadesc']);
    return $columns;
}
add_filter( 'manage_edit-product_columns', 'cafe7_hide_woo_columns', 9 );