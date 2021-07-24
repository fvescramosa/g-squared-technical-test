<?php

while(have_rows('options')): the_row();
    $width = get_sub_field('image_width');
endwhile;
?>

<div class="our-team">
    <div class="container">
        <div class="our-team-1">
            <div class="our-team-1__flex">
                <div class="image" style="">
                    <img src="<?php echo get_sub_field('image')['url']; ?>" alt="">
                </div>
                <div class="text"  style="">
                    <?php echo get_sub_field('text'); ?>
                </div>
            </div>
        </div>
    </div>
</div>
