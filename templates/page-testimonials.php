<?php

/** Template Name: Page Testimonials */
get_header(); ?>

<div id="content" class="<?php echo $post->post_name; ?>">
    <div class="page-header" style="background-image: url('<?php echo home_url(). '/wp-content/uploads/2021/06/about.jpg'?>')">
        <div class="overlay">
            <div class="container">
                <div class="page-header-content">
                    <h1 class="title"><?php the_title(); ?></h1>
                </div>
            </div>
        </div>
    </div>
    <section class="main-template">
        <div class="title">
            <div class="container">
                <h1 style="text-align: center; text-transform: uppercase"><?php the_title(); ?></h1>
            </div>
        </div>
        <div class="container">
            <div class="testimonials-archive">
                <?php
                    $args = array(
                                    'post_type' => 'testimonials',
                                    'post_per_page' => -1
                    );
                $wp_query = new WP_Query( $args );
                while ( $wp_query->have_posts() ) : $wp_query->the_post();


                    $testimonial_id = get_the_ID();
                    $testimonial_title = get_the_title();
                    $testimonial_content = get_the_content();
                    $testimonial_excerpt = get_the_content();
                    $testimonial_permalink = get_the_permalink();
                    $testimonial_rate_value = round( get_post_meta( $testimonial_id, 'star_val', true ) );


                    $excerpt_length = strlen( $testimonial_excerpt );

                    $excerpt_more_length = strlen( $excerpt_more_text );
                    $testimonial_excerpt = substr( $testimonial_excerpt, 0, -1 );
                    $testimonial_excerpt .= $excerpt_more_text;



                    ?>

                            <div class="testimonial">
                                <div class="box">
                                    <p>
                                        <?php echo $testimonial_excerpt; ?>
                                    </p>
                                    <h3 class="parent"><?php the_title(); ?><span>, Parent</span></h3>
                                </div>

                            </div>
                <?php
                endwhile;
                ?>
            </div>
        </div>

    </section>
</div> <!-- end #content -->
<?php get_footer(); ?>
