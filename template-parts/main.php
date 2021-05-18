<?php if (is_front_page()) : ?>
    <main class="main">
        <?= app_view_get_page_content() ?>
    </main>
<?php else :
    $page_info = app_view_get_page_info();
?>
    <main class="main">
        <div class="page-main">
            <div class="">
                <div class="app-col-start-2 main-header">
                    <div class="main-header-title pattern-diagonal-stripes-sm" style="color: #e2e4e6">
                        <h2 class="main-header-title-h"><?= __($page_info->title) ?></h2>
                    </div>
                    <?php if (!empty($page_info) && !empty($page_info->nav) && is_array($page_info->nav)) : ?>
                        <nav class="main-header-menu-nav">
                            <?php foreach ($page_info->nav as $menu) : ?>
                                <button class="main-header-menu-btn"><?= __($menu->label) ?></button>
                            <?php endforeach; ?>
                        </nav>
                    <?php endif; ?>
                </div>
                <div class="app-col-start-3 main-body">
                    <?= app_view_get_page_content() ?>
                </div>
            </div>
        </div>
    </main>
<?php endif; ?>