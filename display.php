

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>NGP Online Library</title>
	<style>
   .btn-btn-primary{
margin-left: 50%;
transform: translateX(-50%);
width: 100px;
height: 30px;
border: none;
outline: none;
background: indianred;
cursor: pointer;
font-size: 14px;
text-transform: uppercase;
color: white;
border-radius: 4px;
transition: .3s;
}
    </style>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="links.php">
</head>
<body>
<div class="main-div">
	<h1>LIST OF STUDENT</h1>
	<div class="center-div">
		<div class="table-responsive">
			<table>
				<thead>
					<tr>
						<th>id</th>
						<th>name</th>
						<th>email</th>
						<th>password</th>
						<th>mobile</th>
						<th>address</th>
						<th>operation</th>
					
						
					</tr>
				</thead>
				<tbody>
					<?php 

include 'connection.php';
$selectquery = " select * from users ";
$query = mysqli_query($con,$selectquery);
$nums = mysqli_num_rows($query);

while ($res = mysqli_fetch_array($query)) {
	?>
	                   <tr>
						<td><?php echo $res['id']; ?></td>
						<td><?php echo $res['name']; ?></td>
						<td><span class="email-style"><?php echo $res['email']; ?></span></td>
						<td><?php echo $res['password']; ?></td>
						<td><?php echo $res['mobile']; ?></td>
						<td><?php echo $res['address']; ?></td>
						<td><div class="btn-group">
							
							<a href="delete.php?id=<?php echo $res['id']; ?>"><button class="btn-btn-primary" type="button">Delete</button></a>
							
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