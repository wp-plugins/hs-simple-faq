<!--[if lt IE 9]>
	<?php wp_enqueue_script('jquery_html', plugins_url('hs-simple-faq/inc/js/hs-html5.js'), array('jquery'), '', false); ?>
<![endif]-->
<div class="hs_accordion hs_vertical">
    
<?php
    $i = 1;
    $terms = get_terms("hs_faq_taxomomy");
    $count = count($terms);
    if ($count > 0) {
        foreach ($terms as $term) {
            echo '<section id="tabs-' . $i . '"><div class="hs-faq-category"><a href="#tabs-' . $i . '">' . $term->name . '</a></div>';

            $query = new WP_Query(array(
                        'post_type' => $post_type,
                        'posts_per_page' => $posts_per_page,
                        'orderby' => $orderby,
                        'order' => $order,
                        'no_found_rows' => 1,
                        'tax_query' => array(
                                            array(
                                                'taxonomy' => 'hs_faq_taxomomy',
                                                'field' => 'slug',
                                                'terms' => $term
                                            )
                                        )
                        )
            );

            while ($query->have_posts()) : $query->the_post();
            ?>
            <div class="hs-faq-question">
                <?php the_title(); ?>
            </div> 
    
            <div class="hs-faq-answer">
                <?php the_content(); ?>
            </div>
    
            <?php
                endwhile;
                echo '</section>';
            $i++;
        }
    }
    wp_reset_query();
?>
    
</div> <!-- .hs_accordion-->