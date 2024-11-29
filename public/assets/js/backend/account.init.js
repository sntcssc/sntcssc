/*
Template Name: SNTCSSC Website and Student Portal
Author: Subhankar Basak
Website: https://sntcssc.in/
Contact: ssp.sntcssc@gmail.com
File: Account init js
*/

var swiper = new Swiper(".mySwiper", {
    loop: 'true',
    spaceBetween: 10,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
});

var removeBtns = document.getElementsByClassName("remove-item-btn");

Array.from(removeBtns).forEach(function (btn) {
    btn.addEventListener("click", function (e) {
        
        e.target.closest("tr").remove()
    });
});
