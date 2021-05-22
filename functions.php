<?php

namespace Rd\Wp\Theme\SandPortfolio;

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

define('RD_THEME_SAND_PORTFOLIO_PREFIX',  'rd_wpthm_sandp_');
define('RD_THEME_SAND_PORTFOLIO_GLOBAL_KEY', 'rd_wpthm_sandp');
define('RD_THEME_SAND_PORTFOLIO_CONFIG_DIR',  get_template_directory() . '/config');

function theme_setup()
{
    add_theme_support('title-tag');
    add_theme_support('menus');
    // load_theme_textdomain('business-rdieud-com', get_template_directory() . '/languages');

    /*
    ob_start();
    include RD_THEME_SAND_PORTFOLIO_PREFIX . "/config.json";
    $app_config_file_content = ob_get_clean();

    /*
    ob_start();
    include __CONFIG_DIR . "/state.json";
    $app_state_file_content = ob_get_clean();
    //*/

    // $GLOBALS['rd_wthm_sandp_config'] = json_decode($app_config_file_content);
    // $GLOBALS['app_state'] = json_decode($app_state_file_content);
    //*/
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

function init_config()
{
    $configFile = RD_THEME_SAND_PORTFOLIO_CONFIG_DIR . '/config.json';
    if (file_exists($configFile)) {
        $config = json_decode(file_get_contents($configFile));
        $GLOBALS[RD_THEME_SAND_PORTFOLIO_GLOBAL_KEY] = (object) [
            "config" => $config
        ];
    }
}

function get_config()
{
    return $GLOBALS[RD_THEME_SAND_PORTFOLIO_GLOBAL_KEY]->config;
}

function get_state()
{
    return $GLOBALS[RD_THEME_SAND_PORTFOLIO_GLOBAL_KEY]->state;
}

function theme_init()
{
    init_config();
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
    $rd_wthm_sandp_config = get_config();

    // Handle Lang Switch
    if ($_POST['lang'] && $_POST['_wpnonce'] && $_POST['_wp_http_referer']) {
        $security = wp_verify_nonce($_POST['_wpnonce'], 'change-lang-key-trafalgar')
            && in_array($_POST['lang'], $rd_wthm_sandp_config->i18n->awaited_langs);

        if ($security) {
            handle_lang_switch($_POST['lang']);
        }
    }
}

function init_set_lang()
{
    $rd_wthm_sandp_config = get_config();

    $default_lang = $rd_wthm_sandp_config->i18n->default;
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

add_action('init', 'Rd\Wp\Theme\SandPortfolio\theme_init');
add_action('wp_enqueue_scripts', 'Rd\Wp\Theme\SandPortfolio\theme_register_assets');
add_action('after_setup_theme', 'Rd\Wp\Theme\SandPortfolio\theme_setup');

add_action('wp_loaded', 'Rd\Wp\Theme\SandPortfolio\wp_loaded');

// Menu functions and filters.
require get_template_directory() . '/inc/view.lib.php';
