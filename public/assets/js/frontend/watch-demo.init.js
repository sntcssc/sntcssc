/*
Template Name: SNTCSSC Website and Student Portal
Author: Subhankar Basak
Version: 1.2.0
Website: https://sntcssc.in/
Contact: ssp.sntcssc@gmail.com
File: watch demo init Js File
*/


var swiper = new Swiper(".feedback-slider", {
    spaceBetween: 24,
    loop: true,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    breakpoints: {
        768: {
            slidesPerView: 2,
        },
        1024: {
            slidesPerView: 3,
        },
        1500: {
            slidesPerView: 5,
        },
    },
});