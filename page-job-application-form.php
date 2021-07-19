<?php /* Template Name: Job Application Form */?>

<?php

get_header();

?>

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
            //'updated_message' => __("Listing was created succesfully. Please wait for approval.", 'listings'),
            'field_groups' => array(
                'group_60e2b81588350'
            ),
            'label_placement' => 'left',
            'instruction_placement' => 'field',
        );
        ?>
            <div class="form-title">
                <h1><?php echo get_the_title(); ?></h1>
            </div>
            <i class="fi-checkbox"></i>
            <?php
            acf_form( $acf_settings ); ?>
    </div>
</div>
<?php get_footer();?>