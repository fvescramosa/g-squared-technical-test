<?php
get_header(); ?>
<div id="content" class="<?php echo $post->post_name; ?>">
    <div class="page-header" style="background-image: url('<?php echo home_url(). '/wp-content/uploads/2021/06/about.jpg'?>')">
        <div class="overlay">
            <div class="container">
                <div class="page-header-content">
                    <h1 class="title">Videos</h1>
                </div>
            </div>
        </div>
    </div>
    <section class="main-template" style="/*background-image: url('http://cognitive.test/wp-content/uploads/2021/08/bwicks.jpg'); background-repeat: no-repeat; background-size: cover*/">
        <div class="videos">
            <div class="container">
                <div class="videos-title">
                    <h2><?php the_title(); ?></h2>
                </div>
                <div class="videos-content">

                        <div>

                            <?php echo get_field('embed_code'); ?>

                            <br>
                            <p>Check us out at: </p>
                            <p>Website: <a href="<?php echo get_field('website'); ?>"><?php echo get_field('website'); ?></a> </p>
                            <p>Facebook -  <a href="<?php echo get_field('facebook_1'); ?>"><?php echo get_field('facebook_1'); ?></a> </p>
                            <p>  <a href="<?php echo get_field('facebook_2'); ?>"><?php echo get_field('facebook_2'); ?></a> </p>
                            <p>Instagram -  <a href="<?php echo get_field('instagram'); ?>">@Cognitive.Development</a> </p>
                            <br>
                            <?php
                            //$des .= '[/vc_column_text][/vc_column][/vc_row]';

                            //echo do_shortcode($des);
                            ?>
                        </div>



                </div>
            </div>
        </div>
    </section>
</div>
