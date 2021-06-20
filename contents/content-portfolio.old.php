<?php

namespace Rd\Wp\Theme\SandPortfolio;

use Rd\Vendor\Php\Utils\ArrayLib;

$state = get_state();

if (isset($state) && isset($state->current_page)) {
    $all_posts = $state->current_page->posts->all;
    $all_posts_by_type = $state->current_page->posts->by_type;

    $menus = $state->current_page->menus;
}

?>

<div>

    <?php foreach ($all_posts_by_type as $k_type => $type_posts) : ?>
        <?php
        // $menu_posts = $posts[$k_menu];
        $grouped_by_context = ArrayLib::array_group_by($type_posts, RD_WPPLG_DEV_PORT_CPT_PROJECT . '_context');

        $project_context_langs = $state->current_page->langs->project_context;
        // $project_type_langs = $state->current_page->langs->project_type;


        ?>
        <div class="jab_pg-port-ptyp-sec pg-port-ptyp-sec" data-menu="<?= $k_type ?>" style="display: none">
            <?php foreach ($grouped_by_context as $k_context => $context_posts) : ?>
                <?php

                $ctx_lang = $project_context_langs->$k_context;

                //  dump($context, $ctx_lang);
                // die();

                ?>
                <section class="jab_pg-port-pctx-sec pg-port-pctx-sec">
                    <header class="pg-port-pctx-sec-hdr">
                        <h3 class="pg-port-pctx-sec-hdr-title"><?= $ctx_lang ?></h3>
                        <h4 class="pg-port-pctx-sec-hdr-subtitle">Lorem ipsum</h4>
                    </header>
                    <div class="pg-port-pctx-sec-body">
                        <?php foreach ($context_posts as $project) :
                            $title = $project->post_title;
                            $excerpt = "Kidiliz is an online clothes shop for kids. Lorem ipsum dolor sit amet, consecteur adipiscing elit.";
                            $date_started = $project->{RD_WPPLG_DEV_PORT_CPT_PROJECT_FIELD_DATE_STARTED};
                            $date_ended = $project->{RD_WPPLG_DEV_PORT_CPT_PROJECT_FIELD_DATE_ENDED};
                            $role = $project->{RD_WPPLG_DEV_PORT_CPT_PROJECT_FIELD_ROLE};
                        ?>
                            <?php app_view_render_dport_project_card($title, $excerpt, $date_started, $date_ended, $role) ?>
                        <?php endforeach; ?>
                    </div>
                </section>
            <?php endforeach; ?>
        </div>
    <?php endforeach; ?>
</div>