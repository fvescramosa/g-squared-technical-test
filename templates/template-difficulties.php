<?php /** Template Name: Difficulties */?>
<?php get_header(); ?>

  <div id="content" class="<?php echo $post->post_name; ?>">

    <?php
      while(have_rows('page_header')): the_row();
        if(get_row_layout() == 'page_header'):
            get_template_part('templates/snippets/page-header');
        endif;
      endwhile;
    ?>
    <section class="main-template">
        <?php
            while(have_rows('main_template')): the_row();

                    get_template_part('templates/snippets/difficulties');

            endwhile;
        ?>
    </section>
  </div> <!-- end #content -->

<?php get_footer(); ?>
