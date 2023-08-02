
<!DOCTYPE html>
<html>
<head>
	<title>NGP Online Library</title>
	<meta charset="utf-8" name="viewport" content="width=device-width,intial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/csse.css">
  	
</head>
<body  background="image/img10.jpg" style="background-repeat: no-repeat;height: 100vh; background-size: 100% 100%;">
	<header>
	<div class="main">
		<div class="logo">
			<img src="image/img2.jpeg">
		</div>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		
		
			<ul class="nav navbar-nav navbar-right">
			<li class="nav-item">
					<b><a class="nav-link" href="home.php">HOME</a>
				</li>
				<li class="nav-item">
					<b><a class="nav-link" href="index.php">ADMIN LOGIN</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="index.php">STUDENT LOGIN</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="index.php">REGISTRATION</a>
				</li>
			</ul>
		</div>
	</nav><br>
	<span><marquee>This is NGP E-Library. Library opens at 10:00 AM and close at 4:00 PM</marquee></span><br><br>
	<?php

$ids = $_GET['id'];
$showquery = "select * from users where id={$ids}";
$showdata = mysqli_query($connection,$showquery);
$arrdata = mysqli_fetch_array($showdata);



	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"lms");
	$query = "insert into users values(null,'$_POST[name]','$_POST[email]','$_POST[password]',$_POST[mobile],'$_POST[address]')";
	$query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
	alert("Updation")
	window.location.href = "signup.php";
</script>
	
		<div class="container" id="main_content">
			<br><center><h1>Student Registration Form</h1></center>
			<form action="register.php" method="post">
				<div class="box">
					<label for="name">Full Name:</label>
					<input type="text" name="name" value="<?php echo $arrdata['name']; ?>" class="form-control"  required>
				</div>
				<div class="box">
					<label for="name">Email ID:</label>
					<input type="email" name="email" class="form-control" value="<?php echo $arrdata['email']; ?>" required>
				</div>
				<div class="box">
					<label for="name">Password:</label>
					<input type="password" name="password" class="form-control" required>
				</div>
				<div class="box">
					<label for="name">Mobile Number:</label>
					<input type="text" name="mobile" class="form-control" required>
				</div>
				<div class="box">
					<label for="name">Address:</label>
					<input type="text" name="address" class="form-control" required>
				</div>
				</div>
				<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><center><button type="submit" class="btn btn-primary">Register</button></center>
			</form>
	</div>
	</div>
</header>
</body>
</html>