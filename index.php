<?php

require_once "vendor/autoload.php";

$controller = new \App\Controllers\HomeController();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	echo $controller->store();	
} else {
	?>
	//@TODO: $controller->getForm()
	<form method="POST" action="/">
		<input type="text" name="test">
		<input type="submit" name="">
	</form>
	<?php
}
