<?php
/* 
    =================================
    Custom Post Types
    =================================
*/

function custom_post_type()
{

    $quoteLabels = array(
        'name'                => _x('Quotes', 'Post Type General Name'),
        'singular_name'       => _x('Quote', 'Post Type Singular Name'),
        'menu_name'           => __('Quote Slider'),
        'parent_item_colon'   => __('Parent Quote'),
        'all_items'           => __('View all Quotes'),
        'view_item'           => __('View Quote'),
        'add_new_item'        => __('Add New Quote'),
        'add_new'             => __('Add New Quote'),
        'edit_item'           => __('Edit Quote'),
        'update_item'         => __('Update Quote'),
        'search_items'        => __('Search Quote'),
        'not_found'           => __('Not Found'),
        'not_found_in_trash'  => __('Not found in Trash'),
    );

    $quoteArgs = array(
        'label'               => __('quotes'),
        'description'         => __('WideSign client feedback'),
        'labels'              => $quoteLabels,
        // Features this CPT supports in Post Editor
        'supports'            => array('title', 'editor', 'author', 'thumbnail', 'custom-fields'),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array(''),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 7,
        'menu_icon'           => 'dashicons-format-quote',
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest' => true,

    );



    $projectsLabels = array(
        'name'                => _x('Projects', 'Post Type General Name'),
        'singular_name'       => _x('Projects', 'Post Type Singular Name'),
        'menu_name'           => __('Projects'),
        'parent_item_colon'   => __('Parent CS'),
        'all_items'           => __('View all'),
        'view_item'           => __('View Project'),
        'add_new_item'        => __('Add New'),
        'add_new'             => __('Add New'),
        'edit_item'           => __('Edit Project'),
        'update_item'         => __('Update Project'),
        'search_items'        => __('Search Project'),
        'not_found'           => __('Not Found'),
        'not_found_in_trash'  => __('Not found in Trash'),
    );

    $projectArgs = array(
        'label'               => __('projects'),
        'description'         => __('Projects'),
        'labels'              => $projectsLabels,
        // Features this CPT supports in Post Editor
        'supports'            => array('title', 'editor', 'excerpt', 'thumbnail', 'custom-fields'),
        // You can associate this Custom Post Type with a taxonomy or custom taxonomy. 
        // 'taxonomies'          => array('learner-sections'),
        'taxonomies'          => array(''),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 6,
        'menu_icon'           => 'dashicons-welcome-widgets-menus',
        'can_export'          => true,
        'has_archive'         => false,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest' => true,
    );


    $heroLabels = array(
        'name'                => _x('Heros', 'Post Type General Name'),
        'singular_name'       => _x('Hero', 'Post Type Singular Name'),
        'menu_name'           => __('Hero Slider'),
        'parent_item_colon'   => __('Parent Hero'),
        'all_items'           => __('View all Heros'),
        'view_item'           => __('View Hero'),
        'add_new_item'        => __('Add New Hero'),
        'add_new'             => __('Add New Hero'),
        'edit_item'           => __('Edit Hero'),
        'update_item'         => __('Update Hero'),
        'search_items'        => __('Search Hero'),
        'not_found'           => __('Not Found'),
        'not_found_in_trash'  => __('Not found in Trash'),
    );

    $heroArgs = array(
        'label'               => __('heros'),
        'description'         => __('Buds Hero Banners'),
        'labels'              => $heroLabels,
        // Features this CPT supports in Post Editor
        'supports'            => array('title', 'editor', 'author', 'thumbnail', 'custom-fields'),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array(''),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 7,
        'menu_icon'           => 'dashicons-superhero',
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => true,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest' => true,
    );


    $widesignFaqLabels = array(
        'name'                => _x('WideSign FAQs', 'Post Type General Name'),
        'singular_name'       => _x('WideSign FAQ', 'Post Type Singular Name'),
        'menu_name'           => __('WideSign FAQs'),
        'parent_item_colon'   => __('Parent FAQ'),
        'all_items'           => __('View all'),
        'view_item'           => __('View WideSign FAQ'),
        'add_new_item'        => __('Add New'),
        'add_new'             => __('Add New'),
        'edit_item'           => __('Edit WideSign FAQ'),
        'update_item'         => __('Update WideSign FAQ'),
        'search_items'        => __('Search WideSign FAQ'),
        'not_found'           => __('Not Found'),
        'not_found_in_trash'  => __('Not found in Trash'),
    );

    $widesignFaqArgs = array(
        'label'               => __('WideSign faqs'),
        'description'         => __('WideSign FAQs for website'),
        'labels'              => $widesignFaqLabels,
        // Features this CPT supports in Post Editor
        'supports'            => array('title', 'editor', 'excerpt', 'author', 'thumbnail',),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array('business-sections'),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 10,
        'menu_icon'           => 'dashicons-megaphone',
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest' => true,

    );


    register_post_type('WideSign-faqs', $widesignFaqArgs);
    register_post_type('heros', $heroArgs);
    register_post_type('projects', $projectArgs);
    register_post_type('quotes', $quoteArgs);
}

add_action('init', 'custom_post_type', 0);
