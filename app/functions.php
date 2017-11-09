<?php 

// escape function
function e($input) {
	return htmlentities(htmlspecialchars(addslashes(stripslashes(strip_tags($input)))));
}



function getMailContent($path, $vars = []) {
	// make the template engine global
	global $twig;

	// render the page with variables
	return $twig->render($path . '.php', $vars);
}




function view($viewName) {
	return file_get_contents(glob($viewName . '.*')[0]);
}

function errorException(array $data)
{
	return json_encode($data);
}


// write here your own function <3
