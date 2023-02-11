<?php

/* 
    =================================
    Notifications
    =================================
*/

// Custom upsell message
function upsell_message($atts)
{
  extract(shortcode_atts(array(
    'title' => 'Frequently asked questions?',
    'color' => 'gray',
    'type' => 'seo',
    'message' => 'Have a question about our website packages, SEO plans or hosting? Its likely you can find the answer here.',
    'link' => '/faqs',
    'linkText' => 'Find out more',
  ), $atts));

  ob_start();
  set_query_var('title', $title);
  set_query_var('color', $color);
  set_query_var('type', $type);
  set_query_var('message', $message);
  set_query_var('linkText', $linkText);
  set_query_var('link', $link); // pass var to template
  get_template_part('./templates/partials/notifications/message', 'upsell');
  return ob_get_clean();
}
add_shortcode('upsell-message', 'upsell_message');
