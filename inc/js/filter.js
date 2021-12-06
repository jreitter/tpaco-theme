$("*[data-filter]").click(function () {
    var cat = $(this).data('filter');
    $('.wrapper--deal').hide().removeClass('aos-animate');
    $('.wrapper--deal.'+cat).show().addClass('aos-animate');
    $("*[data-filter]").removeClass('active');
    $(this).addClass('active');
});

$("*[data-filter-reset]").click(function () {
    $('.wrapper--deal').hide().removeClass('aos-animate');
    $('.wrapper--deal').show().addClass('aos-animate');
    $("*[data-filter]").removeClass('active');
});