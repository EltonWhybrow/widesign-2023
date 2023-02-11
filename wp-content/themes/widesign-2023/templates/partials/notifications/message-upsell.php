<!-- Alert Notification -->
<div id="notification" class="my-2 flex lg:mx-10 relative">

    <!-- {# purgecss: bg-info-400 bg-success-400 bg-warning-400 bg-alert-400 #} -->
    <section class="-left-3 relative w-full">
        <div class="flex w-full flex-wrap-reverse md:flex-nowrap mx-auto">
            <div class="w-full p-4 bg-<?php echo $color ?>-400 rounded-b md:rounded-l md:rounded-b-none">
                <!-- styling headings ,p by customContent SCSS file / editor  -->
                <h2>
                    <?php echo $title ?>
                </h2>
                <p>
                    <?php echo $message ?> <?php
                                            if (!empty($link)) { ?>
                        <a class="js-slidein relative primary-link" href="<?php echo $link ?>"><?php echo $linkText ?></a>
                    <?php }
                    ?>
                </p>
            </div>
            <div class="w-full h-40 md:w-2/6 md:h-auto">
                <div class="h-full relative">
                    <a href="<?php echo $link ?>">
                        <img class="absolute rounded-t md:rounded-r md:rounded-t-none top-0 left-0 h-full w-full object-cover" src="/resources/img/upsell/upsell-<?php echo $type ?>.jpg" alt="Web & SEO Services">
                    </a>
                </div>
            </div>

        </div>
    </section>




    <!-- <div class="absolute top-1 right-4 text-right cursor-pointer" id="close-message">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="close-message w-5 h-5 mb-1 float-right text-gray-700">
            <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
    </div> -->
</div>