<?php

namespace Rd\Wp\Theme\SandPortfolio;

$state = get_state();

if (isset($state) && isset($state->current_page)) {
    $posts = $state->current_page->posts;
    $menus = $state->current_page->menus;
}

?>

<div>
    <?php foreach ($menus as $k_menu => $v_menu) : ?>
        <?php
        $menu_posts = $posts[$k_menu];
        $grouped = array_group_by($menu_posts, RD_WPPLG_DEV_PORT_CPT_PROJECT . '_context');

        ?>
        <?php foreach ($grouped as $k_grouped => $v_grouped) : ?>
            <section class="pg-port-sec">
                <header class="pg-port-sec-hdr">
                    <h3 class="pg-port-sec-hdr-title"><?= $k_grouped ?></h3>
                    <h4 class="pg-port-sec-hdr-subtitle">Lorem ipsum</h4>
                </header>
                <div class="pg-port-sec-body">
                    <?php foreach ($v_grouped as $project) :
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
    <?php endforeach; ?>
</div>