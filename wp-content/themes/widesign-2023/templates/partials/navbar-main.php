<nav class="navbar-main hidden lg:flex justify-evenly">
    <?php
    wp_nav_menu(
        array(
            'theme_location' => 'main-home-menu',
            'container_class' => 'text-base flex',
            'menu_class' => 'relative',
            'add_li_class'  => 'm-0 block sm:inline-block sm:mt-0'
        )
    ); ?>
</nav>