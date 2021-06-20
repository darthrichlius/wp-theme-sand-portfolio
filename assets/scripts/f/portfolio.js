


$(document).ready(function() {
    function binder() {
        $('.main-header-menu-btn[data-menu-key]').on('click', handleMenuChange);


        $('.jab_pg-port-pcard-title').on('click', handleProjectShow);
        $('.jab_pg-port-single-pg-back-btn').on('click', handleProjectHide);
    }

    function init() {
        binder();
    }
    
    function handleMenuChange(e) {
        const $menu = $(e.target);
        const section = ''.concat('.jab_pg-port-ptyp-sec','[data-menu="', $menu.data('menu-key'), '"]' );

        $('.jab_pg-port-ptyp-sec').hide();
        $(section).show();
    }

    function setSinglePgInfo(key, value) {
        $selector = $(".jab_pg-port-single-pg-" + key);
        if ($selector.length) {
            if (!value) {
                $selector.parent().hide();
            } else {
                $selector.text(value);
                $selector.parent().show();
            }
        }
    }

    function handleProjectShow(e) {
        e.preventDefault();

        $('.jab_pg-port-ptyp-sec').fadeOut({
            complete: function() {
                $projectCard = $(e.target).closest(".jab_pg-port-pcard");
                data = $projectCard.data('compo');

                // Info
                setSinglePgInfo("context", data.context);
                setSinglePgInfo("type", data.type);
                setSinglePgInfo("client", data.client);
                setSinglePgInfo("role", data.role);
                
                var time = "";
                if (data.date_started) {
                    var date_started = new Date(data.date_started);
                    time = "".concat(date_started.toLocaleString('en-us', { month: 'short' }), ' ');
                    time += ("" + date_started.getFullYear()).slice(-2);

                    if (data.date_ended) {
                        var date_ended = new Date(data.date_ended);
                        time += " - ".concat(date_ended.toLocaleString('en-us', { month: 'short' }), ' ');
                        time += ("" + date_ended.getFullYear()).slice(-2);
                    } else {
                        time += (" - ".concat('?'));
                    }

                    setSinglePgInfo("time", time);
                } else {
                    setSinglePgInfo("time", "");
                }
                
                // Links
                if (!data.link_web && !data.link_repo) {
                    $(".jab_pg-port-single-pg-link-web").closest(".jab_pg-port-single-pg-i-blc").hide();
                } else if (!data.link_repo) {
                    $(".jab_pg-port-single-pg-link-repo").hide();
                } else if (!data.link_web) {
                    $(".jab_pg-port-single-pg-link-web").hide();
                } else if (data.link_repo) {
                    $(".jab_pg-port-single-pg-link-repo").prop('href', data.link_repo);
                } else if (data.link_web) {
                    $(".jab_pg-port-single-pg-link-web").prop('href', data.link_web);
                }
                
                // Featured images
                if (data.post_thumbnail) {
                    var hero = "background-image: url(" + data.post_thumbnail + ")";
                    $(".jab_pg-port-single-pg-hero").prop('style', hero);
                } else {
                    $(".jab_pg-port-single-pg-hero").hide();
                }
               
                // Core
                $(".jab_pg-port-single-pg-title").text(data.title);
                $(".jab_pg-port-single-pg-excerpt").text(data.excerpt);
                $(".jab_pg-port-single-pg-content").html(data.content);


                $('.jab_pg-port-single-pg').fadeIn();

                var $body = $("html, body");
                $body.stop().animate({scrollTop:0}, 500, 'swing');
            }
        });
    }

    function handleProjectHide(e) {
        e.preventDefault();

        $('.jab_pg-port-single-pg').fadeOut({
            complete: function() {
                $('.jab_pg-port-ptyp-sec').fadeIn();
            }
        });
    }
    
    init();
 });