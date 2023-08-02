<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>NGP Online Library</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="links.php">
</head>
<body style="background-color: gray;">
<div class="main-div">
	<h1>NOTICE BOARD UPDATION</h1>
	<div class="center-div">
		<div class="table-responsive">
			<table>
				<thead>
					<tr>
						<th>notice</th>
						<th>message</th>
						<th>sem</th>
						<th>operation</th>
				</tr>
				</thead>
				<tbody>
					<?php 

include 'db.php';
$selectquery = " select * from pdf_file ";
$query = mysqli_query($conn,$selectquery);
$nums = mysqli_num_rows($query);

while ($res = mysqli_fetch_array($query)) {
	?>
	                   <tr>
						<td><?php echo $res['pdf']; ?></td>
						<td><?php echo $res['notes']; ?> </td>
						<td><?php echo $res['sem']; ?> </td>
						<td><?php echo $res['year']; ?> </td>
						<td><div class="btn-group">
							<a href="del.php?pdf=<?php echo $res['pdf']; ?>"><button type="button">DELETE</button></a><br>
							<a href="del.php?pdf=<?php echo $res['pdf']; ?>"><button type="button">UPDATE</button></a><br>
							
						</div></td>
					
					</tr>

           <?php
           }
           ?>
                        
				</tbody>
			</table>
			
		</div>
	</div>
	
</div>
</body>
</html>