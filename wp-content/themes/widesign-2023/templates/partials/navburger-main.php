<!-- Burger menu -->
<nav class="navburger-main">
    <!-- Break with logo -->
    <div class="inline-flex justify-center items-center w-full h-32">
        <hr class="my-4 w-3/5 h-1 bg-gray-300 rounded border-0">
        <div class="absolute left-1/2 px-4 bg-gray-900 transform -translate-x-1/2 dark:bg-gray-900">
            <img src="/resources/img/pages/logos/ws-static-white.svg" alt="WideSign Logo" width="160px" height="auto">
        </div>
    </div>

    <?php
    wp_nav_menu(
        array(
            'theme_location' => 'burger-menu',
            'container_class' => 'sm:flex-grow',
            'menu_class' => '',
            'add_li_class'  => 'flex-col block hover:text-white'
        )
    ); ?>

</nav>