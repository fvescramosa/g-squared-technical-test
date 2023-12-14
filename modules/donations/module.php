<?php
class DonationsModule {
    public function __construct() {
        add_action('template_redirect', array($this, 'process_donation_form'));
    }

    public function process_donation_form() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['donation_nonce'])) {
            if (wp_verify_nonce($_POST['donation_nonce'], 'donation_action')) {
                $payment_method = isset($_POST['payment_method']) ? sanitize_text_field($_POST['payment_method']) : '';
                $first_name = isset($_POST['first_name']) ? sanitize_text_field($_POST['first_name']) : '';
                $last_name = isset($_POST['last_name']) ? sanitize_text_field($_POST['last_name']) : '';
                $email = isset($_POST['email']) ? sanitize_email($_POST['email']) : '';
                $phone = isset($_POST['phone']) ? sanitize_text_field($_POST['phone']) : '';
                $donation = isset($_POST['donation']) ? floatval($_POST['donation']) : 0;

                $donation_data = array(
                    'post_title' => $first_name . ' ' . $last_name,
                    'post_type' => 'donations',
                    'post_status' => 'publish'
                );

                $donation_id = wp_insert_post($donation_data);

                if (!is_wp_error($donation_id)) {
                    update_post_meta($donation_id, 'payment_method', $payment_method);
                    update_post_meta($donation_id, 'first_name', $first_name);
                    update_post_meta($donation_id, 'last_name', $last_name);
                    update_post_meta($donation_id, 'email', $email);
                    update_post_meta($donation_id, 'phone', $phone);
                    update_post_meta($donation_id, 'donation_total', $donation);

                    // Redirect after saving
                    wp_redirect(home_url('/'));
                    exit;
                }
            }
        }
    }
}

// Instantiate the class
new DonationsModule();
