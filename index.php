<?php
// /////////////////////////
// some examples showing how to integrate PHP into HTML code
// Gil Barros <gil.barros@formato.com.br>, Feb/2024
// /////////////////////////

$text1 = 'This text comes from a variable.';
$text2 = 'this text';
?>

<!DOCTYPE html>
<html>
<head><title>Page Title</title></head>
<body style="font-family:sans-serif">
	<p><?= $text1 ?></p>
	<p><?= 'Now '.$text2.' is connected with a dot (.), inside the PHP code.' ?></p>
	<p>And <?= $text2 ?> is combined outside the PHP, in the HTML.</p>
</body>
</html>
