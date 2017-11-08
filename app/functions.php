<?php 

// escape function
function e($input) {
	return htmlentities(htmlspecialchars(addslashes(stripslashes(strip_tags($input)))));
}


function getMailContent($path, array $vars = null) {

	$mailPath = glob('mails/'. $path . '.php');
	return file_get_contents($mailPath[0]);
}


function view($viewName)
{
	return file_get_contents(glob($viewName . '.*')[0]);
}

function errorException(array $data)
{
	return json_encode($data);
}


// write here your own function <3
