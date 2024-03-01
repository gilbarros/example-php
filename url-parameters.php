<?php
// /////////////////////////
// example of how to get parameters from the URL (AKA query string) in PHP
// Gil Barros <gil.barros@formato.com.br>, Feb/2024
// /////////////////////////

$json = file_get_contents('data.json'); // get the external file
$array = json_decode($json, true); // transform JSON format into an Array in PHP

$id = $_GET["id"]; // getting the ID from the URL

$next = $id >= 2 ? 0 : $id+1; // for navigation to next and previous
$prev = $id <= 0 ? 2 : $id-1; // for navigation to next and previous

############################
?>
<!DOCTYPE html>
<html>
<head><title>PHP example of URL parameters.</title></head>
<body style="font-family:sans-serif">
	<h3>The characteristics of the <?= $array["trees"][$id]["name"] ?>.</h3>
	<p>The predominant color in the <?= $array["trees"][$id]["name"] ?> is
		<?= $array["trees"][$id]["color"] ?>, and the shape of the leaves are
		<?= $array["trees"][$id]["leaf"] ?>.</p>
	<p><a href="url-parameters.php?id=<?= $prev ?>">Previous tree</a> --
	<a href="url-parameters.php?id=<?= $next ?>">Next tree</a></p>
	<div><pre><?php // for debugging /////////////////////////
//		var_dump($_GET); // uncomment this if needed for debugging
//		var_dump($id); // uncomment this if needed for debugging
//		var_dump($json); // uncomment this if needed for debugging
//		var_dump($array); // uncomment this if needed for debugging
// you can also use the terminal with the commands:
// tail -F /var/log/apache2/error.log
// tail -F /var/log/apache2/access.log
	?></pre></div>
</body>
</html>
