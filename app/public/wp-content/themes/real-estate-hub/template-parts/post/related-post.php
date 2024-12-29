<?php

$real_estate_hub_post_args = array(
    'posts_per_page'    => get_theme_mod( 'real_estate_hub_related_post_per_page', 3 ),
    'orderby'           => 'rand',
    'post__not_in'      => array( get_the_ID() ),
);

$real_estate_hub_number_of_post_columns = get_theme_mod('real_estate_hub_related_post_per_columns', 3);

$real_estate_hub_col_lg_post_class = 'col-lg-' . (12 / $real_estate_hub_number_of_post_columns);

$related = wp_get_post_terms( get_the_ID(), 'category' );
$real_estate_hub_ids = array();
foreach( $related as $term ) {
    $real_estate_hub_ids[] = $term->term_id;
}

$real_estate_hub_post_args['category__in'] = $real_estate_hub_ids; 

$related_posts = new WP_Query( $real_estate_hub_post_args );

if ( $related_posts->have_posts() ) : ?>
        <div class="related-post-block">
        <h3 class="text-center mb-3"><?php echo esc_html(get_theme_mod('real_estate_hub_related_post_heading',__('Related Posts','real-estate-hub')));?></h3>
        <div class="row">
            <?php while ( $related_posts->have_posts() ) : $related_posts->the_post(); ?>
                <div class="<?php echo esc_attr($real_estate_hub_col_lg_post_class); ?> col-md-6">
                    <div id="category-post">
                        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                            <div class="page-box">
                                <?php if(has_post_thumbnail()) { ?>
                                        <?php the_post_thumbnail();  ?>    
                                <?php } ?>
                                <div class="box-content text-left">
                                    <h4 class="text-left py-2"><a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php the_title_attribute(); ?>"><?php the_title();?></a></h4>
                                    
                                    <p><?php echo wp_trim_words(get_the_content(), get_theme_mod('real_estate_hub_excerpt_count',10) );?></p>
                                    <?php if(get_theme_mod('real_estate_hub_remove_read_button',true) != ''){ ?>
                                    <div class="readmore-btn text-left mb-1">
                                        <a href="<?php echo esc_url( get_permalink() );?>" class="blogbutton-small" title="<?php esc_attr_e( 'Read More', 'real-estate-hub' ); ?>"><?php echo esc_html(get_theme_mod('real_estate_hub_read_more_text',__('Read More','real-estate-hub')));?></a>
                                    </div>
                                    <?php }?>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </article>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
<?php endif;
wp_reset_postdata();