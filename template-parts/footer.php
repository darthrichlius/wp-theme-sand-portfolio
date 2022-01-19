<footer class="footer">
    <div class="footer-main flex justify-between">
        <div class="footer-l flex flex-col">
            <p>Copyright © 2022</p>
            <p><?= __("Made with love in <b>France</b>") ?></p>
        </div>
        <form id="japp-ftr-sw-fo" class="footer-r flex items-end gap-2" method="post">
            <button class="ftr-sw-lang-btn active japp-ftr-sw-lang" data-lang="en_US" default>En</button>
            <button class="ftr-sw-lang-btn japp-ftr-sw-lang" data-lang="fr_FR">Fr</button>
            <?= wp_nonce_field('change-lang-key-trafalgar'); ?>
        </form>
    </div>
</footer>