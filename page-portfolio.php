<?php

use Rd\Wp\Plugin\DevPortfolio\Plugin as PortfolioPlugin;
use Rd\Wp\Plugin\DevPortfolio\MetaBox\ProjectMetaBox;

use Rd\Vendor\Wordpress\Utils\MetaUtils;

use Rd\Vendor\Php\Utils\StrLib;

use Rd\Wp\Plugin\DevPortfolio\Enum\ProjectType;
use Rd\Wp\Plugin\DevPortfolio\Enum\ProjectContext;

function setState()
{
    // @todo Make sure config is defined
    $rd_wpplg_dport_config = PortfolioPlugin::getConfig();
    $rd_wthm_sandp_config = Rd\Wp\Theme\SandPortfolio\get_config();

    $plugin_dport_post_type = RD_WPPLG_DEV_PORT_CPT_PROJECT;

    // Get custom post type Project
    $wp_posts = get_posts([
        'post_type'   => $plugin_dport_post_type,
        'post_status' => 'publish'
    ]);

    // Grouping projects by project-type
    $posts = [];
    foreach ($wp_posts as $wp_post) {
        $wp_post = (array) $wp_post;

        $post_metas = get_post_meta($wp_post['ID']);

        $prefix = RD_WPPLG_DEV_PORT_CPT_PROJECT . '_';
        $post_metas = Rd\Wp\Theme\SandPortfolio\filter_real_metas($post_metas, $prefix, false);

        $group_key = isset($post_metas[RD_WPPLG_DEV_PORT_CPT_PROJECT . '_type']) ? $post_metas[RD_WPPLG_DEV_PORT_CPT_PROJECT . '_type'] : $rd_wpplg_dport_config->default->project_type;

        $posts[$group_key][] = (object) array_merge($wp_post, $post_metas);
    }

    // Building page main menu data
    $menus = [];
    $project_type_langs = ProjectMetaBox::getFlippedConstants(ProjectType::class);
    $menu_ids = array_keys($posts);
    foreach ($menu_ids as $mid) {
        $menus[$mid] = StrLib::explodeAnyway($project_type_langs[$mid]);
    }

    // Setting up state data
    $GLOBALS[RD_THEME_SAND_PORTFOLIO_GLOBAL_KEY]->state = (object) [
        "current_page" => (object) [
            "posts" => $posts,
            "menus" => $menus
        ]
    ];
}

setState();

require_once "models/standard.model.php";
