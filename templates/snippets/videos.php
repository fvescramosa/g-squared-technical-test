<?php /** Template Name:  Videos */
get_header(); ?>

<div class="videos">
    <div class="container">
        <div class="blogs-title-area">
            <h2><?php the_title(); ?></h2>
        </div>
        <div class="videos-flex">
            <?php echo get_the_content(); ?>
        </div>
    </div>
</div>
