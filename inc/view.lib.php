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
