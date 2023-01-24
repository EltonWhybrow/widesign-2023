<!-- Burger menu -->
<nav class="navburger-main">
    <div class="pt-5 pb-1 inline-block">
        <img class="hidden md:block" src="/resources/img/pages/logos/redhill-tuts-logo-sm.svg" alt="Redhill Tutoring" width="240px" height="auto">
        <img class="md:hidden" src="/resources/img/pages/logos/redhill-tuts-logo-sm.png" alt="Redhill Tutoring" width="240px" height="auto">
    </div>

    <?php
    wp_nav_menu(
        array(
            'theme_location' => 'burger-menu',
            'container_class' => 'sm:flex-grow',
            'menu_class' => '',
            'add_li_class'  => 'flex-col block hover:bg-gray-900 hover:text-white'
        )
    ); ?>

</nav>