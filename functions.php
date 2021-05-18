<?php

namespace Theme;

define('__CONFIG_DIR',  get_template_directory() . '/config');

function theme_setup()
{
    global $post;

    add_theme_support('title-tag');
    add_theme_support('menus');
    // load_theme_textdomain('business-rdieud-com', get_template_directory() . '/languages');

    ob_start();
    include __CONFIG_DIR . "/config.json";
    $app_config_file_content = ob_get_clean();

    ob_start();
    include __CONFIG_DIR . "/state.json";
    $app_state_file_content = ob_get_clean();


    $GLOBALS['app_config'] = json_decode($app_config_file_content);
    $GLOBALS['app_state'] = json_decode($app_state_file_content);
}

function theme_register_assets()
{

    // IMPORTANT :  Wordpress est fourni de base avec JQuery. Il faut le désactiver pour n'activer que le notre
    wp_deregister_script('jquery');
    wp_register_script('jquery', 'https://code.jquery.com/jquery-3.5.1.slim.min.js', [], false, true);

    wp_enqueue_style('business-rdieud-com-styles-lib-model', get_template_directory_uri() . '/assets/styles/lib/tailwind.css', [], wp_get_theme()->get('Version'));


    if (is_front_page()) {
        wp_enqueue_style('business-rdieud-com-styles-model', get_template_directory_uri() . '/assets/styles/model.css', [], wp_get_theme()->get('Version'));
        wp_enqueue_style('business-rdieud-com-styles-page-home', get_template_directory_uri() . '/assets/styles/pages/home.css', [], wp_get_theme()->get('Version'));
    } else {
        // Common Scripts
        wp_enqueue_script('jquery', '', [], wp_get_theme()->get('Version'), true);
        wp_enqueue_script('business-rdieud-com-scripts-front-main', get_template_directory_uri() . '/assets/scripts/f/main.js', [], wp_get_theme()->get('Version'), true);
        // Common Styles
        wp_enqueue_style('business-rdieud-com-styles-model', get_template_directory_uri() . '/assets/styles/model_wc.css', [], wp_get_theme()->get('Version'));

        // @todo Add a "routes.ext" or DEFINE pages so it goes global
        $pages = ["about", "services", "portfolio", "contact"];
        foreach ($pages as $page) {
            if (is_page($page)) {
                wp_enqueue_style("business-rdieud-com-styles-page-$page", get_template_directory_uri() . "/assets/styles/pages/$page.css", [], wp_get_theme()->get('Version'));
            }
        }
    }
}

function wp_loaded()
{
    if (!empty($_POST)) {
        handle_post_request();
    } else {
        init_set_lang();
    }
}

function handle_post_request()
{
    global $app_config;

    // Handle Lang Switch
    if ($_POST['lang'] && $_POST['_wpnonce'] && $_POST['_wp_http_referer']) {
        $security = wp_verify_nonce($_POST['_wpnonce'], 'change-lang-key-trafalgar')
            && in_array($_POST['lang'], $app_config->i18n->awaited_langs);

        if ($security) {
            handle_lang_switch($_POST['lang']);
        }
    }
}

function init_set_lang()
{
    global $app_config;

    $default_lang = $app_config->i18n->default;
    $cookie_lang = !empty($_COOKIE['business-rdieud-com-cookie_lang']) ? $_COOKIE['business-rdieud-com-cookie_lang'] : '';

    $lang = !$cookie_lang ? $default_lang : $cookie_lang;

    if (!empty($lang) && ($lang !== get_option('WPLANG') || $lang !== $cookie_lang)) {
        handle_lang_switch($lang);
    }
}

// @todo Move from "functions.php" for a better visibility
// @todo REMOVE THIS LATER, user should not change lang in DB that will change lang for everybody!!!!
function handle_lang_switch($lang)
{
    global $wpdb;

    $table_name = $wpdb->prefix . 'options';

    $sql = "UPDATE `$table_name` SET ";
    $arr = [];
    foreach (['option_value' => $lang] as $propKey => $propVal) {
        $propVal = !empty($propVal) ? "'$propVal'" : 'NULL';
        $arr[] = "$propKey = $propVal";
    }
    $sql .= implode(", ", $arr);

    $sql .= " WHERE option_name = 'WPLANG'";

    $result = $wpdb->query($sql);

    if ($result) {
        // Change cookie_lang
        // @todo Secure this through HTTPS with function options : "secure", "httponly", "domain"
        setcookie("business-rdieud-com-cookie_lang", $lang);
    }
}

add_action('wp_enqueue_scripts', 'Theme\theme_register_assets');
add_action('after_setup_theme', 'Theme\theme_setup');

add_action('wp_loaded', 'Theme\wp_loaded');

// Menu functions and filters.
require get_template_directory() . '/inc/view.lib.php';
