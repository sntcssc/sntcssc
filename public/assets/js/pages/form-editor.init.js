/*
Template Name: SNTCSSC Website and Student Portal
Author: Subhankar Basak
Website: https://sntcssc.in/
Contact: ssp.sntcssc@gmail.com
File: Form editor Js File
*/

// ckeditor

var ckClassicEditor = document.querySelectorAll(".ckeditor-classic")
if (ckClassicEditor) {
    Array.from(ckClassicEditor).forEach(function () {
        ClassicEditor
            .create(document.querySelector('.ckeditor-classic'))
            .then(function (editor) {
                editor.ui.view.editable.element.style.height = '200px';
            })
            .catch(function (error) {
                console.error(error);
            });
    });
}