<!-- 
=============================
Hub tease
============================= 
-->
<div class="gap-0 grid grid-cols-1 md:grid-cols-4 grid-flow-grid overflow-auto auto-row-max">

    <?php
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => 4,
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
            <div class="group relative flex flex-wrap m-0 p-0 border-0 w-full h-80 standard-card">
                <a class="group" href="<?php the_permalink() ?>">

                    <?php if (has_post_thumbnail()) : ?>
                        <img class="grayscale hover:grayscale-0 w-full h-full object-cover object-left-top transition-all duration-500 filter" src="<?php the_post_thumbnail_url('blog-image-sm'); ?>" alt="<?php the_title(); ?>">
                    <?php endif; ?>

                    <div class="bottom-10 left-0 absolute bg-gray-900 mx-auto p-4 w-10/12">
                        <h2 class="text-gray-500 text-base text-center group-hover:underline leading-5"><?php the_title(); ?></h2>
                    </div>

                </a>
            </div>



    <?php endwhile;
    else : endif; ?>
    <?php wp_reset_postdata(); ?>

</div>

<!-- <div class="px-4 pt-0 pb-2 text-right">
    <a class="inline-flex primary-link-sm" href="/press-release">
        View more
        <svg xmlns="http://www.w3.org/2000/svg" class="btn-icon-right" fill="none" viewBox="0 0 24 24"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg></a>
</div> -->