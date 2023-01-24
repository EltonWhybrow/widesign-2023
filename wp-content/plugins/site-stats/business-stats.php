<?php
/*
Plugin Name: redhilltutoring Stats
Plugin URI: http://redhilltutoring.co.uk
Description: redhilltutoring Business stats to change / keep all stats in check across environments. Can be used in all pages, posts, and templates.
NOTE: redhilltutoring plugin deploy as per and are not excluded in the pagelyignore file
Version: 1.0
Author: redhilltutoring
Author URI: http://redhilltutoring.co.uk
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
// redhilltutoring CONTACT STATS
// ------------------------

function mobile_number($atts)
{
    $mobile_number = "07952 435 427";
    return $mobile_number;
}

function landline_number($atts)
{
    $landline_number = "01628 410 090";
    return $landline_number;
}

function main_email($atts)
{
    $main_email = "bethany@redhilltutoring.co.uk";
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
