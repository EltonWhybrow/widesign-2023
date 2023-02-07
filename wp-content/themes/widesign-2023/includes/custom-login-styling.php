<?php

/* 
=================================
Change login desgin
=================================
*/

// change default logo login
function ppwp_custom_login_logo()
{ ?>
    <style type="text/css">
        #login h1 a,
        .login h1 a {
            background-image: url(https://widesign.co.uk/resources/img/pages/logos/ws-static-white.svg);
            height: 100px;
            width: 300px;
            background-size: 300px 100px;
            background-repeat: no-repeat;
            padding-bottom: 10px;
        }
    </style>
<?php }
add_action('login_enqueue_scripts', 'ppwp_custom_login_logo');

// change url of login logo link
function ppwp_custom_login_url()
{
    return home_url();
}
add_filter('login_headerurl', 'ppwp_custom_login_url');

function ppwp_login_logo_url_redirect()
{
    return 'https://widesign.co.uk/';
}
add_filter('login_headertext', 'ppwp_login_logo_url_redirect');
