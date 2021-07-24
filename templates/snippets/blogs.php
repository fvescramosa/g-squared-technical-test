

<div class="blogs">
    <?php
    $numberpost = get_sub_field('no_of_post');
    $order = get_sub_field('order');
    $category = get_sub_field('category');

    ?>
    <div class="container">

        <div class="blogs-title-area">
            <h2>OUR BLOGS</h2>
        </div>
        <div class="blogs-flex">
                <?php
                    $args = array(
                            'post_type' => 'post',
                            'posts_per_page' => $numberpost,
                            'order' =>  $order,
                        );


                    $wp_query = new WP_Query( $args );
                    while ( $wp_query->have_posts() ) : $wp_query->the_post();


                        $post_id = get_the_ID();
                        $post_title = get_the_title();
                        $post_content = get_the_content();
                        $post_excerpt = get_the_content();
                        $post_permalink = get_the_permalink();
                        $post_rate_value = round( get_post_meta( $post_id, 'star_val', true ) );


                        $excerpt_length = strlen( $post_excerpt );

                        $excerpt_more_length = strlen( $excerpt_more_text );
                        $post_excerpt = substr( $post_excerpt, 0, 400 );
                        $post_excerpt .= $excerpt_more_text;


                        
                ?>
                <div class="blogs-flex-blog by-3">
                    <canvas style="background-image: url('<?php echo bloginfo('url');?>/wp-content/uploads/2021/06/pexels-amina-filkins-5560081-825x340-1.jpg')"></canvas>
                    <div class="details">
                        <h4 class="title"><?php echo get_the_title(); ?></h4>
                        <p>
                            <?php echo $post_excerpt; ?>
                        </p>
                    </div>
                    <div class="blogs-flex-blog__bottom">
                        <a href="<?php echo $post_permalink ?>" class="cdlc_btn rounded-20">Read More</a>
                    </div>
                </div>


                <?php
                    endwhile;
                ?>
        </div>
    </div>
</div>

