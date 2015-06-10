<?php

$i = 1;
//Get Terms
$terms = get_terms("hs_faq_taxomomy");
$count = count($terms);
if ($count > 0) {
    echo '<section class="hs-faq-container">';
    echo '<div class="hs-faq-accordion">';
    foreach ($terms as $term) {
        echo '<h3>' . $term->name . '</h3>';
        // QUERY ARGS
        $query = new WP_Query(array(
                    'post_type'      => $post_type,
                    'posts_per_page' => $posts_per_page,
                    'orderby'        => $orderby,
                    'order'          => $order,
                    'no_found_rows'  => 1,
                    'tax_query'      => array(
                                            array(
                                                'taxonomy' => 'hs_faq_taxomomy',
                                                'field'    => 'slug',
                                                'terms'    => $term
                                            )
                                        )
                    )
        );
        echo '<div>';
        while ($query->have_posts()) : $query->the_post();

            $title = get_the_title();
            echo '<h3>' . $title . '</h3>';
            echo '<div class="hs-faq-qustion">';
            the_content();
            echo '</div>';
        endwhile;
        echo '</div>';
        $i++;
    }
    echo '</div>';
    echo '</section>';
}
//If Admin Has Not Created or Selected Any Category in Backend
else {
    $query = new WP_Query(array(
                'post_type'      => $post_type,
                'posts_per_page' => $posts_per_page,
                'orderby'        => $orderby,
                'order'          => $order,
                'no_found_rows'  => 1
            )
    );
    echo '<section class="hs-faq-container">';
    // Loop
    echo '<div class="hs-faq-accordion">';
    while ($query->have_posts()) : $query->the_post();

        $i = get_the_ID();
        $title = get_the_title();
        echo '<h3>' . $title . '</h3>';
        echo '<div class="ac-small">';
        the_content();
        echo '</div>';

    endwhile;
    echo '</div>';
    echo '</section>';
}
wp_reset_query();
?> 