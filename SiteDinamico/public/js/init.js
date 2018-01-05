$(function () {
    $(".button-collapse").sideNav();
    $('.slider').slider({full_width: true});
    $('select').material_select();
});

function sliderPrev() {
    var slider = $('.slider');
    slider.slider('pause');
    slider.slider('prev');
}

function sliderNext() {
    var slider = $('.slider');
    slider.slider('pause');
    slider.slider('next');
}