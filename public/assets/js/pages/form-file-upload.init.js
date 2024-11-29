/*
Template Name: SNTCSSC Website and Student Portal
Author: Subhankar Basak
Website: https://sntcssc.in/
Contact: ssp.sntcssc@gmail.com
File: Form file upload Js File
*/

// Dropzone
var dropzonePreviewNode = document.querySelector("#dropzone-preview-list");
dropzonePreviewNode.id = "";
if(dropzonePreviewNode){
    var previewTemplate = dropzonePreviewNode.parentNode.innerHTML;
    dropzonePreviewNode.parentNode.removeChild(dropzonePreviewNode);
    var dropzone = new Dropzone(".dropzone", {
        url: 'https://httpbin.org/post',
        method: "post",
        previewTemplate: previewTemplate,
        previewsContainer: "#dropzone-preview",
    });
}