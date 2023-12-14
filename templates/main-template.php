<?php get_header(); ?>

  <div id="content" class="<?php echo $post->post_name; ?>">

    <?php
      while(have_rows('page_header')): the_row();

            if(get_row_layout() == 'hero_image'):
                get_template_part('templates/snippets/hero-image');
            endif;

      endwhile;
    ?>
    <section class="main-template">
        <?php
            while(have_rows('main_template')): the_row();
                if(get_row_layout() == 'media_and_text'):
                    get_template_part('templates/snippets/media_and_text');
                endif;
            endwhile;
        ?>
    </section>
</div> <!-- end #content -->

<?php get_footer(); ?>
