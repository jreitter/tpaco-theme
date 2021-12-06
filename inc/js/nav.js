$(document).scroll(function () {
    var y = $(this).scrollTop();
    if (y > 200) {
        $('.logo').fadeOut();
    } else {
        $('.logo').fadeIn();
    }

    var y = $(this).scrollTop();
    if (y > 800) {
        $('.logo--alt').fadeIn();
    } else if (y > 100) {
        $('.logo--alt').fadeOut();
    }
});

$(document).ready(function(){
    $('.menu--icon').click(function (e) {
        e.preventDefault();
        $(this).toggleClass("active");
        $('.nav--main').toggleClass("is-active");
    })
});

$(document).ready(function(){
    $('.button--contact').click(function(){
        $(this).attr('href', 'mailto:info@jreitter.com');
    })

    $('.contact--mail').click(function(){
        $(this).attr('href', 'mailto:info@jreitter.com');
    })

    $('.contact--phone').click(function(){
        $(this).attr('href', 'tel:+43676549863');
    })
});  