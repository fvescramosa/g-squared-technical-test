<?php
get_header(); ?>
<div id="content" class="<?php echo $post->post_name; ?>">
    <div class="page-header" style="background-image: url('<?php echo home_url(). '/wp-content/uploads/2021/06/about.jpg'?>')">
        <div class="overlay">
            <div class="container">
                <div class="page-header-content">
                    <h1 class="title">Videos</h1>
                </div>
            </div>
        </div>
    </div>
    <section class="main-template">
        <div class="videos">
            <div class="container">
                <div class="videos-title">
                    <h2>Videos</h2>
                </div>
                <div class="videos-flex">
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                    <div class="videos-flex-item">
                        <a href="<?php echo get_permalink(); ?>">
                            <canvas style="background-image: url(<?php echo get_the_post_thumbnail_url($post->ID, 'large')?>)"></canvas>
                            <div class="details">
                                <h4 class="title"><?php the_title(); ?></h4>
                            </div>
                        </a>
                    </div>
                    <?php endwhile; ?>



                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
</div>
<?php get_footer(); ?>