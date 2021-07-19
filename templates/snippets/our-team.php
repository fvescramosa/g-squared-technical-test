<div class="our-team">
    <div class="container">
    <?php if(get_row_layout() == 'our_team'): ?>
        <h2 class="title"><?php echo get_sub_field('title'); ?></h2>

        <div class="our-team-flex">
            <?php while (have_rows('image_and_text')): the_row(); ?>
                <div class="our-team-grid">
                    <div class="our-team-grid__wrapper">
                        <img src="<?php echo get_sub_field('image')['url']; ?>" alt="">
                        <div class="our-team-grid__content">
                            <p><?php echo get_sub_field('text'); ?></p>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    <?php elseif(get_row_layout() == 'our_team_2'): ?>
        team2
        <h2 class="title"><?php echo get_sub_field('title'); ?></h2>

        <div class="subtitle">
            <?php echo get_sub_field('subtitle'); ?>
        </div>

        <div class="our-team-2-flex">
            <?php while (have_rows('image_and_text')): the_row(); ?>
            <div class="our-team-2-grid">
                <div class="our-team-2-grid__wrapper">
                    <img src="<?php echo get_sub_field('image')['url']; ?>" alt="">
                    <div class="name">
                        <p><?php echo get_sub_field('name'); ?></p>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
    <?php endif; ?>
    </div>
</div>