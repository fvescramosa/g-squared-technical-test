
<div class="desktop-menu show-for-medium <?php if($post->post_name == 'home' ): echo 'homepage'; endif;?>" id="main-menu">
        <div class="container" style="">
            <div class="logo-container">
                <a href="<?php echo get_home_url(); ?>" class="logo-link">
                    <img src="<?php  the_field('logo', 'option'); ?>" alt="">
                </a>
            </div>
            <div class="top-bar">
                <div class="top-bar-left">
                    <?php joints_top_nav(); ?>
                </div>
            </div>
        </div>
</div>

<div class="mobile-menu show-for-small-only">
    <div class="container">

        <div class="title-bar" data-responsive-toggle="example-menu" data-hide-for="medium">
            <div class="logo-container">
                <a href="<?php echo get_home_url(); ?>" class="logo-link">
                    <img src="<?php  the_field('logo', 'option'); ?>" alt="">
                </a>
            </div>

            <button class="menu-icon" id="menu-icon" type="button"></button>

        </div>
        <div id="menu-container">
            <?php joints_top_nav(); ?>
        </div>
    </div>
</div>
