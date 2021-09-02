<?php
/* joints Custom Post Type Example
This page walks you through creating 
a custom post type and taxonomies. You
can edit this one or copy the following code 
to create another one. 

I put this in a separate file so as to 
keep it organized. I find it easier to edit
and change things if they are concentrated
in their own file.

*/


// let's create the function for the custom type
//function custom_post_example() {
//	// creating (registering) the custom type
//	register_post_type( 'custom_type', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
//	 	// let's now add all the options for this post type
//		array('labels' => array(
//			'name' => __('Custom Types', 'jointswp'), /* This is the Title of the Group */
//			'singular_name' => __('Custom Post', 'jointswp'), /* This is the individual type */
//			'all_items' => __('All Custom Posts', 'jointswp'), /* the all items menu item */
//			'add_new' => __('Add New', 'jointswp'), /* The add new menu item */
//			'add_new_item' => __('Add New Custom Type', 'jointswp'), /* Add New Display Title */
//			'edit' => __( 'Edit', 'jointswp' ), /* Edit Dialog */
//			'edit_item' => __('Edit Post Types', 'jointswp'), /* Edit Display Title */
//			'new_item' => __('New Post Type', 'jointswp'), /* New Display Title */
//			'view_item' => __('View Post Type', 'jointswp'), /* View Display Title */
//			'search_items' => __('Search Post Type', 'jointswp'), /* Search Custom Type Title */
//			'not_found' =>  __('Nothing found in the Database.', 'jointswp'), /* This displays if there are no entries yet */
//			'not_found_in_trash' => __('Nothing found in Trash', 'jointswp'), /* This displays if there is nothing in the trash */
//			'parent_item_colon' => ''
//			), /* end of arrays */
//			'description' => __( 'This is the example custom post type', 'jointswp' ), /* Custom Type Description */
//			'public' => true,
//			'publicly_queryable' => true,
//			'exclude_from_search' => false,
//			'show_ui' => true,
//			'query_var' => true,
//			'menu_position' => 8, /* this is what order you want it to appear in on the left hand side menu */
//			'menu_icon' => 'dashicons-book', /* the icon for the custom post type menu. uses built-in dashicons (CSS class name) */
//			'rewrite'	=> array( 'slug' => 'custom_type', 'with_front' => false ), /* you can specify its url slug */
//			'has_archive' => 'custom_type', /* you can rename the slug here */
//			'capability_type' => 'post',
//			'hierarchical' => false,
//			/* the next one is important, it tells what's enabled in the post editor */
//			'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'sticky')
//	 	) /* end of options */
//	); /* end of register post type */
//
//	/* this adds your post categories to your custom post type */
//	register_taxonomy_for_object_type('category', 'custom_type');
//	/* this adds your post tags to your custom post type */
//	register_taxonomy_for_object_type('post_tag', 'custom_type');
//
//}
//
//	// adding the function to the Wordpress init
//	add_action( 'init', 'custom_post_example');
	
	/*
	for more information on taxonomies, go here:
	http://codex.wordpress.org/Function_Reference/register_taxonomy
	*/
	
	// now let's add custom categories (these act like categories)
//    register_taxonomy( 'custom_cat',
//    	array('custom_type'), /* if you change the name of register_post_type( 'custom_type', then you have to change this */
//    	array('hierarchical' => true,     /* if this is true, it acts like categories */
//    		'labels' => array(
//    			'name' => __( 'Custom Categories', 'jointswp' ), /* name of the custom taxonomy */
//    			'singular_name' => __( 'Custom Category', 'jointswp' ), /* single taxonomy name */
//    			'search_items' =>  __( 'Search Custom Categories', 'jointswp' ), /* search title for taxomony */
//    			'all_items' => __( 'All Custom Categories', 'jointswp' ), /* all title for taxonomies */
//    			'parent_item' => __( 'Parent Custom Category', 'jointswp' ), /* parent title for taxonomy */
//    			'parent_item_colon' => __( 'Parent Custom Category:', 'jointswp' ), /* parent taxonomy title */
//    			'edit_item' => __( 'Edit Custom Category', 'jointswp' ), /* edit custom taxonomy title */
//    			'update_item' => __( 'Update Custom Category', 'jointswp' ), /* update title for taxonomy */
//    			'add_new_item' => __( 'Add New Custom Category', 'jointswp' ), /* add new title for taxonomy */
//    			'new_item_name' => __( 'New Custom Category Name', 'jointswp' ) /* name title for taxonomy */
//    		),
//    		'show_admin_column' => true,
//    		'show_ui' => true,
//    		'query_var' => true,
//    		'rewrite' => array( 'slug' => 'custom-slug' ),
//    	)
//    );
    
	// now let's add custom tags (these act like categories)
