$(document).ready(function() {
    function binder() {
        $('.jss-about-cont-ss-sect-title-row, .jss-about-cont-ss-sect-title-row *').on('click', topSectionToggle);

        $('.jss-ab-cont-xp-card-job-par-list-toggle-cta').on('click', experienceToggle);
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

    function experienceToggle(e) {
        e.stopPropagation();

        var cta = $(e.target);
        var ctaTxt = $(cta).text();
        var ctaTxtToggle = $(cta).data("toggle");

        var par = $(e.target).closest(".jss-ab-cont-xp-card-job-par-list-toggle");

        $(par).siblings(".jss-ab-cont-xp-card-job-par-list").toggleClass("hidden");

        $(cta).text(ctaTxtToggle);
        $(cta).data("toggle", ctaTxt);
    }

    function init() {
        binder();
    }

    init();
});