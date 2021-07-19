<div class="grid">
    <?php

            $columns = '';
            $display_title = '';
            while(have_rows('options')): the_row();
                $columns = 'grid-flex-item'.get_sub_field('columns');
                $display_title = get_sub_field('display_title');

            endwhile;

    ?>
    <div class="container">
        <?php if ($display_title): ?>
        <div class="grid-title-area">
            <h2><?php echo get_sub_field('title'); ?></h2>
        </div>
        <?php endif; ?>
        <div class="grid-flex">
            <?php while(have_rows('grid')): the_row(); ?>
            <div class="grid-flex-item <?php echo (!empty($columns)) ? $columns : ''; ?>">
                <canvas style="background-image: url('<?php echo get_sub_field('image')['url']; ?>')"></canvas>
                <div class="details">
                    <?php while(have_rows('content')): the_row();  ?>
                        <h4 class="title"><?php echo get_sub_field('title'); ?></h4>
                        <p><?php echo get_sub_field('text'); ?></p>
                    <?php endwhile; ?>
                </div>
                <div class="grid-flex-item__bottom">
                    <a href="<?php echo get_sub_field('url'); ?>" class=" cdlc_btn rounded-20">Find out More</a>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
    </div>
</div>

