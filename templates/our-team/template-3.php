<div class="our-team">
    <div class="container">
        <h2 class="title"><?php echo get_sub_field('title'); ?></h2>

        <div class="subtitle">
            <?php echo get_sub_field('subtitle'); ?>
        </div>

        <div class="our-team-3-flex">
            <?php while (have_rows('image_and_text')): the_row(); ?>
            <div class="our-team-3-grid">
                <div class="our-team-3-grid__wrapper">
                    <img src="<?php echo get_sub_field('image')['url']; ?>" alt="">
                    <div class="name">
                        <p><?php echo get_sub_field('name'); ?></p>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
    </div>
</div>