<div class="difficulties-grid">
    <?php
        while(have_rows('options')): the_row();
            $page_color = get_sub_field('page_color');
        endwhile;
    ?>
    <div class="container">
        <div class="difficulties-grid-flex">
            <?php while(have_rows('grid')): the_row(); ?>

                <div class="difficulties-grid-item">
                    <div class="icon-holder">
                        <span class="<?php echo  get_sub_field('icon');?>"></span>
                    </div>
                    <div class="difficulties-title">
                        <?php echo  get_sub_field('difficulties');?>
                    </div>
                    <div class="description-holder">
                        <?php echo  get_sub_field('description');?>
                    </div>
                    <div class="button-holder">
                        <a href="<?php echo  get_sub_field('link'); ?>" class="cdlc_btn">Read More</a>
                    </div>
                </div>

            <?php endwhile; ?>
        </div>
    </div>
</div>