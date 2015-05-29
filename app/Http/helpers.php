<?php

/**
 * Handle messages stored in the session and print them out in a nice Bootstrap alert box
 *
 * @param $variable string The name of the variable stored in the session that we want to use
 * @param $title string An optional title for the alert
 * @param $class string The class of the alert (success, info, warning, or danger)
 * @param $dismiss boolean Whether or not the alert is dismissable
 *
 * @return string
 */
function handleMessage($variable="message", $title="Uh oh...", $class="danger", $dismiss=true) {
	$message = Session::get($variable);

	if(!empty($message))
	{
		$title = "<strong>$title</strong>";
		if($dismiss) $class .= " alert-dismissible";
		$alert = "<div class=\"alert alert-$class $dismiss\" role=\"alert\">";
		if($dismiss) $alert .= "<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>";
		$alert .= "$title $message </div>";
		return $alert;
	}
}