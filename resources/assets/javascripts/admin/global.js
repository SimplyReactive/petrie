/*!
 * Javascript that is global to the project
 */

$(document).ready(function(){
    // Enable the menu
    $('#main-menu').metisMenu({
	    toggle: false
    });
    $(window).bind("load resize", function () {
        if ($(this).width() < 768)
            $('div.sidebar-collapse').addClass('collapse')
        else
            $('div.sidebar-collapse').removeClass('collapse')
    });

    // Enable dropdowns
    $(".dropdown-button").dropdown();
    $(".dropdown-toggle").dropdown();

    // Enable editable elements
    $.fn.editable.defaults.mode = 'popup';
    $(".xeditable").editable();
    $(".xeditable-required").editable({
        validate: function(value) {
            if($.trim(value) == '') return 'This field is required';
        }
    });
});