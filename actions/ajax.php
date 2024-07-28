<?php

function sparrow_ajax_contact_form(): void
{
    $name = sanitize_text_field($_POST['name']);
    $email = sanitize_email($_POST['email']);
    $subject = sanitize_text_field($_POST['subject']);
    $message = sanitize_text_field($_POST['message']);

    $to = get_option('admin_email');

    remove_all_filters('wp_mail_from');
    remove_all_filters('wp_mail_from_name');

    $headers = [
        'From: Me Myself <' . $email . '>',
        'Content-Type: text/html; charset=UTF-8',
        'Cc: my <' . $email . '>',
    ];

    wp_mail($to, $subject, $message, $headers);

    wp_die();
}

add_action('wp_ajax_sparrow_ajax_contact_form', 'sparrow_ajax_contact_form');
add_action('wp_ajax_nopriv_sparrow_ajax_contact_form', 'sparrow_ajax_contact_form');
