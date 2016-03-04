<?php

/*the name of the class that we are trying to build
$filename = $classname . '.php'; ==> the name of the class will be the name of the file
when it asks a class name, it will add .php to it and find the right file for it.

*/

function __autoload($classname) {
		$filename = $classname . '.php';
		echo "I'm trying to require $filename\n";
		require_once $filename;


}



?>