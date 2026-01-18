<?php


use widesign2023Theme\AssetResolver;


add_action('wp_enqueue_scripts', function () {

    // registers scripts and stylesheets
    wp_register_style('app', AssetResolver::resolve('css/app.css'), [], false);
    wp_register_script('app', AssetResolver::resolve('js/app.js'), [], false, true);

    // enqueue global assets
    wp_enqueue_script('jquery');
    wp_enqueue_style('app');
    wp_enqueue_script('app');
    wp_enqueue_script('gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js', [], null, true);
    // ScrollTrigger (optional, for “animate when scrolled into view”)
    wp_enqueue_script('gsap-scrolltrigger', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js', ['gsap'], null, true);
});


add_action('login_head', function () {
    wp_register_style('app', AssetResolver::resolve('css/app.css'), [], false);
    wp_enqueue_style('app');
});
