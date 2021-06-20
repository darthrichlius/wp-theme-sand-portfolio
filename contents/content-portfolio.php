<?php

namespace Rd\Wp\Theme\SandPortfolio;

$state = get_state();

if (isset($state) && isset($state->current_page)) {
    $all_posts = $state->current_page->posts->all;
    $all_posts_by_type = $state->current_page->posts->by_type;
}
?>

<div>
    <div class="jab_pg-port-ptyp-sec pg-port-ptyp-sec">
        <?php foreach ($all_posts_by_type as $k_type => $group) :
            $parent = $group->parent;
            $projects = $group->list;
        ?>
            <section class="jab_pg-port-pctx-sec pg-port-pctx-sec">
                <header class="pg-port-pctx-sec-hdr">
                    <h3 class="pg-port-pctx-sec-hdr-title"><?= $parent->name ?></h3>
                    <h4 class="pg-port-pctx-sec-hdr-subtitle"><?= $projects[0]->rd_wpplg_cpt_project_type !== $parent->name ? $projects[0]->rd_wpplg_cpt_project_type : "" ?></h4>
                </header>
                <div class="pg-port-pctx-sec-body">
                    <?php foreach ($projects as $project) :
                        $title = $project->post_title;
                        $excerpt = $project->post_excerpt;
                        $date_started = $project->{RD_WPPLG_DEV_PORT_CPT_PROJECT_FIELD_DATE_STARTED};
                        $date_ended = $project->{RD_WPPLG_DEV_PORT_CPT_PROJECT_FIELD_DATE_ENDED};
                        $role = $project->{RD_WPPLG_DEV_PORT_CPT_PROJECT_FIELD_ROLE};

                        $client = $project->{RD_WPPLG_DEV_PORT_CPT_PROJECT_FIELD_CLIENT};
                        $context = $project->{RD_WPPLG_DEV_PORT_CPT_PROJECT_FIELD_CONTEXT};
                        $type = $project->{RD_WPPLG_DEV_PORT_CPT_PROJECT_FIELD_TYPE};
                        $link_web = $project->{RD_WPPLG_DEV_PORT_CPT_PROJECT_FIELD_WEBSITE};
                        $link_repo = $project->{RD_WPPLG_DEV_PORT_CPT_PROJECT_FIELD_ROLE};
                        $content = $project->post_content;
                        $post_thumbnail = $project->post_thumbnail;
                    ?>
                        <?php
                        app_view_render_dport_project_card(
                            $title,
                            $excerpt,
                            $date_started,
                            $date_ended,
                            $role,
                            $client,
                            $context,
                            $type,
                            $link_web,
                            $link_repo,
                            $content,
                            $post_thumbnail
                        )
                        ?>
                    <?php endforeach; ?>
                </div>
            </section>
        <?php endforeach; ?>
    </div>
    <section class="jab_pg-port-single-pg pg-port-single-pg" style="display: none">
        <nav class="pg-port-single-pg-nav">
            <button class="jab_pg-port-single-pg-back-btn pg-port-single-pg-back-btn">
                <b>&lt; Back</b> (Portfolio)
            </button>
        </nav>
        <header class="pg-port-single-pg-hdr">
            <div class="jab_pg-port-single-pg-hero pg-port-single-pg-hdr-hero" style="background-image: url(<?= get_template_directory_uri() ?>/assets/media/img/kidiliz.jpg)">
            </div>
            <div class="pg-port-single-pg-hdr-info">
                <div class="jab_pg-port-single-pg-i-blc pg-port-single-pg-hdr-i-blc">
                    <h5 class="pg-port-single-pg-hdr-i-blc-tle">Context</h5>
                    <p class="jab_pg-port-single-pg-context pg-port-single-pg-hdr-i-blc-txt">Professional</p>
                </div>
                <div class="jab_pg-port-single-pg-i-blc pg-port-single-pg-hdr-i-blc">
                    <h5 class="pg-port-single-pg-hdr-i-blc-tle">Product Type</h5>
                    <p class="jab_pg-port-single-pg-type pg-port-single-pg-hdr-i-blc-txt">E-commerce</p>
                </div>
                <div class="jab_pg-port-single-pg-i-blc pg-port-single-pg-hdr-i-blc">
                    <h5 class="pg-port-single-pg-hdr-i-blc-tle">Client</h5>
                    <p class="jab_pg-port-single-pg-client pg-port-single-pg-hdr-i-blc-txt">Kidiliz Group</p>
                </div>
                <div class="jab_pg-port-single-pg-i-blc pg-port-single-pg-hdr-i-blc">
                    <h5 class="pg-port-single-pg-hdr-i-blc-tle">Role</h5>
                    <p class="jab_pg-port-single-pg-role pg-port-single-pg-hdr-i-blc-txt">Senior FS Developer</p>
                </div>
                <div class="jab_pg-port-single-pg-i-blc pg-port-single-pg-hdr-i-blc">
                    <h5 class="pg-port-single-pg-hdr-i-blc-tle">Année</h5>
                    <p class="jab_pg-port-single-pg-time pg-port-single-pg-hdr-i-blc-txt">Nov 16 - Nov 18 (24mo)
                </div>
                <div class="jab_pg-port-single-pg-i-blc pg-port-single-pg-hdr-i-blc">
                    <h5 class="pg-port-single-pg-hdr-i-blc-tle">Links</h5>
                    <p>
                        <a class="jab_pg-port-single-pg-link-web pg-port-single-pg-hdr-i-blc-txt" href="#">[Web]</a>
                        <a class="jab_pg-port-single-pg-link-repo pg-port-single-pg-hdr-i-blc-txt" href="#">[Git]</a>
                    </p>
                </div>
        </header>
        <div class="pg-port-single-pg-main">
            <h3 class="jab_pg-port-single-pg-title pg-port-single-pg-title">Kidiliz</h3>
            <h3 class="jab_pg-port-single-pg-excerpt pg-port-single-pg-subtitle">Vêtements et mode enfants</h3>
            <div class="jab_pg-port-single-pg-content pg-port-single-pg-main-bdy">
                <div class="pg-port-single-pg-main-sec">
                    <h5 class="pg-port-single-pg-main-sec-tle">Stack</h5>
                    <p class="pg-port-single-pg-main-sec-par">
                        Prestahop - PHP - Jquery - Javscript - Mysql - HTML 5 - CSS Grid - CSS Flexbox - Sass - Gulp - Composer - Git - Jenkins - Capistrano - JIRA - Service Deck
                    </p>
                </div>
                <div class="pg-port-single-pg-main-sec">
                    <h5 class="pg-port-single-pg-main-sec-tle">Context</h5>
                    <p class="pg-port-single-pg-main-sec-par">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                        Quos nostrum unde natus perferendis ipsam corrupti reprehenderit fuga error ut dignissimos,
                        blanditiis inventore iure quae aperiam, animi suscipit facere eaque doloribus.
                    </p>
                </div>

                <div class="pg-port-single-pg-main-sec">
                    <h5 class="pg-port-single-pg-main-sec-tle">Missions</h5>
                    <h6 class="pg-port-single-pg-main-sec-subtle">Customer relation</h6>
                    <ul class="pg-port-single-pg-main-sec-par">
                        <li>Lorem ipsum dolor, sit amet consectetur adipisicing elit</li>
                        <li>Quos nostrum unde natus perferendis ipsam corrupti reprehenderit fuga error ut dignissimos</li>
                        <li>blanditiis inventore iure quae aperiam, animi suscipit facere eaque doloribus</li>
                    </ul>
                    <h6 class="pg-port-single-pg-main-sec-subtle">UI Integration</h6>
                    <ul class="pg-port-single-pg-main-sec-par">
                        <li>Lorem ipsum dolor, sit amet consectetur adipisicing elit</li>
                        <li>Quos nostrum unde natus perferendis ipsam corrupti reprehenderit fuga error ut dignissimos</li>
                        <li>blanditiis inventore iure quae aperiam, animi suscipit facere eaque doloribus</li>
                    </ul>
                    <h6 class="pg-port-single-pg-main-sec-subtle">Back office</h6>
                    <ul class="pg-port-single-pg-main-sec-par">
                        <li>Lorem ipsum dolor, sit amet consectetur adipisicing elit</li>
                        <li>Quos nostrum unde natus perferendis ipsam corrupti reprehenderit fuga error ut dignissimos</li>
                        <li>blanditiis inventore iure quae aperiam, animi suscipit facere eaque doloribus</li>
                    </ul>
                    <h6 class="pg-port-single-pg-main-sec-subtle">QA</h6>
                    <ul class="pg-port-single-pg-main-sec-par">
                        <li>Lorem ipsum dolor, sit amet consectetur adipisicing elit</li>
                        <li>Quos nostrum unde natus perferendis ipsam corrupti reprehenderit fuga error ut dignissimos</li>
                        <li>blanditiis inventore iure quae aperiam, animi suscipit facere eaque doloribus</li>
                    </ul>
                    <h6 class="pg-port-single-pg-main-sec-subtle">CI / CD</h6>
                    <ul class="pg-port-single-pg-main-sec-par">
                        <li>Code review</li>
                        <li>Lorem ipsum dolor, sit amet consectetur adipisicing elit</li>
                        <li>Quos nostrum unde natus perferendis ipsam corrupti reprehenderit fuga error ut dignissimos</li>
                        <li>blanditiis inventore iure quae aperiam, animi suscipit facere eaque doloribus</li>
                    </ul>
                </div>
            </div>
        </div>
        <footer class="pg-port-single-pg-ftr">

        </footer>
    </section>
</div>