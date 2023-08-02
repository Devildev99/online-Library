<?php

include 'connection.php';
$id = $_GET['id'];
$deletequery =" delete from users where id=$id";
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

header('location:display.php');







?>