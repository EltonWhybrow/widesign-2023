<!-- Site footer -->
<footer class="footer bg-gray-900">


    <div class="link-items justify-center flex sm:flex-row flex-wrap">

        <div class="w-full lg:w-1/2 text-center bg-gray-900">

            <!-- HUB TEASER -->
            <?php get_template_part('templates/partials/section', 'hub-tease');
            ?>
        </div>


        <div class="w-full lg:w-1/2 px-10 flex text-center py-20">
            <!-- EXISTING CLIENTS -->
            <div class="w-full md:w-1/2 px-10 text-center">
                <h2 class="text-4xl text-mellow-400 uppercase font-semibold pb-2">
                    Elsewhere
                </h2>
                <ul class="leading-3">
                    <li><a class="footer-link text-2xl md:text-base" href="/services">Services</a></li>
                    <li><a class="footer-link text-2xl md:text-base" href="/our-work">Our work</a></li>
                    <li><a class="footer-link text-2xl md:text-base" href="/services/free-website-audit">Website audit</a></li>
                    <li><a class="footer-link text-2xl md:text-base" href="/hub">The 'Hub'</a></li>

                </ul>
            </div>

            <div class="w-full md:w-1/2 px-10 text-center">
                <h2 class="text-4xl text-mellow-400 uppercase font-semibold pb-2">
                    In touch
                </h2>

                <ul class="leading-3">
                    <li><a class='footer-link text-2xl md:text-base' href='tel:<?php echo do_shortcode("[mobile_number]"); ?>'><?php echo do_shortcode("[mobile_number]"); ?></a>
                    </li>
                    <li>
                        <a class='footer-link text-2xl md:text-base' href='mailto:<?php echo do_shortcode("[main_email]"); ?>'><?php echo do_shortcode("[main_email]"); ?></a>
                    </li>
                    <li><a class="footer-link text-2xl md:text-base" href="/client-area">Existing clients</a></li>
                    <li><a class="footer-link text-2xl md:text-base" href="/wp-admin">Admin</a></li>
                </ul>
            </div>

        </div>

    </div>
    </div>

    <!-- MODAL OVERLAY -->
    <!-- <div id="modal-overlay" class="cursor-pointer close-modal z-75 fixed hidden top-0 left-0 w-screen h-screen flex items-center justify-center bg-blue-700 bg-opacity-50 ">
    </div> -->

</footer>

<?php get_template_part('templates/partials/document-close');
