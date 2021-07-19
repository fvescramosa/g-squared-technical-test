<div class="our-team">
    <div class="container">

        <h2 class="title"><?php echo get_sub_field('title'); ?></h2>

        <div class="our-team-2-flex">
            <?php while (have_rows('image_and_text')): the_row(); ?>
                <div class="our-team-2-grid">
                    <div class="our-team-2-grid__wrapper">
                        <img src="<?php echo get_sub_field('image')['url']; ?>" alt="">
                        <div class="our-team-2-grid__content">
                            <p><?php echo get_sub_field('text'); ?></p>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
</div>