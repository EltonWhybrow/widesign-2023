<ul class="support">
    <!-- <h3 class="mb-1 ml-0 pl-2 border-ig-orange-500 border-l-4 heading-3">Web Design</h3> -->

    <?php
    if (!empty($amount)) {
        $post_amount = $amount;
    } else {
        $post_amount = -1;
    }
    $args = array(

        'post_type' => 'widesign-faqs',
        'posts_per_page' => $post_amount,
        // "orderby"=>"date",
        // "order"=>"DESC",
        'tax_query' => array(
            array(
                'taxonomy' => 'business-sections',
                'field' => 'slug',
                'terms' => 'support',
            )
        ),
    );
    $featured_query = new WP_Query($args);
    if ($featured_query->have_posts()) : while ($featured_query->have_posts()) : $featured_query->the_post(); ?>

            <li class="flex-auto w-full list-items">
                <span class="flex mx-0 p-2 border-shadow-300 border-t-2 accordian">
                    <h4 class="flex-auto py-3 pr-4 text-xl">
                        <?php the_title(); ?>
                    </h4>
                    <span class="flex-none m-auto pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 align-baseline" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </span>
                </span>
                <div class="flex-wrap p-5 text-base accordian-pane">
                    <?php the_content(); ?>
                </div>
            </li>

    <?php endwhile;
    else : endif; ?>
    <?php wp_reset_postdata(); ?>
</ul>