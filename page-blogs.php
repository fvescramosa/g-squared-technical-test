<?php
/**
     * Template Name: Blogs
 *
 * For more info: https://developer.wordpress.org/themes/basics/template-hierarchy/
 */

get_header(); ?>
<div id="content" class="<?php echo $post->post_name; ?>">
    <div class="page-header" style="background-image: url('<?php echo home_url(). '/wp-content/uploads/2021/06/about.jpg'?>')">
        <div class="overlay">
            <div class="container">
                <div class="page-header-content">
                    <h1 class="title">Blogs</h1>
                </div>
            </div>
        </div>
    </div>
    <section class="main-template">
	    <div class="container">
            <?php
                $args = array(
                    'post_type' => 'post',
                    'post_per_page' => -1
                );
                $wp_query = new WP_Query( $args );
                while ( $wp_query->have_posts() ) : $wp_query->the_post();

                $post_id = get_the_ID();
                $post_title = get_the_title();
                $post_content = get_the_content();
                $post_excerpt = get_the_content();
                $post_permalink = get_the_permalink();
                $post_rate_value = round( get_post_meta( $post_id, 'star_val', true ) );
                $post_thumbnail_url =get_the_post_thumbnail_url($post_id, 'large');

                $excerpt_length = strlen( $post_excerpt );

                $excerpt_more_length = strlen( $excerpt_more_text );
                $post_excerpt = substr( $post_excerpt, 0, 350 );
                $post_excerpt .= $excerpt_more_text;



                ?>
                <a href="<?php echo get_permalink(); ?>" class="post-permalink">
                    <div class="post-flex">
                        <div class="post-thumbnail">
                            <canvas  style="background-image: url('<?php echo ($post_thumbnail_url) ? $post_thumbnail_url : 'http://staging.cognitive.com.sg/wp-content/uploads/2021/01/pexels-amina-filkins-5560081-1024x683.jpg' ?>')"></canvas>
                        </div>
                        <div class="post-content">
                            <h3 class="post-content-title"><?php echo the_title(); ?></h3>
                            <p>
                                <?php echo $post_excerpt; ?>
                            </p>
                        </div>

                    </div>
                </a>

            <?php
            endwhile;
            ?>
	    </div> <!-- end #content -->
    </section>
</div>

<?php get_footer(); ?>