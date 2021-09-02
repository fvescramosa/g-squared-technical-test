<?php /* Template Name: Job Application Form */?>

<?php
acf_form_head();
get_header();

?>

    <style>
        .acf-form-fields{
            display: flex;
            flex-flow: row wrap;
        }


        label{
            text-transform: uppercase;
        }


        .acf-fields>.acf-field{

        }
    </style>
<div id="content" class="<?php echo $post->post_name; ?>">
    <div class="page-header" style="background-image: url('<?php echo home_url(). '/wp-content/uploads/2021/06/about.jpg'?>')">
        <div class="overlay">
            <div class="container">
                <div class="page-header-content">
                    <h1 class="title"><?PHP echo the_title()?></h1>
                </div>
            </div>
        </div>
    </div>

    <section class="main-template" style="/*background-image: url('http://cognitive.test/wp-content/uploads/2021/08/bwicks.jpg'); background-repeat: no-repeat; background-size: cover*/">
        <div class="job">
            <div class="container">
                <?php

                $acf_settings = array(
                    'post_id' => 'new_post',
                    'new_post' => array(
                        'post_type'     => 'job_applications',
                        'post_status'   => 'publish'
                    ),
                    'submit_value'  => __('Submit Application', 'cognitive'),
                    'updated_message' => __("Thank you for sending your application.", 'cognitive'),
                    'field_groups' => array(
                        'group_60e2b81588350'
                    ),
                    'label_placement' => 'top',
                    'instruction_placement' => 'field',
                );
                ?>

                    <?php
                    acf_form( $acf_settings ); ?>
            </div>
        </div>
    </section>
</div>
<?php get_footer();?>