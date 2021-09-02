<?php get_header(); ?>

  <div id="content" class="<?php echo $post->post_name; ?>">

    <?php
      while(have_rows('page_header')): the_row();
        if(get_row_layout() == 'hero_image'):
            get_template_part('templates/snippets/hero-image');
        elseif(get_row_layout() == 'page_header'):
            get_template_part('templates/snippets/page-header');
        endif;
      endwhile;
    ?>
    <section class="main-template">
        <?php
            while(have_rows('main_template')): the_row();
                if(get_row_layout() == 'title'):
                    get_template_part('templates/snippets/title');
                elseif(get_row_layout() == 'text_content'):
                    get_template_part('templates/snippets/text-content');
                elseif(get_row_layout() == 'text_content_column'):
                    get_template_part('templates/snippets/text-content_column');
                elseif(get_row_layout() == 'video_and_text'):
                    get_template_part('templates/snippets/video-text');
                elseif(get_row_layout() == 'grid_columns'):
                    get_template_part('templates/snippets/grid');
                elseif(get_row_layout() == 'blogs'):
                    get_template_part('templates/snippets/blogs');
                elseif(get_row_layout() == 'partners'):
                    get_template_part('templates/snippets/partners');
                elseif(get_row_layout() == 'partners_with_description'):
                    get_template_part('templates/snippets/partners-and-text');
                elseif(get_row_layout() == 'difficulties'):
                    get_template_part('templates/snippets/difficulties');
                elseif(get_row_layout() == 'difficulties_grid'):
                    get_template_part('templates/snippets/difficulties-grid');
                elseif(get_row_layout() == 'image'):
                    get_template_part('templates/snippets/image');
                elseif(get_row_layout() == 'image_text_row'):
                    get_template_part('templates/snippets/text-image-row');
                elseif(get_row_layout() == 'our_team' || get_row_layout() == 'our_team_1'):
                    get_template_part('templates/our-team/template-1');
                elseif(get_row_layout() == 'our_team' || get_row_layout() == 'our_team_2'):
                    get_template_part('templates/our-team/template-2');
                elseif(get_row_layout() == 'our_team' || get_row_layout() == 'our_team_3'):
                    get_template_part('templates/our-team/template-3');
                elseif(get_row_layout() == 'our_programs'):
                    get_template_part('templates/snippets/programs');
                elseif(get_row_layout() == 'edlip_boxes'):
                    get_template_part('templates/snippets/edlip-boxes');
                endif;
            endwhile;
        ?>
    </section>
</div> <!-- end #content -->

<?php get_footer(); ?>