//    register_taxonomy( 'custom_tag',
//    	array('custom_type'), /* if you change the name of register_post_type( 'custom_type', then you have to change this */
//    	array('hierarchical' => false,    /* if this is false, it acts like tags */
//    		'labels' => array(
//    			'name' => __( 'Custom Tags', 'jointswp' ), /* name of the custom taxonomy */
//    			'singular_name' => __( 'Custom Tag', 'jointswp' ), /* single taxonomy name */
//    			'search_items' =>  __( 'Search Custom Tags', 'jointswp' ), /* search title for taxomony */
//    			'all_items' => __( 'All Custom Tags', 'jointswp' ), /* all title for taxonomies */
//    			'parent_item' => __( 'Parent Custom Tag', 'jointswp' ), /* parent title for taxonomy */
//    			'parent_item_colon' => __( 'Parent Custom Tag:', 'jointswp' ), /* parent taxonomy title */
//    			'edit_item' => __( 'Edit Custom Tag', 'jointswp' ), /* edit custom taxonomy title */
//    			'update_item' => __( 'Update Custom Tag', 'jointswp' ), /* update title for taxonomy */
//    			'add_new_item' => __( 'Add New Custom Tag', 'jointswp' ), /* add new title for taxonomy */
//    			'new_item_name' => __( 'New Custom Tag Name', 'jointswp' ) /* name title for taxonomy */
//    		),
//    		'show_admin_column' => true,
//    		'show_ui' => true,
//    		'query_var' => true,
//    	)
//    );
    
    /*
    	looking for custom meta boxes?
    	check out this fantastic tool:
    	https://github.com/CMB2/CMB2
    */
if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
        'page_title' => 'Page Settings',
        'menu_title' => 'Page Settings',
        'menu_slug' => 'theme-general-settings',
        'capability' => 'edit_posts',
        'redirect' => false
    ));
}

function custom_post_example() {
	// creating (registering) the custom type
	register_post_type( 'job_applications', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
	 	// let's now add all the options for this post type
		array('labels' => array(
			'name' => __('Job Applications', 'jointswp'), /* This is the Title of the Group */
			'singular_name' => __('Job Application', 'jointswp'), /* This is the individual type */
			'all_items' => __('All Job Applications', 'jointswp'), /* the all items menu item */
			'add_new' => __('Add New', 'jointswp'), /* The add new menu item */
			'add_new_item' => __('Add New Job Application', 'jointswp'), /* Add New Display Title */
			'edit' => __( 'Edit', 'jointswp' ), /* Edit Dialog */
			'edit_item' => __('Edit Job Applications', 'jointswp'), /* Edit Display Title */
			'new_item' => __('New Job Application', 'jointswp'), /* New Display Title */
			'view_item' => __('View Job Application', 'jointswp'), /* View Display Title */
			'search_items' => __('Search Job Application', 'jointswp'), /* Search Custom Type Title */
			'not_found' =>  __('Nothing found in the Database.', 'jointswp'), /* This displays if there are no entries yet */
			'not_found_in_trash' => __('Nothing found in Trash', 'jointswp'), /* This displays if there is nothing in the trash */
			'parent_item_colon' => ''
			), /* end of arrays */
			'description' => __( 'Job Application Storage', 'jointswp' ), /* Custom Type Description */
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 8, /* this is what order you want it to appear in on the left hand side menu */
			'menu_icon' => 'dashicons-book', /* the icon for the custom post type menu. uses built-in dashicons (CSS class name) */
			'rewrite'	=> array( 'slug' => 'job_applications', 'with_front' => false ), /* you can specify its url slug */
			'has_archive' => 'job_application', /* you can rename the slug here */
			'capability_type' => 'post',
			'hierarchical' => false,
			/* the next one is important, it tells what's enabled in the post editor */
			'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'sticky')
	 	) /* end of options */
	); /* end of register post type */
	register_post_type( 'testimonials', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
	 	// let's now add all the options for this post type
		array('labels' => array(
			'name' => __('Testimonials', 'jointswp'), /* This is the Title of the Group */
			'singular_name' => __('Testimonial', 'jointswp'), /* This is the individual type */
			'all_items' => __('All Testimonials', 'jointswp'), /* the all items menu item */
			'add_new' => __('Add New', 'jointswp'), /* The add new menu item */
			'add_new_item' => __('Add New Testimonial', 'jointswp'), /* Add New Display Title */
			'edit' => __( 'Edit', 'jointswp' ), /* Edit Dialog */
			'edit_item' => __('Edit Testimonials', 'jointswp'), /* Edit Display Title */
			'new_item' => __('New Testimonials', 'jointswp'), /* New Display Title */
			'view_item' => __('View Testimonial', 'jointswp'), /* View Display Title */
			'search_items' => __('Search Testimonial', 'jointswp'), /* Search Custom Type Title */
			'not_found' =>  __('Nothing found in the Database.', 'jointswp'), /* This displays if there are no entries yet */
			'not_found_in_trash' => __('Nothing found in Trash', 'jointswp'), /* This displays if there is nothing in the trash */
			'parent_item_colon' => ''
			), /* end of arrays */
			'description' => __( 'Testimonial Storage', 'jointswp' ), /* Custom Type Description */
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 8, /* this is what order you want it to appear in on the left hand side menu */
			'menu_icon' => 'dashicons-book', /* the icon for the custom post type menu. uses built-in dashicons (CSS class name) */
			'rewrite'	=> array( 'slug' => 'testimonials', 'with_front' => false ), /* you can specify its url slug */
//			'has_archive' => true, /* you can rename the slug here */
			'capability_type' => 'post',
			'hierarchical' => false,
			/* the next one is important, it tells what's enabled in the post editor */
			'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'sticky')
	 	) /* end of options */
	); /* end of register post type */

	/* this adds your post categories to your custom post type */
	//register_taxonomy_for_object_type('category', 'custom_type');
	/* this adds your post tags to your custom post type */
	//register_taxonomy_for_object_type('post_tag', 'custom_type');

}

	// adding the function to the Wordpress init
add_action( 'init', 'custom_post_example');


