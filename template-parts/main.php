<?php if (is_front_page()) : ?>
    <main class="main">
        <?= app_view_get_page_content() ?>
    </main>
<?php else :
    global $post;
    $theme_config = Rd\Wp\Theme\SandPortfolio\get_config();
    $theme_state = Rd\Wp\Theme\SandPortfolio\get_state();

    $page_slug = $post->post_name;

    $page_title = $theme_config->page->$page_slug->title;
?>
    <main class="main">
        <div class="page-main">
            <div class="">
                <div class="app-col-start-2 main-header">
                    <div class="main-header-title pattern-diagonal-stripes-sm" style="color: #e2e4e6">
                        <h2 class="main-header-title-h"><?= __($page_title) ?></h2>
                    </div>
                </div>
                <div class="app-col-start-3 main-body">
                    <?= app_view_get_page_content() ?>
                </div>
            </div>
        </div>
    </main>
<?php endif; ?>