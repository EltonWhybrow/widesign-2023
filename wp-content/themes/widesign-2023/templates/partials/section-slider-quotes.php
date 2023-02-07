<!-- 
=============================
Customer quotes slider
============================= 
-->
<section id="slider-quotes" class="mx-0">
    <div class="flexslider relative bg-transparent border-0">
        <ul class="slides">

            <?php
            $feat_args = array(
                'post_type' => 'quotes',
                'posts_per_page' => $number,
                'orderby' => 'post__in',
                'post__in' => array(666, 672, 674, 673)
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
                    <li class="slide">

                        <div class="flex-col flex mx-auto items-center">
                            <img class="js-slidein thumb h-44 w-44 flex-1 mx-auto object-cover object-center rounded-full shadow-md" src="<?php the_post_thumbnail_url('quote_thumbnails'); ?>" alt="<?php the_title(); ?>">

                            <div class="p-4 mx-4 text-center">
                                <?php the_content() ?>
                            </div>
                        </div>
                    </li>


            <?php endwhile;
            endif; ?>
            <?php wp_reset_postdata(); ?>

        </ul>
    </div>
</section>