<div class="difficulties">
    <?php
        $column = '';
        $align = '';
        while(have_rows('options')): the_row();
            $column = get_sub_field('columns');
            $align = get_sub_field('content_align');
            $page_color = get_sub_field('page_color');
        endwhile;
    ?>
    <div class="container">
        <div class="difficulties-flex">
            <div class="difficulties-column one">
                <div class="content">
                    <?php echo get_sub_field('text_column_1'); ?>
                </div>
            </div>
            <?php if($column == 'two'):?>
                <div class="difficulties-column two">
                    <div class="content <?php echo $page_color; ?>">
                        <?php echo get_sub_field('text_column_2'); ?>
                    </div>
                </div>
            <?php endif ?>
            <div class="difficulties-image">
                <div class="difficulties-image-container">
                    <img src="<?php echo get_sub_field('image')['url']; ?>" alt="<?php the_title(); ?>">
                </div>
            </div>
        </div>
    </div>
</div>