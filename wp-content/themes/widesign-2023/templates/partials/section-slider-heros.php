<!-- 
=============================
Customer quotes slider
============================= 
-->
<section id="slider-heros" class="mx-0">
    <div class="flexslider relative bg-transparent border-0 h-96">
        <ul class="slides">

            <?php
            $feat_args = array(
                'post_type' => 'heros',
                'posts_per_page' => $number,
                //     'tax_query' => array(
                //     array (
                //         // 'taxonomy' => 'quotes',
                //         // 'field' => 'slug',
                //         // 'terms' => 'parents-guide',
                //     )
                // ),
            );
            $featured_query = new WP_Query($feat_args);
            if ($featured_query->have_posts()) : while ($featured_query->have_posts()) : $featured_query->the_post(); ?>
                    <li class="slide" style="
            background-image: url(<?php the_post_thumbnail_url('hero-banner'); ?>); 
            background-size: cover">

                        <div class="flex container mx-auto">
                            <div class="hidden w-full h-16 mx-auto text-white p-32">
                                <?php the_field('hero_heading'); ?>
                                <!-- <div class="p-20"><?php the_content() ?></div> -->
                            </div>
                        </div>


                    </li>

            <?php endwhile;
            endif; ?>
            <?php wp_reset_postdata(); ?>

        </ul>
    </div>
</section>