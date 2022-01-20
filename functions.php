<?php

namespace Rd\Wp\Theme\SandPortfolio;

use stdClass;
use Symfony\Component\Yaml\Yaml;

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

define('RD_THEME_SAND_PORTFOLIO_ROOTDIR',  get_template_directory());
define('RD_THEME_SAND_PORTFOLIO_PREFIX',  'rd_wpthm_sandp_');
define('RD_THEME_SAND_PORTFOLIO_GLOBAL_KEY', 'rd_wpthm_sandp');
define('RD_THEME_SAND_PORTFOLIO_CONFIG_DIR',  RD_THEME_SAND_PORTFOLIO_ROOTDIR . '/config');

define('RD_THEME_SAND_PORTFOLIO_PAGE_RESUME',  'resume');
define('RD_THEME_SAND_PORTFOLIO_PAGE_USECASES',  'use-cases');
define('RD_THEME_SAND_PORTFOLIO_PAGE_SERVICES',  'services');
define('RD_THEME_SAND_PORTFOLIO_PAGE_PORTFOLIO',  'portfolio');
define('RD_THEME_SAND_PORTFOLIO_PAGE_CONTACT',  'contact');

require_once RD_THEME_SAND_PORTFOLIO_ROOTDIR . '/inc/theme-plugin-bridge.php';

function theme_setup()
{
    add_theme_support('title-tag');
    add_theme_support('menus');
    // load_theme_textdomain('business-rdieud-com', get_template_directory() . '/languages');
}

function theme_register_assets()
{
    // IMPORTANT :  Wordpress est fourni de base avec JQuery. Il faut le désactiver pour n'activer que le notre
    // wp_dequeue_script('jquery');
    wp_deregister_script('jquery');
    wp_register_script('jquery', 'https://code.jquery.com/jquery-3.5.1.min.js', [], false, true);
    wp_enqueue_script('jquery', '', [], wp_get_theme()->get('Version'), true);

    wp_enqueue_style('rd-sand-portfolio-styles-lib-model', get_template_directory_uri() . '/assets/styles/sass/lib/tailwind.css', [], wp_get_theme()->get('Version'));

    if (is_front_page()) {
        wp_enqueue_style('rd-sand-portfolio-styles-model', get_template_directory_uri() . '/assets/styles/css/models/model.css', [], wp_get_theme()->get('Version'));
        wp_enqueue_style('rd-sand-portfolio-styles-page-home', get_template_directory_uri() . '/assets/styles/css/pages/home.css', [], wp_get_theme()->get('Version'));
        wp_enqueue_script('business-rdieud-com-scripts-front-main', get_template_directory_uri() . '/assets/scripts/f/main.js', [], wp_get_theme()->get('Version'), true);
    } else {
        // Common Scripts

        wp_enqueue_script('business-rdieud-com-scripts-front-main', get_template_directory_uri() . '/assets/scripts/f/main.js', [], wp_get_theme()->get('Version'), true);
        // Common Styles
        wp_enqueue_style('rd-sand-portfolio-styles-model', get_template_directory_uri() . '/assets/styles/css/models/model_wc.css', [], wp_get_theme()->get('Version'));

        $page_slug = get_post()->post_name;

        switch ($page_slug) {
            case RD_THEME_SAND_PORTFOLIO_PAGE_PORTFOLIO:
                wp_enqueue_style("rd-sand-portfolio-styles-page-$page_slug", get_template_directory_uri() . "/assets/styles/css/pages/$page_slug.css", [], wp_get_theme()->get('Version'));
                wp_enqueue_style("rd-sand-portfolio-styles-rd-dport", get_template_directory_uri() . "/assets/styles/css/ext/rd-dport.css", [], wp_get_theme()->get('Version'));

                wp_enqueue_script("business-rdieud-com-scripts-page-$page_slug", get_template_directory_uri() . "/assets/scripts/f/$page_slug.js", [], wp_get_theme()->get('Version'), true);
                break;
            case RD_THEME_SAND_PORTFOLIO_PAGE_RESUME:
            case RD_THEME_SAND_PORTFOLIO_PAGE_USECASES:
                wp_enqueue_style("rd-sand-portfolio-styles-page-$page_slug", get_template_directory_uri() . "/assets/styles/css/pages/$page_slug.css", [], wp_get_theme()->get('Version'));

                wp_enqueue_script("business-rdieud-com-scripts-page-$page_slug", get_template_directory_uri() . "/assets/scripts/f/$page_slug.js", [], wp_get_theme()->get('Version'), true);
                break;
            case RD_THEME_SAND_PORTFOLIO_PAGE_SERVICES:
            case RD_THEME_SAND_PORTFOLIO_PAGE_CONTACT:
                wp_enqueue_style("rd-sand-portfolio-styles-page-$page_slug", get_template_directory_uri() . "/assets/styles/css/pages/$page_slug.css", [], wp_get_theme()->get('Version'));
                break;
        }
    }
}

