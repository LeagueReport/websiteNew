<!DOCTYPE html>

<html>

<head>
    <title> League Report </title>
</head>

<body>

<?php
foreach ($res['data'] as $obj) {
	
	try { $obj = $obj['name']; ?> {{ $obj }} <br> <?php }
	catch (Exception $e) { }
}

?>

</body>

</html>
