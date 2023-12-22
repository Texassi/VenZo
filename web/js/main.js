var owl = $('.owl-carousel');
owl.owlCarousel({
    autoWidth: true,
    loop: true,
    dots: false,
});

$('.owl-prev').click(function() {
    owl.trigger('prev.owl.carousel');
})
$('.owl-next').click(function() {
    owl.trigger('next.owl.carousel');
})

$(document).ready(function() {
    $("#regist").click(function() {
        $("#reg").show();
    });
});

$(document).ready(function() {
    $("#like").click(function() {
        $("#like").show();
    });
});