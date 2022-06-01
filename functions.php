<?php

function uzduotis_theme_support()
{
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'uzduotis_theme_support');

function uzduotis_register_styles()
{
    wp_enqueue_style('uzduotis-styles', get_template_directory_uri() . '/assets/css/style.css?v=' . time(), array(), false, 'all');
    wp_enqueue_style('uzduotis-fancybox', "https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css", array(), false, 'all');
}

add_action('wp_enqueue_scripts', 'uzduotis_register_styles');


function uzduotis_register_scripts()
{
    wp_enqueue_script('uzduotis-jquery', "https://code.jquery.com/jquery-3.6.0.js", null, null, false, false);
    wp_enqueue_script('uzduotis-fancybox', "https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js", null, null, false, false);
    wp_enqueue_script('uzduotis-gsap', "https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js", null, false, true);
    wp_enqueue_script('uzduotis-script', get_template_directory_uri() . '/assets/js/main.js', array(), '', true);
}

add_action('wp_enqueue_scripts', 'uzduotis_register_scripts');

add_filter('wpcf7_validate_text*', 'custom_text_validation_filter', 10, 2);

function custom_text_validation_filter($result, $tag)
{
    if ('your-name' == $tag->name) {
        $your_name = isset($_POST['your-name']) ? trim($_POST['your-name']) : '';

        if (preg_match('/[0-9]/', $your_name)) {
            $result->invalidate($tag, "The field contains numeric.");
        }

        if (preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $your_name)) {
            $result->invalidate($tag, "The field contains symbols.");
        }
    }
    return $result;
}

add_filter('wpcf7_validate_tel*', 'custom_phone_validation_filter', 10, 2);

function custom_phone_validation_filter($result, $tag)
{
    if ('your-telephone-number' == $tag->name) {
        $your_phone = isset($_POST['your-telephone-number']) ? trim($_POST['your-telephone-number']) : '';

        if (preg_match('/^[0-9]{9}+$/', $your_phone) || preg_match('/^[+]?[0-9]{11}$/', $your_phone)) {
            return $result;
        } else {
            $result->invalidate($tag, "The phone number entered is invalid..");
        }
    }
    return $result;
}