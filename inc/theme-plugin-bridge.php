<?php

/**
 * This file helps to limit the strong integration between extensions and the theme and thus reduce any dependency..
 */

namespace Rd\Wp\Theme\SandPortfolio;

use Rd\Wp\Plugin\DevPortfolio\Plugin as PortfolioPlugin;

function bridge_portfolio_project_build_shorcode_tag($id)
{
    return do_shortcode('[' . RD_WPPLG_DEV_PORT_CPT_PROJECT_SHORTCODE . ' id="' . $id . '"]');
}

function bridge_portfolio_get_config()
{
    return PortfolioPlugin::getConfig();
}

function bridge_portfolio_get_data_langs()
{
    return PortfolioPlugin::getConfig();
}
