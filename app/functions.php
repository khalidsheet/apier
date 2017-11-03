<?php 

// escape function
function e($input) {
	return htmlentities(htmlspecialchars(addslashes(stripslashes(strip_tags($input)))));
}


// write here your own function <3
