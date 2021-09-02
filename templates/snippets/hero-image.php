<?php  $opt = get_sub_field('option'); ?>

<?php if($opt['value'] == 'slick'): ?>


    <div class="hero-image">
        <div class="hero-image-container">
        <?php while(have_rows('slick_header')): the_row(); ?>
            <?php
            while(have_rows('call_to_action')): the_row();
                $label = get_sub_field('label');
                $url = get_sub_field('link');
            endwhile;
            ?>
            <div class="hero-image-item" style="background-image: url('<?php echo get_sub_field('image')['url'];?>');">
                <div class="overlay">
                    <div class="hero-image-content">
                        <div class="wrapper">
                            <h1 class="title"><?php echo get_sub_field('title')?></h1>
                            <div class="subtitle">
                                <?php echo get_sub_field('subtitle')?>
                            </div>
                            <?php if($url != ''): ?>
                            <div class="button-area">
                                <a href="<?php echo $url ?>" class="cdlc_btn cdlc_btn-primary"><?php echo $label; ?></a>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>

            </div>
        <?php endwhile; ?>

        </div>
        <div class="hero-image-slick-buttons">

        </div>
    </div>
<?php else: ?>
<div class="hero-image">
    <div class="hero-video-container">

        <video  autoplay="" name="media" class="mtz-vlc-ionpb">
            <source src="<?php echo get_sub_field('video')?>" type="video/mp4">
        </video>
    </div>
</div>
<?php endif; ?>

