$(document).ready(function() {
    function binder() {
        $('.jss-about-cont-ss-sect-title-row, .jss-about-cont-ss-sect-title-row *').on('click', topSectionToggle);
    }

    function topSectionToggle(e) {
        e.stopPropagation();

        var topSection = $(e.target).closest(".jss-about-cont-ss-sect");

        if ($(topSection).find(".jss-about-cont-ss-sect-title-visible-btn[app-type='visible']").hasClass("hidden")) {
            $(topSection).find(".jss-about-cont-ss-sect-title-visible-btn[app-type='closed']").toggleClass("hidden");
            $(topSection).find(".jss-about-cont-ss-sect-title-visible-btn[app-type='visible']").toggleClass("hidden");
        } else {
            $(topSection).find(".jss-about-cont-ss-sect-title-visible-btn[app-type='closed']").toggleClass("hidden");
            $(topSection).find(".jss-about-cont-ss-sect-title-visible-btn[app-type='visible']").toggleClass("hidden");
        }

        $(topSection).find(".jss-about-cont-ss-sect-body").toggleClass("hidden");
    }

    function init() {
        binder();
    }

    init();
});