<!Doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>NGP Online Library</title>
    <style>
   .btn-btn-primary{
margin-left: 50%;
transform: translateX(-50%);
width: 70px;
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
  </head>
<body style="background-color: gray;">

<br><br><br> <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="card"><br>
            <div class="card-header bg-info">
              
              <center><h4 class="text-white" style="font-family: arial;">STUDY MATERIALS</h4></center>
            </div>
            <div class="card-body">
			<table class="table">
				<thead>
					<tr>
						<th><b>COVER</th>
						<th><b>BOOK</th>
						<th><b>AUTHOR</th>
						<th><b>SEMESTER</th>
						<th><b>YEAR</th>
							<th><b>READ</th>
				</tr>
				</thead>
				<tbody>
					<?php 

include 'code.php';
$selectquery = "SELECT * FROM user ";
$query = mysqli_query($conn,$selectquery);
$nums = mysqli_num_rows($query);

while ($res = mysqli_fetch_array($query)) {
	?>
	                   <tr>
						<td>
							<img src='$row[image]' width='80px' height='120px'>
						</td>
						<td><?php echo $res['book']; ?> </td>
						<td><?php echo $res['author']; ?> </td>
						<td><?php echo $res['sem']; ?> </td>
						<td><?php echo $res['year']; ?> </td>
						<td><div class="btn-group">
							<a href="#"><button class="btn-btn-primary">Delete</button></a>
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
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>