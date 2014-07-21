app = {}, UTIL = {
    fire: function(o, n, i) {
        var c = app;
        n = void 0 === n ? "init" : n, "" !== o && c[o] && "function" == typeof c[o][n] && c[o][n](i);
    },
    loadEvents: function() {
        var o = document.body.id;
        UTIL.fire("common"), UTIL.fire(o), $.each(document.body.className.split(/\s+/), function(n, i) {
            UTIL.fire(o, i);
        }), UTIL.fire("common", "finalize");
    }
}, $(document).ready(UTIL.loadEvents), app.common = {
    init: function() {
        $(document).scroll(function() {
            $(document).scrollTop() >= 300 ? $(".UpArrow").css("display", "block") : 300 > $(document).scrollTop() && $(".UpArrow").css("display", "none");
        }), $(".UpArrow").click(function() {});
    },
    finalize: function() {}
}, app.home = {
    init: function() {}
};