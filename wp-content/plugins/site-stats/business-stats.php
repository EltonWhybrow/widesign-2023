<?php
/*
Plugin Name: widesign Stats
Plugin URI: https://widesign.co.uk
Description: widesign Business stats to change / keep all stats in check across environments. Can be used in all pages, posts, and templates.
Version: 1.0
Author: widesign
Author URI: http://widesign.co.uk
*/

/*
// ------------------------
// USAGE

For use in landing pages/templates etc:
<?php echo do_shortcode("[mobile_number]"); ?>

For use in WYSIWYG Editor:
[mobile_number]

// ------------------------
*/
// ------------------------
// widesign CONTACT STATS
// ------------------------

function mobile_number($atts)
{
    $mobile_number = "07910 742752";
    return $mobile_number;
}

function landline_number($atts)
{
    $landline_number = "";
    return $landline_number;
}

function main_email($atts)
{
    $main_email = "info@widesign.co.uk";
    return $main_email;
}

// ------------------------
//
// Shortcodes
// Will make editiable from wordpress admin when have time
//
// ------------------------

add_shortcode('mobile_number', 'mobile_number');
add_shortcode('landline_number', 'landline_number');
add_shortcode('main_email', 'main_email');
