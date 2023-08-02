<?php
	session_unset();
	session_destroy();
	header("Location:index.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>NGP Online Library</title>
</head>
<body>
<li class="nav-item"><a class="nav-link" href="index.php">Logout</a></li>
</body>
</html>