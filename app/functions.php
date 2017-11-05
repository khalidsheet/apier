<?php 

// escape function
function e($input) {
	return htmlentities(htmlspecialchars(addslashes(stripslashes(strip_tags($input)))));
}


function getMailContent($path) {
	$mailPath = glob('mails/'. $path . '.php');
	return file_get_contents($mailPath[0]);
}


function view($viewName)
{
	return file_get_contents(glob($viewName . '.*')[0]);
}


// write here your own function <3
