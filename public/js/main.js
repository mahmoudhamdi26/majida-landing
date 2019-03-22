/*global $ */
/*eslint-env browser*/
$(document).ready(function () {
    'use strict';
    $('.addjob').click(function (){
        swal({
            title: "تم إضافة الوظيفة بنجاح",
            icon: "success",
            button: "تم",
        });
    });
});

$('.dropdown-el').click(function(e) {
    e.preventDefault();
    e.stopPropagation();
    $(this).toggleClass('expanded');
    $('#'+$(e.target).attr('for')).prop('checked',true);
    
});
$(document).click(function() {
    $('.dropdown-el').removeClass('expanded');
});