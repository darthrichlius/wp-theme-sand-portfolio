<footer class="footer">
    <div class="footer-main flex justify-between">
        <div class="footer-l flex flex-col">
            <p>Copyright c 2021</p>
            <p><?= __("All rights reserved") ?></p>
            <p><?= __("Made with love in <b>France</b>") ?></p>
        </div>
        <form id="japp-ftr-sw-fo" class="footer-r flex items-end gap-2" method="post">
            <button class="ftr-sw-lang-btn active japp-ftr-sw-lang" data-lang="en_US" default>English</button>
            <button class="ftr-sw-lang-btn japp-ftr-sw-lang" data-lang="fr_FR">Francais</button>
            <?= wp_nonce_field('change-lang-key-trafalgar'); ?>
        </form>
    </div>
</footer>