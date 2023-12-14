<?php 
/**
 * The template for displaying all single posts and attachments
 */

get_header(); ?>

    <div class="page-header" style="background-image: url('')">
        <div class="overlay">
            <div class="container">
                <div class="page-header-content">
                    <h1 class="title"><?php echo get_post_type(); ?></h1>
                </div>
            </div>
        </div>
    </div>



    <section class="main-template">
        <div class="container">

            <div class="inner-content grid-x grid-margin-x grid-padding-x">

                <main class="main small-12 medium-8 large-8 cell" role="main">

                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                        <?php get_template_part( 'parts/loop', 'single' ); ?>

                    <?php endwhile; else : ?>

                        <?php get_template_part( 'parts/content', 'missing' ); ?>

                    <?php endif; ?>

                </main> <!-- end #main -->

                <?php get_sidebar(); ?>

            </div> <!-- end #inner-content -->

        </div> <!-- end #content -->

    </section>

<?php get_footer(); ?>