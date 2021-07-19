<?php  $opt = get_sub_field('option'); ?>

<div class="video-text">
    <div class="container">
        <div class="vt-container">
            <div class="vt-video">
                <div class="video-container">
                    <iframe
                            src="<?php echo get_sub_field('video'); ?>">
                    </iframe>
                </div>
            </div>
            <div class="vt-text">
                <div class="wrapper">
                    <div class="title"><h3><?php echo get_sub_field('title'); ?></h3></div>
                    <div class="subtitle"><?php echo get_sub_field('text'); ?></div>

                    <a href="<?php echo get_sub_field('button'); ?>" class="button"><?php echo get_sub_field('label'); ?></a>
                </div>
            </div>
        </div>
    </div>
</div>


