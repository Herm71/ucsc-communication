jQuery(document).ready(function(o) { var t = 100,
        n = 250,
        u = 500;
    o(window).scroll(function() { o(this).scrollTop() < t ? o(".topbutton").fadeOut(u) : o(".topbutton").fadeIn(u) }), o(".topbutton").on("click", function() { return o("html, body").animate({ scrollTop: 0 }, n), !1 }) });