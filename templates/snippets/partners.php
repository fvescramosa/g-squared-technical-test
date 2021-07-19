<div class="partners">
    <div class="container">
        <div class="partners__title">
            <h2>Our Partners</h2>
        </div>
        <div class="partners__content">
            <div class="partners__items">
                <?php while(have_rows('partners')): the_row(); ?>
                    <div class=" partners__item text-center" >
                        <a href="<?php echo get_sub_field('link'); ?>" target="_blank" >
                            <img src="<?php echo get_sub_field('image')['url'];?>" alt="<?php echo get_sub_field('name'); ?>">
                        </a>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
</div>