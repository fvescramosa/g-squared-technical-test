<?php
$tag = '';
while(have_rows('options')): the_row();
    $design = get_sub_field('design');
    $background_color = get_sub_field('background');
    $width = get_sub_field('width');
//    $text_align = get_sub_field('text_align');
endwhile;
?>

<div class="text-content <?php echo $background_color; ?>">
    <div class="container">
        <div class="text <?php echo ($design == 'none') ? '' : $design; ?> <?php echo $width; ?>">
            <?php echo get_sub_field('text'); ?>
        </div>
    </div>
</div>