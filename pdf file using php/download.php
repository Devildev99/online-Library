<?php
include "db.php";
if (isset($_GET['pdf'])) {
	$pdf = $_GET['pdf'];
	$res = mysqli_query("SELECT pdf FROM pdf_file");
	header('Content-Type: application/octet-stream');
	header('Content-Disposition: attachment; filename="'.basename($pdf).'"');
	header('Content-Length: '.filesize($pdf));
	readfile($pdf);
}

?>