<?php
/*

 Plugin Name: Default New Window Link Opener
 Plugin URI: https://github.com/eballo
 Description: Plugin for wordpress that allow you to enable the check in the popup "Insert/Edit Link” to open a link in new window by default
 Version: 1.0
 Author: eballo

This plugin is based on the solution made by Jan Fabry and lewayotte in wordpress stackexchange forum.

http://wordpress.stackexchange.com/questions/7785/is-there-any-way-to-set-default-for-insert-edit-link-to-open-link-in-new-wind

*/

/**
 * Sets "Open link in a new window/tab" to checked by default
 */
function wplink_tiny_mce_init()
{
 ?>
    <script type="text/javascript">
        jQuery(function () {
           jQuery('input#wp-link-target').prop('checked',true);
        });
    </script>    
    <?php
}

add_action( 'before_wp_tiny_mce', 'wplink_tiny_mce_init' );

?>