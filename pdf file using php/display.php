<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>NGP Online Library</title>
	<style>
		.btn-btn-primary{
margin-left: 50%;
transform: translateX(-50%);
width: 120px;
height: 30px;
border: none;
outline: none;
background: green;
cursor: pointer;
font-size: 14px;
text-transform: uppercase;
color: white;
border-radius: 4px;
transition: .3s;
}
.btn-btn-info{
margin-left: 50%;
transform: translateX(-50%);
width: 50px;
height: 30px;
border: none;
outline: none;
background: blue;
cursor: pointer;
font-size: 14px;
text-transform: uppercase;
color: white;
border-radius: 4px;
transition: .3s;
}






	</style>
	


	
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="links.php">
</head>
<body>

	<input type="text" name="myInput" placeholder="Search" onkeyup="notice()">
<div class="main-div">
	<h1>NOTICE BOARD</h1>
	<div class="center-div">
		<div class="table-responsive">
			<table>
				<thead>
					<tr>
						
						<th><b>notice</th>
						<th><b>message</th>
						<th><b>sem</th>
						<th><b>year</th>
						<th><b>operation</th>
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
							
						<a href="download.php?pdf=<?php echo $res['pdf']; ?>"><button class="btn-btn-primary" type="button">DOWNLOAD</button></a><br><br>
							<a href="display_pdf.php"><button class="btn-btn-info">READ</button></a>
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
<script>
	const notice = () =>{
		let filter = document.getElementById('myInput').value.toUpperCase();
		let th = document.getElementsById('th');
		let td = th.getElementsByTagName('td');
		for(var i=0; i<td.length; i++){
			let a= td[i].getElementsByTagName('a')[0];
			let textValue= a.textContent || a.innerHTML;
			if(textValue.toUpperCase().indexOf(filter) > -1)
				td[i].style.display = '';
		}else{
			td[i].style.display = 'none';
		} 
	}
</script>
</body>
</html>