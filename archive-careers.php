<?php
get_header(); ?>
<div id="content" class="<?php echo $post->post_name; ?>">
    <div class="page-header" style="background-image: url('<?php echo home_url(). '/wp-content/uploads/2021/06/about.jpg'?>')">
        <div class="overlay">
            <div class="container">
                <div class="page-header-content">
                    <h1 class="title">Faqs</h1>
                </div>
            </div>
        </div>
    </div>
    <section class="main-template">
        <div class="faqs-title">
            <h2>Careers</h2>
        </div>
        <div class="faqs">
            <div class="container">
                <ul class="accordion" data-accordion data-deep-link="true" data-update-history="true" data-deep-link-smudge="true" data-deep-link-smudge-delay="500" id="deeplinked-accordion">
                    <?php  while (have_posts()) : the_post(); ?>
                        <li class="accordion-item" data-accordion-item>
                            <a href="#<?php echo $post->post_name; ?>" class="accordion-title"><?php the_title(); ?></a>
                            <div class="accordion-content" data-tab-content id="<?php echo $post->post_name; ?>">
                                <?php the_content(); ?>
                                <div class="text-button" style="text-align: center">
                                    <a href="/job-application/?position=<?php the_title(); ?>" class="cdlc_btn cdlc_btn-light">Apply Now</a>
                                </div>
                            </div>
                        </li>
                    <?php endwhile; ?>
                    <?php wp_reset_query(); ?>
                    <!-- ... -->
                </ul>
            </div>
        </div>
    </section>
</div>

<?php get_footer(); ?>