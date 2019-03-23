/*global $ */
/*eslint-env browser*/
$(document).ready(function () {
    'use strict';
    $('.custom-control .custom-control-label').click(function (){
       $(this).parent().toggleClass('active'); 
    });
    $('.custom-radio .custom-control-label').click(function (){
        $('.custom-radio').removeClass('active');
       $(this).parent().toggleClass('active'); 
      
    });
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