<?php
$tag = '';
while(have_rows('options')): the_row();
    $design = get_sub_field('design');
    $background_color = get_sub_field('background');
    $width = get_sub_field('width');
    $wcta = get_sub_field('with_call_to_action');
//    $text_align = get_sub_field('text_align');
endwhile;

if($wcta):
    while(have_rows('call_to_action')): the_row();
        $label = get_sub_field('label');
        $type = get_sub_field('type');
        $align = get_sub_field('button_align');
        $url = get_sub_field('url');
    endwhile;

endif;
?>

<div class="text-content <?php echo $background_color; ?>">
    <div class="container">
        <div class="text <?php echo ($design == 'none') ? '' : $design; ?> <?php echo $width; ?>">
            <?php echo get_sub_field('text'); ?>
        </div>

        <?php if($wcta): ?>
            <div class="text-button" style="text-align: <?php echo $align; ?>">
                <a href="<?php echo $url; ?>" class="cdlc_btn cdlc_btn-<?php echo $type; ?>"><?php echo $label; ?></a>
            </div>
        <?php endif; ?>
    </div>
</div>