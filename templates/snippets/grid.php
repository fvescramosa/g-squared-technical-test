<!--
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
                <?php while(have_rows('button_area')): the_row();  ?>
                <div class="grid-flex-item__bottom">
                    <a href="<?php echo get_sub_field('link'); ?>" class=" cdlc_btn rounded-20"><?php echo get_sub_field('label'); ?></a>
                </div>
                <?php endwhile; ?>

            </div>
            <?php endwhile; ?>
        </div>
    </div>
</div>
-->

<div class="grid2" id="what-we-offer">
    <div class="grid2-full-width">
        <?php  $i = 1; while(have_rows('grid')): the_row();?>

            <div class="grid2-item  grid2--item-background" style="background-image: url('<?php echo get_sub_field('image')['url']; ?>')">
                <div class="overlay"></div>
                <div class="grid2-item--header grid2-item--header<?php echo $i; ?>">

                </div>
                <div class="grid2-item--description grid2-item--description<?php echo $i; $i++?>">
                    <?php while(have_rows('content')): the_row();  ?>
                        <div style="position:  relative; height: 100%">
                            <div class="title--container">
                                <h4 class="title"><?php echo get_sub_field('title'); ?></h4>
                            </div>
                        </div>
                        <div class="description">
                            <p><?php echo get_sub_field('text'); ?></p>
                        </div>
                    <?php endwhile; ?>
                    <?php while(have_rows('button_area')): the_row();  ?>
                        <div class="grid2-item--bottom">
                            <a href="<?php echo get_sub_field('link'); ?>" class=" cdlc_btn rounded-20"><?php echo get_sub_field('label'); ?></a>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
</div>