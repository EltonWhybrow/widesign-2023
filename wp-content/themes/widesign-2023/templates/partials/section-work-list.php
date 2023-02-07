<!-- 
=============================
Projects card
============================= 
-->


<div class="grid grid-cols-1 md:grid-cols-3 grid-flow-grid auto-row-max gap-0 overflow-auto">

    <?php
    $args = array(
        'post_type' => 'projects',
        // 'posts_per_page' => 6,
        // "orderby"=>"date",
        // "order"=>"DESC",
        // 'tax_query' => array(
        //     array(
        //         'taxonomy' => 'yd-sections',
        //         'field' => 'slug',
        //         'terms' => 'coronavirus-covid-19',
        //     )
        // ),
    );
    $featured_query = new WP_Query($args);
    if ($featured_query->have_posts()) : while ($featured_query->have_posts()) : $featured_query->the_post(); ?>

            <div class="standard-card bg-gray-900 w-full h-80 p-0 m-0 relative flex flex-wrap border-0 group">

                <?php if (has_post_thumbnail()) : ?>
                    <div class="relative py-0 w-full object-cover">
                        <div class="image-zoom">
                            <div class="zoom-image bg-whyus bg-left-top filter brightness-50 hover:brightness-100" style="
                            background-image: url(<?php the_post_thumbnail_url(); ?>);  
                            background-position: top center"></div>

                            <a href="<?php (the_field('site_url')) ?>" class="zoom-text">
                                <h2 class="text-gray-200 uppercase"><?php the_title(); ?></h2>
                                <?php the_content(); ?>
                            </a>
                        </div>
                    </div>



                <?php endif; ?>
                <!-- 
                <a href="#">
                    <div class="absolute transition ease-in-out duration-300 bg-gray-900 opacity-0 hover:opacity-40 top-0 left-0 w-full h-full hover:transition-opacity">
                    </div>
                </a> -->




            </div>

    <?php endwhile;
    else : endif; ?>
    <?php wp_reset_postdata(); ?>

</div>

<!-- <div class="relative py-0 w-full lg:w-3/5 object-cover h-100 md:h-auto">
    <div class="image-zoom">
        <div class="zoom-image bg-whyus bg-left-top"></div>
    </div>
</div> -->