function video_content_cpt(){
    $labels = array(
        'name'                  => 'Video Contents',
        'singular_name'         => 'Video Content',
        'menu_name'             => 'Video Contents',
        'name_admin_bar'        => 'Video Content',
        'archives'              => 'video-content',
        'attributes'            => 'Item Attributes',
        'parent_item_colon'     => 'Parent Item:',
        'all_items'             => 'All Items',
        'add_new_item'          => 'Add New Item',
        'add_new'               => 'Add New',
        'new_item'              => 'New Item',
        'edit_item'             => 'Edit Item',
        'update_item'           => 'Update Item',
        'view_item'             => 'View Item',
        'view_items'            => 'View Items',
        'search_items'          => 'Search Item',
        'not_found'             => 'Not found',
        'not_found_in_trash'    => 'Not found in Trash',
        'featured_image'        => 'Featured Image',
        'set_featured_image'    => 'Set featured image',
        'remove_featured_image' => 'Remove featured image',
        'use_featured_image'    => 'Use as featured image',
        'insert_into_item'      => 'Insert into item',
        'uploaded_to_this_item' => 'Uploaded to this item',
        'items_list'            => 'Items list',
        'items_list_navigation' => 'Items list navigation',
        'filter_items_list'     => 'Filter items list',
    );
    $args = array(
        'label'                 => 'Video Content',
        'description'           => 'Post Type Description',
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
        'taxonomies'            => array( 'fashion_category' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
        'rewrite'	=> array( 'slug' => 'video_content', 'with_front' => false ), /* you can specify its url slug */
    );
    register_post_type( 'video_content', $args );
}
add_action( 'init', 'video_content_cpt');

function faqs_cpt(){
    $labels = array(
        'name'                  => 'Faqs',
        'singular_name'         => 'Faq',
        'menu_name'             => 'Faqs',
        'name_admin_bar'        => 'Faq',
        'archives'              => 'faq',
        'attributes'            => 'Item Attributes',
        'parent_item_colon'     => 'Parent Item:',
        'all_items'             => 'All Items',
        'add_new_item'          => 'Add New Item',
        'add_new'               => 'Add New',
        'new_item'              => 'New Item',
        'edit_item'             => 'Edit Item',
        'update_item'           => 'Update Item',
        'view_item'             => 'View Item',
        'view_items'            => 'View Items',
        'search_items'          => 'Search Item',
        'not_found'             => 'Not found',
        'not_found_in_trash'    => 'Not found in Trash',
        'featured_image'        => 'Featured Image',
        'set_featured_image'    => 'Set featured image',
        'remove_featured_image' => 'Remove featured image',
        'use_featured_image'    => 'Use as featured image',
        'insert_into_item'      => 'Insert into item',
        'uploaded_to_this_item' => 'Uploaded to this item',
        'items_list'            => 'Items list',
        'items_list_navigation' => 'Items list navigation',
        'filter_items_list'     => 'Filter items list',
    );
    $args = array(
        'label'                 => 'Faq',
        'description'           => 'Post Type Description',
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
        'taxonomies'            => array( 'fashion_category' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
        'rewrite'	=> array( 'slug' => 'faq', 'with_front' => false ), /* you can specify its url slug */
    );
    register_post_type( 'faq', $args );
}
add_action( 'init', 'faqs_cpt');

function careers_cpt(){
    $labels = array(
        'name'                  => 'Careers',
        'singular_name'         => 'Career',
        'menu_name'             => 'Careers',
        'name_admin_bar'        => 'Career',
        'archives'              => 'careers',
        'attributes'            => 'Item Attributes',
        'parent_item_colon'     => 'Parent Item:',
        'all_items'             => 'All Items',
        'add_new_item'          => 'Add New Item',
        'add_new'               => 'Add New',
        'new_item'              => 'New Item',
        'edit_item'             => 'Edit Item',
        'update_item'           => 'Update Item',
        'view_item'             => 'View Item',
        'view_items'            => 'View Items',
        'search_items'          => 'Search Item',
        'not_found'             => 'Not found',
        'not_found_in_trash'    => 'Not found in Trash',
        'featured_image'        => 'Featured Image',
        'set_featured_image'    => 'Set featured image',
        'remove_featured_image' => 'Remove featured image',
        'use_featured_image'    => 'Use as featured image',
        'insert_into_item'      => 'Insert into item',
        'uploaded_to_this_item' => 'Uploaded to this item',
        'items_list'            => 'Items list',
        'items_list_navigation' => 'Items list navigation',
        'filter_items_list'     => 'Filter items list',
    );
    $args = array(
        'label'                 => 'Careers',
        'description'           => 'Post Type Description',
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
        'taxonomies'            => array( 'careers' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
        'rewrite'	=> array( 'slug' => 'careers', 'with_front' => false ), /* you can specify its url slug */
    );
    register_post_type( 'careers', $args );
}
add_action( 'init', 'careers_cpt');


// disable acf css on front-end acf forms
add_action( 'wp_print_styles', 'my_deregister_styles', 100 );
function my_deregister_styles() {
    if(!is_admin()){
       /* wp_deregister_style( 'acf' );
        wp_deregister_style( 'acf-field-group' );
        wp_deregister_style( 'acf-global' );
        wp_deregister_style( 'acf-input' );*/
    }
//    wp_deregister_style( 'acf-datepicker' );
}



add_action('acf/save_post', 'my_save_post');
function my_save_post($post_id ){

    // bail early if not a contact_form post
    if( get_post_type($post_id) !== 'job_applications' ) {
        return;
    }

    // bail early if editing in admin
    if( is_admin() ) {
        return;
    }

    // Grab Post Data from the Form
    $post = array(
        'ID'           => $post_id,
        'post_type'    => 'job_applications',
        'post_title'   => get_field('position', $post_id) .' - '. get_field('full_name', $post_id),
    );

    // Update the Post
    wp_update_post( $post );
    $application_fields = get_fields($post_id);

    $message ='';

    $subject = 'Application: '. get_field('position', $post_id) .' - '. get_field('full_name', $post_id);
    $message .= 'Hi, <br>';
    $message .= 'New application received for <strong>'.get_field('position', $post_id). ' Position</strong> <br>';
    $message .= 'Check the application by clicking this <a href="'.home_url().'/wp-admin/post.php?post='.$post_id.'&action=edit" style="">link</a>: <br>';
    $message .= 'Thank you';


    $name = get_field('full_name', $post_id);
    $email = get_field('email_address', $post_id);


    //echo json_encode($application_fields->family_particulars); exit();
//    $message = '';
    $message .= create_opener();
    $message .= set_personal_details( $application_fields );
    $message .= set_family_particulars( $application_fields['family_particulars'] );
    $message .= set_person_to_contact_in_case_of_emergency( $application_fields['person_to_contact_in_case_of_emergency'] );
    $message .= set_educational_details( $application_fields['educational_details'] );
    $message .= set_activities( $application_fields['activities']);
    $message .= set_national_service( $application_fields['national_service'] );
    $message .= set_employment_history( $application_fields['employment_history'] );
    $message .= '<table class="m_2987139644710846054MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="600" style="border-collapse:collapse; font-size:13px; border:0px solid black">';
    $message .= salary_expectation( $application_fields['what_is_your_salary_expectation']);

    $label = 'CAN COGNITIVE PERFORM A BACKGROUND CHECK WITH YOUR PREVIOUS EMPLOYER(S)?';
    $condition = $application_fields['can_cognitive_perform_a_background_check_with_your_previous_employers']['yes_no'];
    $details = $application_fields['can_cognitive_perform_a_background_check_with_your_previous_employers']['if_yes_please_give_the_details'];

    $message .= if_yes_give_details($label, $condition, $details );

    $label = 'HAVE YOU BEEN TERMINATED/ DISMISSED/ SUPENDED FROM THE SERVICE OF ANY EMPLOYER?';
    $condition = $application_fields['have_you_been_terminated_dismissed_supended_from_the_service_of_any_employer']['yes_no'];
    $details = $application_fields['have_you_been_terminated_dismissed_supended_from_the_service_of_any_employer']['if_yes_please_give_the_details'];

    $message .= if_yes_give_details($label, $condition, $details );

    $label = 'HAVE YOU BEEN CONVICTED OF ANY OFFENSE OR DECLARED BANKRUPT?';
    $condition = $application_fields['have_you_been_convicted_of_any_offense_or_declared_bankrupt']['yes_no'];
    $details = $application_fields['have_you_been_convicted_of_any_offense_or_declared_bankrupt']['if_yes_please_give_the_details'];

    $message .= if_yes_give_details($label, $condition, $details );

    $label = 'DO YOU HAVE ANY DISABILITIES OR HEALTH PROBLEMS?';
    $condition = $application_fields['do_you_have_any_disabilities_or_health_problem']['yes_no'];
    $details = $application_fields['do_you_have_any_disabilities_or_health_problem']['if_yes_please_give_the_details'];

    $message .= if_yes_give_details($label, $condition, $details );

    $label = 'ARE YOU ON ANY LONG TERM MEDICATION?';
    $condition = $application_fields['are_you_on_any_long_term_medication']['yes_no'];
    $details = $application_fields['are_you_on_any_long_term_medication']['if_yes_please_give_the_details'];
    $message .= if_yes_give_details($label, $condition, $details );


    $label = 'HAVE YOU ANY RELATIVES/ FRIENDS YOU KNOW IN OUR EMPLOYMENT?';
    $condition = $application_fields['have_you_any_relatives_friends_you_know_in_our_employment']['yes__no'];
    $details = $application_fields['have_you_any_relatives_friends_you_know_in_our_employment']['if_yes_please_give_the_details'];
    $message .= if_yes_give_details($label, $condition, $details );

    $label = 'DO YOU SERVE AS DIRECTOR, OFFICER, PARTNER, TRUSTEE, CONSULTANT, ADVISOR OR EMPLOYEE OF ANY BUSINESS, ENTERPRISE OUTSIDE YOUR FULL-TIME, OTHER THAN A NON-PROFIT OR CHARITABLE ORGANIZATION?';
    $condition = $application_fields['do_you_serve_as_director_oficer_partner_trustee_consultant_advisor_or_employee_of_any_business_enterprise_outside_your_full-time_other_than_a_non-profit_or_charitable_organization']['yes_no'];
    $details = $application_fields['do_you_serve_as_director_oficer_partner_trustee_consultant_advisor_or_employee_of_any_business_enterprise_outside_your_full-time_other_than_a_non-profit_or_charitable_organization']['if_yes_please_give_the_details'];
    $message .= if_yes_give_details($label, $condition, $details );
    $message .= '</table><br><br>';

    $message .= set_languages( $application_fields['languages'] );
    $message .= set_character_references( $application_fields['character_references']['references'] );
    $message .= set_question_and_answer( 'HOW DID YOU GET TO KNOW ABOUT THIS VACANCY?', $application_fields['how_did_you_get_to_know_about_this_vacancy'] );

    $question = 'In completing and signing this application for employment, I understand the misrepresentations, false statements or omission of facts is cause for disqualification of this application or disqualification of the appointment or if I am in the service the COMPANY, disciplinary action, which may include dismissal.
                   <br>
                I understand further that information concerning my past record will be sought from my previous employers and other sources I hereby release from all liability or damages that those individuals, corporation or organizations who provide information.
                <br>
                I consent by taking a pre-employment medical examination as may be required by the COMPANY.
                <br>
                This certifies that the application was completed by me and that all entries on it and information provided are true and complete on the best of my knowledge.';
    $message .= set_question_and_answer( $question, $application_fields['agreement']['do_you_agree'] );

    $message .= create_closer();


//    echo $message;
    return send_email($name, $email, $subject, $message);

}


function my_acf_prepare_field($field) {

//    var_dump($field); exit();
    // only on front end
    if (is_admin()) {
        return $field;
    }
    if (isset($_GET['position'])) {
        $field['value'] = (isset($_GET['position'])) ? $_GET['position'] : 'Janitor';
        $field['readonly'] = true;
    }
    return $field;
}
add_filter('acf/prepare_field/key=field_60e2b881db4c2', 'my_acf_prepare_field');

function create_opener(){

    $message = '<html><link rel="stylesheet" href="http://cognitive.com.sg/wp-content/themes/specular/css/bootstrap-3.css?ver=06df48906134c281e25182f74daa1baf">
                <link rel="stylesheet" href="">
    
                <script src="text/javascript" src="http://cognitive.com.sg/wp-content/themes/specular/js/bootstrap.min.js?ver=1"></script>
                <body>
                	<div id="container" style="background-color: white; border: 1px solid #D0D0D0; padding: 5%; -webkit-box-shadow: 0 0 8px #D0D0D0; height: auto;  width:600px; ">
                        <table class="m_2987139644710846054MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="600" style="border-collapse:collapse; font-size:13px; ">
                                <tr>
                                    <td width="600"style=" padding: 1%">
                                        <img src="http://cognitive.com.sg/wp-content/uploads/2015/05/logo.png" style="width:200px">
                                    </td>
                                
                                </tr>
                                
                        </table><br><br>';

    return $message;
}

function set_personal_details($fields){

   $message = '<h2><center><strong>APPLICATION FORM</strong></center></h2>		
                <p><strong>I. PERSONAL DETAILS</strong></p>		
                <table class="m_2987139644710846054MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="600" style="border-collapse:collapse; font-size:13px; border:0px solid black">
							<tr>
								<td width="100"style="border:1px solid black; padding: 1%">
									<p><b>Position Applied:</b></p>
								</td>
								<td style="border:1px solid black; padding:0 1%">'
									.$fields['position'].
								'</td>
								
								<td width="120" style="border:1px solid black; padding: 1%">
									<p><b>Earliest Date To Start Employment</b></p>
								</td>
								<td style="border:1px solid black; padding:0 1%">'
									. date('M d Y', strtotime($fields['earliest_date_to_start_employment'])).
								'</td>
								
							</tr>
							<tr>
								<td style="border:1px solid black; padding:0 1%">
									<p><b>Full Name:</b></p>
								</td>
								<td colspan="3" style="border:1px solid black; padding: 1%">'
									. $fields['salutation'] .' '. $fields['full_name'] . ' ' .$fields['aliases'] .
								'</td>
							</tr>
							<tr>
								<td style="border:1px solid black; padding:0 1%">
									<p><b>Date Of Birth:</b></p>
								</td>
								<td style="border:1px solid black; padding:0 1%">'
									. date('M d Y', strtotime($fields['date_of_birth'])) .
								'</td>
								
								<td style="border:1px solid black; padding:0 1%">
									<p><b>Place of Birth</b></p>
								</td>
								<td style="border:1px solid black; padding:0 1%">'
									. $fields['place_of_birth'] .
								'</td>
							</tr>
							<tr>
								<td style="border:1px solid black; padding:0 1%">
									<p><b>Address:</b></p>
								</td>
								<td style="border:1px solid black; padding:0 1%">'
									.$fields['address'].
								'</td>
								
								<td style="border:1px solid black; padding:0 1%">
									<p><b>Nationality</b></p>
								</td>
								<td style="border:1px solid black; padding:0 1%">'
									. $fields['nationality'] .
								'</td>
							</tr>
							<tr>
								<td width=""style="border:1px solid black; padding: 1%">
									<p><b>Mobile no.</b></p>
								</td>
								<td style="border:1px solid black; padding:0 1%">'
									.$fields['mobile_no'].
								'</td>
								
								<td width="" style="border:1px solid black; padding: 1%">
									<p><b>Home No.</b></p>
								</td>
								<td style="border:1px solid black; padding:0 1%">'
									. $fields['phone_no'] .
								'</td>
							</tr>
							
							<tr>
								<td width=""style="border:1px solid black; padding: 1%">
									<p><b>Email</b></p>
								</td>
								<td colspan="3" style="border:1px solid black; padding:0 1%">'
									.$fields['email_address'].
								'</td>
								
							</tr>
							<tr>
								<td width=""style="border:1px solid black; padding: 1%">
									<p><b>Citizenship</b></p>
								</td>
								<td style="border:1px solid black; padding:0 1%">'
									.$fields['citizenship'].
								'</td>
								
								<td width="" style="border:1px solid black; padding: 1%">
									<p><b>NRIC No.</b></p>
								</td>
								<td style="border:1px solid black; padding:0 1%">'
									. $fields['nirc_no'] .
								'</td>
							</tr>
							<tr>
								<td width=""style="border:1px solid black; padding: 1%">
									<p><b>Passport No.</b></p>
								</td>
								<td style="border:1px solid black; padding:0 1%">'
									.$fields['passport_no'].
								'</td>
								
								<td width="" style="border:1px solid black; padding: 1%">
									<p><b>Place of Issue</b></p>
								</td>
								<td style="border:1px solid black; padding:0 1%">'
									. $fields['place_of_issue'] .
								'</td>
							</tr>
							<tr>
								<td width=""style="border:1px solid black; padding: 1%">
									<p><b>Religion</b></p>
								</td>
								<td style="border:1px solid black; padding:0 1%">'
									.$fields['religion'].
								'</td>
								
								<td width="" style="border:1px solid black; padding: 1%">
									<p><b>Marital Status</b></p>
								</td>
								<td style="border:1px solid black; padding:0 1%">'
									. $fields['marital_status'] .
								'</td>
							</tr>
						</table><br><br>';

   return $message;
}

function set_family_particulars($family_particulars){


    $message = '';
    $message .= '<p><strong>II. FAMILY PARTICULARS</strong>  (Please include all family members, including married ones)</p>';
    $message .= '<table class="m_2987139644710846054MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="600" style="border-collapse:collapse; font-size:13px; border:0px solid black">
					<tr>
						<td width=""style="border:1px solid black; padding: 1%">
							<p><b>Name</b></p>
						</td>
						<td style="border:1px solid black; padding:0 1%">
							<p><b>Relationship</b></p>
						</td>

						<td width="" style="border:1px solid black; padding: 1%">
							<p><b>Age</b></p>
						</td>
						<td style="border:1px solid black; padding:0 1%">
							<p><b>Occupation</b></p>
						</td>
						<td style="border:1px solid black; padding:0 1%">
							<p><b>Place of Occupation</b></p>
						</td>
					</tr>';

    foreach ($family_particulars as $member){

        $message .= '<tr>
                        <td width=""style="border:1px solid black; padding: 1%">' .$member['name']. '</td>
                        <td width=""style="border:1px solid black; padding: 1%">'.$member['relationship'].'</td>
                        <td style="border:1px solid black; padding:0 1%">'.$member['age'].'</td>
                        <td width="" style="border:1px solid black; padding: 1%">'.$member['occupation'].'</td>
                        <td style="border:1px solid black; padding:0 1%">'. $member['place_of_occupation'] .'</td>
                    </tr>';
    }
    $message .= '</table>';


    return $message;
}

function set_person_to_contact_in_case_of_emergency($person_to_contact_in_case_of_emergency){


    $message = '';
    $message .= '<p><strong>Person to Contact In Case of Emergency</strong></p>';
    $message .= '<table class="m_2987139644710846054MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="600" style="border-collapse:collapse; font-size:13px; border:0px solid black">
					<tr>
						<td width=""style="border:1px solid black; padding: 1%">
							<p><b>Name</b></p>
						</td>
						<td style="border:1px solid black; padding:0 1%">
							<p><b>Contact No.</b></p>
						</td>
					</tr>';

    //foreach ($person_to_contact_in_case_of_emergency as $member){

    $message .= '<tr>
                    <td width=""style="border:1px solid black; padding: 1%">' .$person_to_contact_in_case_of_emergency['name']. '</td>
                    <td width=""style="border:1px solid black; padding: 1%">'.$person_to_contact_in_case_of_emergency['contact_no'].'</td>
                </tr>';
    //}
    $message .= '</table>';


    return $message;
}

function set_educational_details($educational_details){

    $message = '';
    $message .= '<p><strong>III. EDUCATIONAL DETAILS</strong></p>';


        $message .= '<table class="m_2987139644710846054MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="600" style="border-collapse:collapse; font-size:13px; border:0px solid black">
					<tr>
						<td width="" colspan="3" style="border:1px solid black; padding: 0 1%">
							<p><b>Primary</b></p>
						</td>
					</tr>';

        $message .= get_school_header();
        $message .= get_school_details($educational_details['primary']);

        $message .= '<tr>
						<td width="" colspan="3" style="border:1px solid black; padding: 0 1%">
							<p><b>Secondary</b></p>
						</td>
					</tr>';
        $message .= get_school_header();
        $message .= get_school_details($educational_details['secondary']);

        $message .= '<tr>
						<td width="" colspan="3" style="border:1px solid black; padding: 0 1%">
							<p><b>Tertiary And College</b></p>
						</td>
					</tr>';
        $message .= get_school_header();
        $message .= get_school_details($educational_details['tertiary_and_college']);

        $message .= '<tr>
						<td width="" colspan="3" style="border:1px solid black; padding: 0 1%">
							<p><b>Other Courses Completed</b></p>
						</td>
					</tr>';
        $message .= get_school_header();
        $message .= get_school_details($educational_details['other_courses_completed']);


        $message .= '</table><br><br>';


    return $message;
}

function set_activities($activities){

    $message = ' <strong>IV. ACTIVITIES</strong>';

    $message .= '<table class="m_2987139644710846054MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="600" style="border-collapse:collapse; font-size:13px; border:0px solid black">';

    $message .= '<tr>
                        <td>IN SCHOOL / INSTITUTES / ELSEWWHERE</td>
                        <td>POSTION HELD</td>
                        <td>APPOINTMENT DATE</td>
                </tr>';

    foreach($activities as $activity){
        $message .= '<tr>
                        <td>'.$activity['in_school__institutes__elsewwhere'].'</td>
                        <td>'.$activity['postion_held'].'</td>
                        <td>'.$activity['appointment_date'].'</td>
                    </tr>';
    }

    $message .= '</table><br><br>';

    return $message;
}

function set_national_service($national_service){

    $message = '';
    $message .= '<p><strong>V. NATIONAL SERVICE</strong></p>';

    $message .= '<table class="m_2987139644710846054MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="600" style="border-collapse:collapse; font-size:13px; border:0px solid black">
					<tr>
						<td width="600" colspan="" style="border:1px solid black; padding: 0 1%">
							<p><b>HAVE YOU COMPLETED A NATIONAL SERVICE?</b></p>
						</td>
					</tr>
					<tr>
						<td width="600" colspan="" style="border:1px solid black; padding: 0 1%">
							<p>'.$national_service['have_you_completed_a_national_service'].'</p>
						</td>
					</tr>';

                    if($national_service['national_service'] == 'Yes'){
                        $message .= '<tr>
                                        <td width="600" colspan="" style="border:1px solid black; padding: 0 1%">
                                            <p><b>VOCATION</b></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="600" colspan="" style="border:1px solid black; padding: 0 1%">
                                            <p>'.$national_service['if_yes:_vocation'].'</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="600" colspan="" style="border:1px solid black; padding: 0 1%">
                                            <p><b>COMPLETED FROM</b></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="600" colspan="" style="border:1px solid black; padding: 0 1%">
                                            <p>'.$national_service['completed_from'].'</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="600" colspan="" style="border:1px solid black; padding: 0 1%">
                                            <p><b>NEXT RESERVIST DATE</b></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="600" colspan="" style="border:1px solid black; padding: 0 1%">
                                            <p>'.$national_service['next_reservist_date'].'</p>
                                        </td>
                                    
                                    </tr>';
                    }else{
                        $message .= '<tr>
                                        <td width="600" colspan="" style="border:1px solid black; padding: 0 1%">
                                            <p><b>WHEN ARE YOU DUE FOR N.S?</b></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="600" colspan="" style="border:1px solid black; padding: 0 1%">
                                            <p>'.$national_service['if_no:_when_are_you_due_for_ns'].'</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="600" colspan="" style="border:1px solid black; padding: 0 1%">
                                            <p><b>IF YOU ARE EXEMPTED FOR N.S, STATE REASONS</b></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="600" colspan="" style="border:1px solid black; padding: 0 1%">
                                            <p>'.$national_service['if_you_are_exempted_for_ns_state_reasons'].'</p>
                                        </td>
                                    </tr>';
                    }


        $message .= '</table><br><br>';


    return $message;
}

function set_employment_history($employment_history){

    $message = '';
    $message .= '<p><strong>VI. EMPLOYMENT HISTORY</strong></p>';


    $message .= '<table class="m_2987139644710846054MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="600" style="border-collapse:collapse; font-size:13px; border:0px solid black">
                <tr>
                    <td width="100" colspan="" style="border:1px solid black; padding: 0 1%">
                        <p><b>DURATION</b></p>
                    </td>
                    <td width="500" colspan="2" style="border:1px solid black; padding: 0 1%">
                        <p></p>
                    </td>
                
                </tr>';

    foreach($employment_history as $employment){

        $message .= '<tr>
						<td width="500" colspan="" rowspan="7" style="border:1px solid black; padding: 0 1%">
							<p>'.date('M d Y', strtotime($employment['duration']['date_from'])).' - '.date('M d Y', strtotime($employment['duration']['date_to'])).'</p>
						</td>
						<td width="500" colspan="" style="border:1px solid black; padding: 0 1%">
							<p><strong>Company</strong></p>
						</td>
						<td width="500" colspan="" style="border:1px solid black; padding: 0 1%">
							<p>'.$employment['name_of_employer'].'</p>
						</td>
					
				</tr>';

        $message .= '<tr>
						<td width="500" colspan="" style="border:1px solid black; padding: 0 1%">
							<p><strong>Address</strong></p>
						</td>
						<td width="500" colspan="" style="border:1px solid black; padding: 0 1%">
							<p>'.$employment['address'].'</p>
						</td>
				    </tr>
				    <tr>
						<td width="500" colspan="" style="border:1px solid black; padding: 0 1%">
							<p><strong>Nature of Business</strong></p>
						</td>
						<td width="500" colspan="" style="border:1px solid black; padding: 0 1%">
							<p>'.$employment['job_title_copy'].'</p>
						</td>
                    </tr>
                    <tr>
                        <td width="500" colspan="" style="border:1px solid black; padding: 0 1%">
                            <p><strong>Job Title</strong></p>
                        </td>
                        <td width="500" colspan="" style="border:1px solid black; padding: 0 1%">
                            <p>'.$employment['job_title'].'</p>
                        </td>
                    </tr>
                    <tr>
                        <td width="500" colspan="" style="border:1px solid black; padding: 0 1%">
                            <p><strong>Duties</strong></p>
                        </td>
                        <td width="500" colspan="" style="border:1px solid black; padding: 0 1%">
                            <p>'.$employment['brief_description_of_duties'].'</p>
                        </td>
                    </tr>
                    <tr>
                        <td width="500" colspan="" style="border:1px solid black; padding: 0 1%">
                            <p><strong>Salary</strong></p>
                        </td>
                        <td width="500" colspan="" style="border:1px solid black; padding: 0 1%">
                            <p>'.$employment['basic_salary'].'</p>
                        </td>
                    </tr>
                    <tr>
                        <td width="500" colspan="" style="border:1px solid black; padding: 0 1%">
                            <p><strong>Reason of Leaving</strong></p>
                        </td>
                        <td width="500" colspan="" style="border:1px solid black; padding: 0 1%">
                            <p>'.$employment['reasons_for_leaving'].'</p>
                        </td>
                    </tr>';


    }

    $message .= '</table><br><br>';

    return $message;
}


function extract_duration($duration, $employment){

    $message = '';

        $message .= '<tr>
						<td width="500" colspan="" rowspan="7" style="border:1px solid black; padding: 0 1%">
							<p>'.date('M d Y', strtotime($duration['date_from'])).' - '.date('M d Y', strtotime($duration['date_to'])).'</p>
						</td>
						<td width="500" colspan="" style="border:1px solid black; padding: 0 1%">
							<p><strong>Company</strong></p>
						</td>
						<td width="500" colspan="" style="border:1px solid black; padding: 0 1%">
							<p>'.$employment['name_of_employer'].'</p>
						</td>
					
				</tr>';


    return $message;
}

function salary_expectation($salary_expectation){
    $message = '';

    $message .= '<tr>
                    <td width="600" colspan="" style="border:1px solid black; padding: 0 1%">
                        <p><b>WHAT IS YOUR SALARY EXPECTATION?</b></p>
                    </td>
                
                </tr>
                <tr>
                    <td width="600" colspan="" style="border:1px solid black; padding: 0 1%">
                        <p>'.$salary_expectation.'</p>
                    </td>
                </tr>';

    return $message;
}

function get_school_header(){
    $message = '<tr>
					<td width="250"style="border:1px solid black; padding: 0 1%">
						<p><b>School</b></p>
					</td>
					<td width="100"style="border:1px solid black; padding: 0 1%">
						<p><b>Year</b></p>
					</td>
					<td width="250"style="border:1px solid black; padding: 0 1%">
						<p><b>Qualification</b></p>
					</td>
                </tr>';


    return $message;
}

function get_school_details($school_details){

    $message = '';

    foreach($school_details as $school_detail){
        $message .= '<tr>
					    <td width=""style="border:1px solid black; padding: 1%">'
                            .$school_detail['school'].
                        '</td>
                        <td width="" style="border:1px solid black; padding: 1%">'
                            .$school_detail['year_from'].
                            ' - '
                            .$school_detail['year_to'].
                        '</td>
                        <td style="border:1px solid black; padding:0 1%">'
                            .$school_detail['qualification'].
                        '</td>
				    </tr>';
    }

    return $message;
}


function if_yes_give_details($label, $condition, $details){
    $message = '';

    $message .= '<tr>
                    <td>
                        <b>'.$label.'</b>
                    </td>
                </tr>';

     $message .= '<tr>
                    <td>
                        <b>'.$condition.'</b>
                    </td>
                </tr>';

    if($condition == 'yes'){
        $message .= '<tr>
                        <td>
                            <strong>'.$details.'</strong>
                        </td>
                    </tr>';
    }

    return $message;
}

function set_languages($languages){

    $message = '<table class="m_2987139644710846054MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="600" style="border-collapse:collapse; font-size:13px; border:0px solid black">';
    $message .= '<tr>
                    <strong>VII. LANGUAGES</strong>
                </tr>';
    $message .= '<tr>
                    <td width=""style="border:1px solid black; padding: 1%">'
                        .$languages['spoken'].
                    '</td>
                           
                     <td style="border:1px solid black; padding:0 1%">'
                        .$languages['written'].
                    '</td>
                </tr>';
    $message .= '</table><br><br>';

    return $message;
}


function set_character_references($references){

    $message = '<p><strong>VIII. REFERENCES</strong></p>';
    $message .= '<table class="m_2987139644710846054MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="600" style="border-collapse:collapse; font-size:13px; border:0px solid black">';
    foreach($references as $reference){
        $message .= '<tr>
					<td width=""style="border:1px solid black; padding: 1%">'
                        .$reference['name'].
                        '<br>'
                        .$reference['job_title'].
                        '<br>'
                        .$reference['company'].
                        '<br>'
                        .$reference['email_address'].
                        '<br>'
                        .$reference['contact_no'].
                    '</td>
				</tr>';
    }
    $message .= '</table><br><br>';

    return $message;


}


function set_question_and_answer($question, $answer){
    $message = '';
    $message = '<table class="m_2987139644710846054MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="600" style="border-collapse:collapse; font-size:13px; border:0px solid black">';
        $message .= '<tr>
                        <td width=""style="border:1px solid black; padding: 1%">'
                           .$question.
                        '</td>
				    </tr>';

        $message .= '<tr>
                        <td width=""style="border:1px solid black; padding: 1%">'
                           .$answer.
                        '</td>
				    </tr>';

    $message .= '</table><br><br>';

    return $message;
}
function create_closer(){

    $message = '</div></body></html>';

    return $message;
}


function send_email($name, $email, $subject, $message){

    $to = 'chia@cognitive.com.sg';
    $headers = 'From: ' . $name . ' <' . $email . '>' . "\r\n";
    $headers .= 'Content-Type: text/html; charset=UTF-8';

    return wp_mail($to, $subject, $message, $headers );
}

