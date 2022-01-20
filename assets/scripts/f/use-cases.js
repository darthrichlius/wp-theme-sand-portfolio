$(document).ready(function() {

    function binder() {
        $('.jss-usc-cont-usc-card-ftr-file-card-cta--preview').on('click', filePreviewToggle);
    }

    function filePreviewToggle() {
        $(".jss-sc-cont-usc-card-ftr-iframe-card").toggleClass("hidden");
    }


    function init() {
        binder();
    }

    init();
});
