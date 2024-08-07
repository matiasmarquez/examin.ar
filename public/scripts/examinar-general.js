$(document).ready(function(){
    
    //<editor-fold defaultstate="collapsed" desc="Menú principal">
    $(window).on("scroll", function(){
        if ($(this).scrollTop() > 45) {
            $(".navbar").addClass("navbar-fixed-top sticky-navbar");
        } else {
            $(".navbar").removeClass("navbar-fixed-top sticky-navbar");
        }
    });
    //</editor-fold>
    
    //<editor-fold defaultstate="collapsed" desc="Lightbox">
    if ($(".fancy").length) {
        $(".fancy").fancybox();
        $('.fancybox').fancybox({
            helpers: {
                media: {}
            }
        });
    }
    //</editor-fold>
    
    //<editor-fold defaultstate="collapsed" desc="Ficha carrera">
    if ($('.nav-tabs').length) {
        $.each($('.nav-tabs'), function () {
            var tabsItem = $(this).find('a'),
                    tabs = $(this),
                    leftActive = tabs.find('.active').children('a').position().left,
                    widthActive = tabs.find('.active').children('a').width();
            tabs.append('<li class="tabs-hr"></li>');
            $('.tabs-hr').css({
                left: leftActive,
                width: widthActive
            });
            tabsItem.on('click', function () {
                var left = $(this).position().left,
                        width = $(this).width();
                $('.tabs-hr').animate({
                    left: left,
                    width: width
                }, 500, 'easeInOutExpo');
            });
        });
    }
    
    $(".tab-pane-boton").on("click", function(e){
        $(this).parent().next().slideToggle("slow");
        e.preventDefault();
    });
    //</editor-fold>

    //<editor-fold defaultstate="collapsed" desc="Quienes somos">
    if (".quienes-somos-tabs") {
        box_tabs();
    }
    function box_tabs() {
        $(".quienes-somos-tabs a").on('click', function (e) {
            if ($(this).hasClass("active")) {
            } else {
                var a = $(this).data("boxs-tab");
                var b = $(".quienes-somos-cajas [data-box='" + a + "']");
                $(".quienes-somos-tabs a").removeClass("active");
                $(this).addClass("active");
                $(b).addClass("active").siblings("*").removeClass("active");
                $("[data-box-text='" + a + "']").addClass("active").siblings("*").removeClass("active");
                e.preventDefault();
            }
        })
    }
    //</editor-fold>
    
    //<editor-fold defaultstate="collapsed" desc="Login">
    if ($("section").hasClass("login")) {
        $("body").addClass("login-body");
    }
    //</editor-fold>
    
    
    $(".animsition").animsition({
        inClass: 'fade-in',
        outClass: 'fade-out',
        inDuration: 1000,
        outDuration: 800,
        linkElement: '.animsition-link',
        loading: true,
        loadingParentElement: 'body', //animsition wrapper element
        loadingClass: 'animsition-loading',
        timeout: true,
        timeoutCountdown: 600,
        onLoadEvent: true,
        browser: [ 'animation-duration', '-webkit-animation-duration'],
        // "browser" option allows you to disable the "animsition" in case the css property in the array is not supported by your browser.
        // The default setting is to disable the "animsition" in a browser that does not support "animation-duration".
        overlay : false,
        overlayClass : 'animsition-overlay-slide',
        overlayParentElement : 'body',
        transition: function(url){ window.location.href = url; }
    });

});