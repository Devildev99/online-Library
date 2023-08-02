<?php

include 'db.php';
$pdf = $_GET['pdf'];
$deletequery =" DELETE pdf from pdf_file WHERE pdf=$pdf";
$query = mysqli_query($con,$deletequery);
if ($query) {
	?>
	<script>
		alert("DELETED SUCCESSFULLY")
		
	</script>
	<?php
}else{
	?>
	<script>
		alert("NOT DELETED")
		
	</script>
	<?php
}

header('location:dis.php');







?>