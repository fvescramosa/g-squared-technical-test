<?php
$tag = '';
while(have_rows('options')): the_row();
    $width = get_sub_field('width');
    $wcta = get_sub_field('with_call_to_action');
    $column = get_sub_field('column');
    $background_color = get_sub_field('background');
//    $text_align = get_sub_field('text_align');
endwhile;

if($wcta):
    while(have_rows('call_to_action')): the_row();
        $button1['label'] = get_sub_field('label');
        $button1['type']= get_sub_field('type');
        $button1['align'] = get_sub_field('button_align');
        $button1['url'] = get_sub_field('url');
    endwhile;


    while(have_rows('call_to_action_2')): the_row();
        $button2['label'] = get_sub_field('label');
        $button2['type'] = get_sub_field('type');
        $button2['align'] = get_sub_field('button_align');
        $button2['url'] = get_sub_field('url');
    endwhile;

endif;
?>

<div class="text-content-column" style="background-color: <?php echo $background_color; ?>">

    <div class="container">
        <div class="text-content-flex">
            <?php $scale = 100 - $width; ?>
            <div class="text-content" style="flex: 1 1 <?php echo $width; ?>%; max-width: <?php echo $width; ?>% ">

                    <div class="text <?php echo ($width == 50) ? 'short' : ''; ?>" style="">
                        <?php echo get_sub_field('text'); ?>
                    </div>

                    <?php if($wcta): ?>
                        <?php if($button1['url'] != ''): ?>
                        <div class="text-button" style="text-align: <?php echo $button1['align']; ?>">
                            <a href="<?php echo $button1['url']; ?>" class="cdlc_btn cdlc_btn-<?php echo $button1['type']; ?>"><?php echo $button1['label']; ?></a>
                        </div>
                        <?php endif; ?>
                    <?php endif; ?>

            </div>

            <div class="text-content" style="flex: 1 1 <?php echo $scale; ?>%; max-width: <?php echo $scale; ?>%">
                <div class="text <?php echo ($scale == 50) ? 'short' : ''; ?>">
                    <?php echo get_sub_field('text_column_2'); ?>
                </div>
                <?php if($wcta): ?>
                    <?php if( $button2['url'] != ''): ?>
                    <div class="text-button" style="text-align: <?php echo $button2['align']; ?>">
                        <a href="<?php echo $button2['url']; ?>" class="cdlc_btn cdlc_btn-<?php echo $button2['type']; ?>"><?php echo $button2['label']; ?></a>
                    </div>
                    <?php endif; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>


</div>