function init_config()
{
    $lang_code = get_locale();

    $configFile = RD_THEME_SAND_PORTFOLIO_CONFIG_DIR . '/config.json';
    $expeirenceFile = RD_THEME_SAND_PORTFOLIO_CONFIG_DIR . "/experiences.yml";
    $useCaseFile = RD_THEME_SAND_PORTFOLIO_CONFIG_DIR . "/usecases.yml";
    $dataLangsFile = RD_THEME_SAND_PORTFOLIO_CONFIG_DIR . "/data-langs/$lang_code.json";

    $config = new stdClass();
    if (file_exists($configFile)) {
        $config = json_decode(file_get_contents($configFile));
    }
    $dataLangs = new stdClass();
    if (file_exists($dataLangsFile)) {
        $dataLangs = json_decode(file_get_contents($dataLangsFile));
    }

    $experiences = new stdClass();
    if (file_exists($expeirenceFile)) {
        $experiences = Yaml::parse(file_get_contents($expeirenceFile));
    }

    $usecases = new stdClass();
    if (file_exists($useCaseFile)) {
        $usecases = Yaml::parse(file_get_contents($useCaseFile));
    }


    $GLOBALS[RD_THEME_SAND_PORTFOLIO_GLOBAL_KEY] = (object) [
        "config" => $config,
        "data_langs" => $dataLangs,
        "experiences" => $experiences,
        "usecases" => $usecases
    ];
}

function get_config()
{
    return $GLOBALS[RD_THEME_SAND_PORTFOLIO_GLOBAL_KEY]->config;
}

function get_data_langs()
{
    return $GLOBALS[RD_THEME_SAND_PORTFOLIO_GLOBAL_KEY]->data_langs;
}

function get_experiences()
{
    return $GLOBALS[RD_THEME_SAND_PORTFOLIO_GLOBAL_KEY]->experiences;
}

function get_usecases()
{
    return $GLOBALS[RD_THEME_SAND_PORTFOLIO_GLOBAL_KEY]->usecases;
}

function get_state()
{
    return isset($GLOBALS[RD_THEME_SAND_PORTFOLIO_GLOBAL_KEY])
        && isset($GLOBALS[RD_THEME_SAND_PORTFOLIO_GLOBAL_KEY]->state)
        ? $GLOBALS[RD_THEME_SAND_PORTFOLIO_GLOBAL_KEY]->state
        : null;
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

function array_group_by($haystack, $name)
{
    $byName = [];
    foreach ($haystack as $element) {
        if (!empty($element)) {
            if (is_array($element)) {
                $grp_key = $element[$name];
                $byName[$grp_key][] = $element;
            } else if (is_object($element)) {
                $grp_key = $element->$name;
                $byName[$grp_key][] = $element;
            }
        }
    }

    return $byName;
}

function rewriteFlush()
{
    // Helps not manually refresh "Permalinks" structure by going to "Flushing"
    flush_rewrite_rules();
}

function filter_real_metas($wp_post_meta, $prefix, $substr = true)
{
    $post_meta_data = [];
    foreach ($wp_post_meta as $post_meta_key => $post_meta_val) {
        if (strpos($post_meta_key, $prefix) !== false) {
            $post_meta_key = $substr ? substr($post_meta_key, mb_strlen($prefix)) : $post_meta_key;
            $post_meta_data[$post_meta_key] = $post_meta_val && is_array($post_meta_val) ? current($post_meta_val) : "";
        }
    }

    return $post_meta_data;
}

function handle_post_request()
{
    $rd_wthm_sandp_config = get_config();

    // Handle Lang Switch
    if (!empty($_POST['lang']) && !empty($_POST['_wpnonce']) && !empty($_POST['_wp_http_referer'])) {
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

# Prevent canonical redirection
# Note: This is very specific as we use a system with proxy and letting this provoke infinte redirection
remove_filter('template_redirect', 'redirect_canonical');

// Menu functions and filters.
require get_template_directory() . '/inc/view.lib.php';
