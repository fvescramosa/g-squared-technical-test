<div class="media-text">
    <div class="container">
        <div class="media-text-box">
            <div class="media-container">
                <div class="media-content">
                    <img src="<?= get_sub_field('image')['url']; ?>" alt="">

                </div>
            </div>
            <div class="text-container">

                    <?php while(have_rows('text_content')): the_row(); ?>
                    <div class="text-content">
                        <h3 class="title">
                            <?= get_sub_field('title'); ?>
                        </h3>
                        <div class="text">
                            <?= get_sub_field('text'); ?>
                        </div>
                    </div>
                    <?php endwhile;?>

            </div>
        </div>
    </div>
</div>