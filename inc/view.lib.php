<?php

function app_view_get_page_content($page_slug = "")
{
    global $post;
    $slug = $page_slug ? $page_slug : $post->post_name;

    $path = get_template_directory() . "/contents/content-$slug.php";
    ob_start();
    include $path;
    $content = ob_get_clean();

    return $content;
}

/**
 * @deprecated
 */
function app_view_get_page_info($page_slug = "")
{
    /*
        @todos
            - Check file exists
            - Check state key exists
     */
    global $post;
    $slug = $page_slug ? $page_slug : $post->post_name;

    $path = get_template_directory() . "/config/state.json";
    $file_content = file_get_contents($path, true);
    $page_state = json_decode($file_content);

    return $page_state->$slug;
}

function app_view_render_dport_project_card($title, $excerpt, $date_started, $date_ended, $role)
{
?>
    <section class="pg-port-pcard">
        <header class="pg-port-pcard-hdr">
            <h2 class="pg-port-pcard-title"><?= $title ?></h2>
        </header>
        <div class="pg-port-pcard-body">
            <div class="pg-port-pcard-body-t">
                <p class="pg-port-pcard-time"><?= $date_started ?> - <?= $date_ended ?></p>
                <p class="pg-port-pcard-desc"><?= $excerpt ?></p>
            </div>
            <div class="pg-port-pcard-body-ftr">
                <div class="pg-port-pcard-body-ftr-part">
                    <span class="pg-port-pcard-body-ftr-part-label">Role:</span>
                    <span class="pg-port-pcard-body-ftr-part-val"><?= $role ?></span>
                </div>
                <div class="pg-port-pcard-body-ftr-part">
                    <span class="pg-port-pcard-body-ftr-part-label">Stack:</span>
                    <span class="pg-port-pcard-body-ftr-part-val">XY1 - XY2 - XY3 - XY4</span>
                </div>
            </div>
            <div class="pg-port-pcard-body-extftr">
                <button class="pg-port-pcard-visit-btn">Visit</button>
            </div>
        </div>
    </section>
<?php
}
