<?php

// Tell the browser that this is CSS instead of HTML
header("Content-type: text/css");

// Get the color generating code
include_once("csscolor.php");

// Set the error handing for csscolor.
// If an error occurs, print the error
// within a CSS comment so we can see
// it in the CSS file.
PEAR::setErrorHandling(PEAR_ERROR_CALLBACK, 'errorHandler');
function errorHandler($err) {
    echo("/* ERROR " . $err->getMessage() . " */");
}

// Define a couple color palettes
$base = new CSS_Color('1F1F23');
$primary = new CSS_Color('0A0A0D');

// $base = new CSS_Color('F1D2B3');
// $primary = new CSS_Color('D22A00');

$secondary = new CSS_Color('ffffff');
// $accent = new CSS_Color('00EFCC');
// $highlight = new CSS_Color('31BB11');

// Trigger an error just to see what happens
// $trigger = new CSS_Color('');

?>
body {
	background: #<?= $base->bg['0'] ?>;
	color: #<?= $base->bg['+3'] ?>;
	/* color: #<?= $accent->bg['0'] ?>; */
}

h1 {  
  color: #<?= $secondary->bg['0'] ?>;  
}

a:active {  
	color: #<?= $highlight->bg['0'] ?>;  
}

.page-wrap {
	background: #<?= $primary->bg['0'] ?>;
}

.dot {
	background: #<?= $base->bg['0'] ?>;
}