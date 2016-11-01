<?php
/*
Plugin Name: Default Checked Link
Plugin URI: 
Description: Default checked link when we are adding a new link in a post
Version: 1.0
Author: eballo
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