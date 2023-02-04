<?php

use widesign2023Theme\AutoLoader;
use widesign2023Theme\View;

/*
 * Set up our auto loading class and mapping our namespace to the app directory.
 *
 * The autoloader follows PSR4 autoloading standards so, provided StudlyCaps are used for class, file, and directory
 * names, any class placed within the app directory will be autoloaded.
 *
 * i.e; If a class named SomeClass is stored in app/SomeDir/SomeClass.php, there is no need to include/require that file
 * as the autoloader will handle that for you.
 */

require get_stylesheet_directory() . '/app/AutoLoader.php';
$loader = new AutoLoader();
$loader->register();
$loader->addNamespace('widesign2023Theme', get_stylesheet_directory() . '/app');

View::$view_dir = get_stylesheet_directory() . '/templates/views';

/* 
=================================
Load Javascript and Styles
=================================
*/
require get_stylesheet_directory() . '/includes/scripts-and-styles.php';

/* 
=================================
Theme Options
=================================
*/
add_theme_support('menus');
add_theme_support('post-thumbnails');

/* 
=================================
Image paths
=================================
*/
update_option('upload_url_path', '/wp-content/uploads');

/* 
=================================
Custom Image Sizes
=================================
*/
add_image_size('hero-banner', 2880, 1500, true);
add_image_size('page-hero-banner', 1920, 500, true);
add_image_size('page-hero-mobile', 600, 400, true);
add_image_size('page-project', 960, 550, true);

/* 
=================================
Includes
=================================
*/
require_once(__DIR__ . '/includes/register-and-add-classes-on-nav-menu.php');
require_once(__DIR__ . '/includes/custom-post-types.php');
require_once(__DIR__ . '/includes/custom-taxonomies.php');
require_once(__DIR__ . '/includes/custom-term-functions.php');
require_once(__DIR__ . '/includes/custom-post-titles.php');
require_once(__DIR__ . '/includes/shortcodes-sliders.php');
require_once(__DIR__ . '/includes/shortcodes-notifications.php');
require_once(__DIR__ . '/includes/shortcodes-hero-img.php');
require_once(__DIR__ . '/includes/shortcodes-plans.php');


remove_filter('the_content', 'wpautop');


function enable_page_excerpt()
{
    add_post_type_support('page', array('excerpt'));
}
add_action('init', 'enable_page_excerpt');

// This is to set plan query in url
function add_get_val()
{
    global $wp;
    $wp->add_query_var('plan');
}
add_action('init', 'add_get_val');

/**
 * Make standard form fields to make read-only
 * To apply, add CSS class 'wpf-disable-field' (no quotes) to field in form builder
 *
 * @link https://wpforms.com/developers/disable-a-form-field-to-prevent-user-input/
 */


//  Disable from field - used for dynaic query in packages form
function wpf_dev_disable_field()
{
?>
    <script type="text/javascript">
        jQuery(function($) {

            $('.wpf-disable-field input, .wpf-disable-field textarea').attr({
                readonly: "readonly",
                tabindex: "-1"
            });

        });
    </script>
<?php
}
add_action('wpforms_wp_footer_end', 'wpf_dev_disable_field', 30);
