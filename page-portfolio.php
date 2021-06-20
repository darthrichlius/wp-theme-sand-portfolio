<?php

namespace Rd\Wp\Theme\SandPortfolio;

use Rd\Wp\Plugin\DevPortfolio\Plugin as PortfolioPlugin;
use Rd\Wp\Plugin\DevPortfolio\MetaBox\ProjectMetaBox;

use Rd\Vendor\Wordpress\Utils\MetaUtils;

use Rd\Vendor\Php\Utils\StrLib;
use Rd\Vendor\Php\Utils\ObjectLib;

use Rd\Wp\Plugin\DevPortfolio\Enum\ProjectType;
use Rd\Wp\Plugin\DevPortfolio\Enum\ProjectContext;
use stdClass;

function setState()
{
    // @todo Make sure config is defined
    $rd_wpplg_dport_config = bridge_portfolio_get_config();
    $rd_wthm_sandp_config = get_config();

    $plugin_dport_post_type = RD_WPPLG_DEV_PORT_CPT_PROJECT;

    // Get custom post type Project
    $wp_posts = get_posts([
        'post_type'   => $plugin_dport_post_type,
        'post_status' => 'publish',
        'numberposts' => -1
    ]);

    /*
    dump($wp_posts);
    die();
    //*/

    // Grouping projects by project-type
    $all_posts = [];
    $posts_grouped_by_type = new stdClass();
    foreach ($wp_posts as $wp_post) {
        $wp_post = (array) $wp_post;

        $prefix = RD_WPPLG_DEV_PORT_CPT_PROJECT . '_';
        $post_metas = get_post_meta($wp_post['ID']);
        $post_metas = filter_real_metas($post_metas, $prefix, false);

        // dump($wp_post, get_the_post_thumbnail_url($wp_post['ID']));

        $post_thumbnail = get_the_post_thumbnail_url($wp_post['ID']);
        $wp_post['post_thumbnail'] = $post_thumbnail;

        $group_type = null;

        $project_type = wp_get_post_terms($wp_post['ID'], RD_WPPLG_DEV_PORT_CPT_PROJECT_FIELD_TYPE);
        if ($project_type && is_array($project_type)) {
            $project_type = current($project_type);

            $project_type_parent = $project_type->parent
                ? get_term($project_type->parent, RD_WPPLG_DEV_PORT_CPT_PROJECT_FIELD_TYPE)
                : null;

            $wp_post[RD_WPPLG_DEV_PORT_CPT_PROJECT_FIELD_TYPE] = $project_type->name;


            $group_type = $project_type_parent ?? $project_type;
        }

        $project_context = wp_get_post_terms($wp_post['ID'], RD_WPPLG_DEV_PORT_CPT_PROJECT_FIELD_CONTEXT);
        if ($project_context && is_array($project_context)) {
            $project_context = current($project_context);

            $wp_post[RD_WPPLG_DEV_PORT_CPT_PROJECT_FIELD_CONTEXT] = $project_context->name;
        }

        $final_post = (object) array_merge($wp_post, $post_metas);

        $all_posts[] = $final_post;

        @$posts_grouped_by_type->{$project_type->slug}->parent = $group_type;
        @$posts_grouped_by_type->{$project_type->slug}->list[] = $final_post;
    }

    // die();

    // Setting up state data
    $GLOBALS[RD_THEME_SAND_PORTFOLIO_GLOBAL_KEY]->state = (object) [
        "current_page" => (object) [
            "posts" => (object) [
                "all" => (object) $all_posts,
                "by_type" => $posts_grouped_by_type,
            ]
        ]
    ];
}

setState();

require_once "models/default.model.php";
