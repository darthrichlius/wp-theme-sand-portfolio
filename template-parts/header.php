<header>
    <div class="blade-t">
        <a class="blade-t-matrix-box flex flex-col justify-between" title="Home" href="/">
            <p class="flex justify-between blade-t-matrix-box-binar">
                <span>1</span>
                <span>0</span>
                <span>1</span>
            </p>
            <p class="flex justify-between blade-t-matrix-box-binar">
                <span>1</span>
                <span>1</span>
                <span>0</span>
            </p>
            <p class="flex justify-between blade-t-matrix-box-binar">
                <span>1</span>
                <span>0</span>
                <span>0</span>
            </p>
        </a>
        <nav class="blade-t-menunav flex items-center">
            <?= wp_nav_menu(
                [
                    'container' => '',
                    'items_wrap' => '<ul class="flex blade-t-menunav-list flex justify-end">%3$s</ul>'
                ]
            ) ?>
        </nav>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light app-header-mobile">
        <a class="navbar-brand" href="/">
            <span class="iconify" data-icon="ant-design:home-filled" data-inline="false"></span>
        </a>
        <button class="navbar-toggler jab_menu-sm-toggler" type="button" aria-label="Toggle navigation">
            <span class="iconify menu-icon menu-icon-burger" data-icon="bx:bx-menu" data-inline="false"></span>
            <span class="iconify menu-icon menu-icon-close" style="display: none" data-icon="gg:close" data-inline="false"></span>
        </button>

        <div class="jab_navbar-collapse navbar-collapse collapse" style="display: none">
            <?= wp_nav_menu(
                [
                    'container' => '',
                    'items_wrap' => '<ul class="navbar-nav mr-auto">%3$s</ul>'
                ]
            ) ?>
            <footer>
                <div class="blade-l-bottom-socnet sm-mode">
                    <a href="https://linkedin.com/in/iamloucarther">
                        <span class="iconify" data-icon="akar-icons:linkedin-fill" data-inline="false"></span>
                    </a>
                    <a href="https://twitter.com/rdieud">
                        <span class="iconify" data-icon="akar-icons:twitter-fill" data-inline="false"></span>
                    </a>
                </div>
                <form id="japp-ftr-sw-fo" class="footer-r flex items-end gap-2" method="post">
                    <button class="ftr-sw-lang-btn active japp-ftr-sw-lang" data-lang="en_US" default>En</button>
                    <button class="ftr-sw-lang-btn japp-ftr-sw-lang" data-lang="fr_FR">Fr</button>
                    <?= wp_nonce_field('change-lang-key-trafalgar'); ?>
                </form>
            </footer>
        </div>

    </nav>
</header>