console.log('El custom js funciona')

jQuery(function ($) {
	$('.slick-footer-brands').slick({
        dots: true
    });
    $('.vs-slick').slick({
        dots: true,
        prevArrow: `<button class='nav-left'><i class="fas fa-angle-left"></i></button>`,
        nextArrow: `<button class='nav-right'><i class="fas fa-angle-right"></i></button>`
    });

    $('.dropdown-languages .single-language').addClass('dropdown-item');

});