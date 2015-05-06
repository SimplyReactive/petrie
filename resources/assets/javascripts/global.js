/*!
 * Javascript that is global to the project
 */

$(document).ready(function () {
	// Enable dropdowns
	$(".dropdown-button").dropdown();
	$(".dropdown-toggle").dropdown();

	// Enable editable elements
	$.fn.editable.defaults.mode = 'popup';
	$(".xeditable").editable();
	$(".xeditable-required").editable({
		validate: function (value) {
			if ($.trim(value) === '') {
				return 'This field is required';
			}
		}
	});
});