
function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for(var i = 0; i <ca.length; i++) {
      var c = ca[i];
      while (c.charAt(0) == ' ') {
        c = c.substring(1);
      }
      if (c.indexOf(name) == 0) {
        return c.substring(name.length, c.length);
      }
    }
    return "";
  }

function handleLangChange(e) {
    e.preventDefault();
    var lg = $(this).data("lang");
    var $toto = $('<input />')
        .attr('type', 'hidden')
        .attr('name', 'lang')
        .attr('value', lg)
    ;
 
    $('#japp-ftr-sw-fo').append($toto);
    $('#japp-ftr-sw-fo').submit();
}

function switchLang(lang) {
    var lgSelector = lang ? `.japp-ftr-sw-lang[data-lang="${lang}"]` : '';
    var defSelector = '.japp-ftr-sw-lang[data-lang][default]';

    $('.japp-ftr-sw-lang').removeClass('active');

    if ($(lgSelector).length) {
        $(lgSelector).addClass('active');
    } else if ($(defSelector).length) {
        $(defSelector).addClass('active');
    }
}

function handleMenuSmToggle (e) {
  e.preventDefault();

  $('.jab_menu-sm-toggler .menu-icon:visible').fadeOut({
    complete: function() {
      if (!$('.jab_navbar-collapse').is(':visible')) {
        $('.jab_menu-sm-toggler .menu-icon-close').fadeIn();
      } else {
        $('.jab_menu-sm-toggler .menu-icon-burger').fadeIn();  
      }
      $('.jab_navbar-collapse').stop(true, true).toggle();
    }
  });
}

function init() {
    var lang = getCookie("business-rdieud-com-cookie_lang");
    switchLang(lang);
}

jQuery(document).ready(function() {
   $('.japp-ftr-sw-lang[data-lang]').on('click', handleLangChange);

   $('.jab_menu-sm-toggler').on('click', handleMenuSmToggle);

   init();
});
