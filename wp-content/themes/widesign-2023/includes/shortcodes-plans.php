<?php

/* 
    =================================
    Plan name
    =================================
*/

// Custom banner notification
function plan_name()
{
  ob_start();
  // Test if the query exists at the URL
  return (isset($_GET['plan'])) ? sanitize_text_field($_GET['plan']) : '';
}

add_shortcode('plan-name', 'plan_name');
