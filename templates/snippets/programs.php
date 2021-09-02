

<div class="programs">
    <div class="container">
        <?php while(have_rows('programs')): the_row(); ?>
            <dl>
                <dt class="programs-icon"><span class="far fa-smile"></span></dt>
                <dd class="programs-description">
                    <h3 class="title"><a href="<?php echo get_sub_field('link'); ?>"><?php echo get_sub_field('title'); ?></a></h3>
                    <div class="description">
                        <?php echo get_sub_field('description'); ?>
                    </div>
                    <div class="link-container">
                        <a href="<?php echo get_sub_field('link'); ?>" class="cdlc_btn">Read More</a>
                    </div>
                </dd>

            </dl>
        <?php endwhile; ?>
    </div>
</div>
