<header class="blade-t">
    <a class="blade-t-matrix-box flex flex-col justify-between" href="/">
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
                'items_wrap' => '<ul class="flex blade-t-menunav-list flex justify-between">%3$s</ul>'
            ]
        ) ?>
    </nav>
</header>