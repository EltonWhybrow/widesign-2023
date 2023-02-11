<?php
$array_defaults = array(
    'type' => 'website packages',
    'data' => array(
        'url' => '/services/website-package',
    )
);

$args = wp_parse_args($args, $array_defaults);
?>
<section class="p-10 bg-gray-300">
    <div class="md:items-center flex flex-wrap md:flex-nowrap container mx-auto md:justify-center md:space-x-10">
        <div>
            <h2 class="text-2xl text-gray-700 uppercase font-semibold">
                Ready to start?
            </h2>
            <p class="text-gray-700 text-base md:text-center sm:text-left">
                Lets get you on the road to success with one of our <?php echo esc_html($args['type']); ?>.
            </p>
        </div>
        <div class="flex-none mt-3">
            <a class="js-slidein relative inline-flex pr-8 primary-btn hover:bg-gray-600 bg-gray-700 group" href="<?php echo esc_html($args['data']['url']); ?>">Let's go!<svg xmlns="http://www.w3.org/2000/svg" class="absolute ml-1 top-3 right-1 inline-block transform group-hover:rotate-360 transition-rotate duration-500 w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                </svg>
            </a>
        </div>

    </div>
</section>