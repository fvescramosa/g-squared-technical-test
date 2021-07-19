<?php  $opt = get_sub_field('option'); ?>

<?php if($opt['value'] == 'slick'): ?>
    <div class="hero-image">
        <div class="hero-image-container">
        <?php while(have_rows('slick_header')): the_row(); ?>
            <div class="hero-image-item" style="background-image: url('<?php echo get_sub_field('image')['url'];?>');">
                <div class="overlay">
                    <div class="hero-image-content">
                        <div class="wrapper">
                            <h1 class="title"><?php echo get_sub_field('title')?></h1>
                            <p class="subtitle"><?php echo get_sub_field('subtitle')?></p>
                        </div>
                    </div>
                </div>

            </div>
        <?php endwhile; ?>

        </div>
        <div class="hero-image-slick-buttons"></div>
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

