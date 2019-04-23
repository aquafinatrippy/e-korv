$('nav a').change(function() {
    $.smoothScroll({
        offset: -80,
        speed: 2000,
        scrollTarget: $(this).val()
    });
});