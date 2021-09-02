<div class="partners-and-text">
    <div class="container">
        <div class="partners-and-text__title">
            <h2>Our Partners</h2>
        </div>
        <div class="partners-and-text__content">
            <div class="partners-and-text__items">
                <?php while(have_rows('partners')): the_row(); ?>
                    <div class=" partners-and-text__item text-center" >
                        <a href="<?php echo get_sub_field('link'); ?>" target="_blank" >
                            <img src="<?php echo get_sub_field('image')['url'];?>" alt="<?php echo get_sub_field('name'); ?>">
                        </a>
                        <div class="text">
                            <?php echo get_sub_field('text'); ?>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
</div>