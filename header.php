<?php
/**
 * The template for displaying the header
 *
 * This is the template that displays all of the <head> section
 *
 */
?>
<!doctype html>
<html class="no-js"  <?php language_attributes(); ?>>

  <head>
    <meta charset="utf-8">

    <!-- Force IE to use the latest rendering engine available -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta class="foundation-mq">
      <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
      <div id="fb-root"></div>
      <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v7.0" nonce="BFeXoOtU"></script>
      <!-- Global site tag (gtag.js) - Google Analytics -->


      <?php
      echo '<!--All google tags goes here -->';
            while(have_rows('script_tags', 'option')): the_row();
      ?>
            <?php
                //echo json_encode(the_sub_field('page', 'option'));
                //if(the_sub_field('page', 'option') == ''):
                    the_sub_field('scripts', 'option');
                //endif
                ?>
      <?php endwhile; ?>
      <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>
    <header class="header " role="banner">
       <?php get_template_part( 'parts/navigation-menu' ); ?>
    </header> <!-- end .header -->
