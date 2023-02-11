<!-- 
=============================
Hub tease
============================= 
-->
<div class="grid grid-cols-1 md:grid-cols-2 grid-flow-grid auto-row-max gap-0 overflow-auto">

    <?php
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => 2,
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
            <div class="standard-card w-full h-80 p-0 m-0 relative flex flex-wrap border-0 group">
                <a class="group" href="<?php the_permalink() ?>">

                    <?php if (has_post_thumbnail()) : ?>
                        <img class="filter grayscale transition-all duration-500 hover:grayscale-0 object-cover object-left-top w-full h-full" src="<?php the_post_thumbnail_url('blog-image-sm'); ?>" alt="<?php the_title(); ?>">
                    <?php endif; ?>

                    <div class="absolute left-0 p-4 bottom-10 bg-gray-900 w-10/12 mx-auto">
                        <h2 class="group-hover:underline text-base leading-5 text-center text-gray-500"><?php the_title(); ?></h2>
                    </div>

                </a>
            </div>



    <?php endwhile;
    else : endif; ?>
    <?php wp_reset_postdata(); ?>

</div>

<!-- <div class="pb-2 px-4 pt-0 text-right">
    <a class="primary-link-sm inline-flex" href="/press-release">
        View more
        <svg xmlns="http://www.w3.org/2000/svg" class="btn-icon-right" fill="none" viewBox="0 0 24 24"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg></a>
</div> -->