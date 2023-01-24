<!-- 
=============================
Projects card
============================= 
-->
<div class="grid grid-cols-1 md:grid-cols-2 grid-flow-grid auto-row-max gap-0 overflow-auto">

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

            <div class="standard-card w-full h-80 p-0 m-0 relative flex flex-wrap border-0 group">

                <?php if (has_post_thumbnail()) : ?>
                    <img class="object-cover object-center w-full h-full" src="<?php the_post_thumbnail_url('page-project'); ?>" alt="<?php the_title(); ?>">
                <?php endif; ?>

                <a href="<?php the_permalink() ?>">
                    <div class="absolute transition ease-in-out duration-300 bg-gray-900 opacity-0 hover:opacity-40 top-0 left-0 w-full h-full hover:transition-opacity">
                    </div>
                </a>

                <div class="absolute py-1 px-2 bottom-10 left-0 bg-gray-800">

                    <h2 class="text-sm uppercase"><?php the_title(); ?></h2>
                    <p class="p-0 text-right">
                        <a href="<?php the_permalink() ?>" class="inline-flex primary-link text-xs">
                            <span class="group-hover:text-orange-500">View</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 group-hover:text-orange-500" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </p>


                    <!-- <p class="block leading-snug text-sm pr-3">
                                <?php
                                // $excerpt = get_the_excerpt();

                                // $excerpt = substr($excerpt, 0, 120);
                                // $result = substr($excerpt, 0, strrpos($excerpt, ' '));
                                // echo "$result..";
                                ?>
                            </p> -->

                    <?php // the_content(); 
                    ?>
                </div>
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