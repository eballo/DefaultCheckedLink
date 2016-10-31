<?php
/*
Plugin Name: Default Checked Link
Plugin URI: 
Description: Default checked link checked
Version: 1.0
Author: eballo
*/
add_filter( 'tiny_mce_before_init', 'defaultCheckedLink_tiny_mce_before_init' );
function defaultCheckedLink_tiny_mce_before_init( $initArray )
{
    $initArray['default_link_checked'] = plugins_url( 'js/default-checked-link-01.js', __FILE__ );
    return $initArray;
}