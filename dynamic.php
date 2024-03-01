<?php
// /////////////////////////
// example of how to use content from an external JSON file in PHP
// Gil Barros <gil.barros@formato.com.br>, Feb/2024
// /////////////////////////

$json = file_get_contents('data.json'); // get the external file
$array = json_decode($json, true); // transform JSON format into an Array in PHP

############################
?>
<!DOCTYPE html>
<html>
<head><title>PHP example of dynamic output.</title></head>
<body style="font-family:sans-serif">
	<h3>Some trees and their characteristics.</h3>
	<h4><?= $array["trees"][0]["name"] ?></h4>
	<p>The predominant color in this tree is
		<?= $array["trees"][0]["color"] ?>, and the shape of the leaves are
		<?= $array["trees"][0]["leaf"] ?>.</p>
	<h4><?= $array["trees"][1]["name"] ?></h4>
	<p>The predominant color in this tree is
		<?= $array["trees"][1]["color"] ?>, and the shape of the leaves are
		<?= $array["trees"][1]["leaf"] ?>.</p>
	<h4><?= $array["trees"][2]["name"] ?></h4>
	<p>The predominant color in this tree is
		<?= $array["trees"][2]["color"] ?>, and the shape of the leaves are
		<?= $array["trees"][2]["leaf"] ?>.</p>
	<div><pre><?php // for debugging /////////////////////////
//		var_dump($json); // uncomment this if needed for debugging
//		var_dump($array); // uncomment this if needed for debugging
// you can also use the terminal with the commands:
// tail -F /var/log/apache2/error.log
// tail -F /var/log/apache2/access.log
	?></pre></div>
</body>
</html>

