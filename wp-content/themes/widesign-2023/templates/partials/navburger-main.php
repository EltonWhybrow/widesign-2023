<!-- Burger menu -->
<nav class="navburger-main pb-8">

    <!-- LOGO -->
    <div class="w-full">
        <div class="pl-4 md:pl-6 pt-4 w-28 md:w-32">
            <img src="/resources/img/pages/logos/ws-static-white.svg" alt="WideSign Logo" height="auto">
        </div>
    </div>

    <!-- MENU LIST -->
    <?php
    wp_nav_menu(
        array(
            'theme_location' => 'burger-menu',
            'container_class' => 'sm:flex-grow',
            'menu_class' => '',
            'add_li_class'  => 'flex-col block hover:text-white'
        )
    ); ?>

    <!-- SOCIAL ICONS -->
    <?php get_template_part('templates/partials/social/footer', 'icons');
    ?>
    <!-- COPYRIGHT -->
    <?php get_template_part('templates/partials/copyright'); ?>

</nav>