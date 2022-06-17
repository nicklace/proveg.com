/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!******************************!*\
  !*** ./resources/js/main.js ***!
  \******************************/
jQuery(document).ready(function () {
  /* Menu */
  $('.navbar').on('shown.bs.collapse', function () {
    $('body').addClass('open');
  });
  $('.navbar').on('hidden.bs.collapse', function () {
    $('body').removeClass('open');
  });
  var $imgSrc;
  $('.img-m').click(function () {
    $imgSrc = $(this).data("src");
    console.log($imgSrc);
  }); // when the modal is opened autoplay it  

  $('#mdl').on('shown.bs.modal', function (e) {
    $("#img-s").attr('src', $imgSrc);
  });
});
/******************** */
/******/ })()
;