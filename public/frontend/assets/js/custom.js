"use strict";

$(document).ready(function () {
  $(".carousel").carousel({
    interval: 3000
  });
  $(".slider-for").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: ".slider-nav"
  });
  $(".slider-nav").slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    asNavFor: ".slider-for",
    dots: true,
    centerMode: true,
    focusOnSelect: true
  });
  $(".slick-track").children().imagezoomsl({
    zoomrange: [2, 3]
  }); // Data Picker Initialization
  // $('#datepicker').datepicker({
  //     uiLibrary: 'bootstrap4'
  // });
});