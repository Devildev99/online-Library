<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>NGP Online Library</title>
	<link rel="stylesheet" type="text/css" href="css/csse.css">
</head>
<body background="image/img10.jpg" style="background-repeat: no-repeat;height: 100vh; background-size: 100% 100%;">
	<header>
		<div class="main">
		<div class="logo">
			<img src="image/img2.jpeg">
		</div>
	<div class="main">
		
			
		</div>
		<ul>
			<li><b><a href="home.php">HOME</a></li>
			<li><b><a href="admin/index.php">ADMIN LOGIN</a></li>
			<li><a href="index.php">STUDENT LOGIN</a></li>
			<li><a href="signup.php">REGISTRATION</a></li>
			
			
		</ul>
		</div>
		</nav><br>
	<br><br><span><marquee>This is NGP E-Library. Library opens at 10:00 AM and close at 4:00 PM</marquee></span><br><br>
	
	<div class="container">
			<h1>Student Login Form</h1>
			<form action="" method="post">
				<div class="box">
					<label for="name">Email ID:</label>
					<i class="fa fa-envelope" area-hidden="true"></i>
					<input type="email" name="email" id="email" placeholder="Enter Your Email" class="form-control" required>
				</div>
				<div class="box">
					<label for="name">Password:</label>
					<i class="fa fa-key"></i>
					<input type="password" name="password" placeholder="Enter Your Password" class="form-control" required>
				</div>
				<button type="submit" name="login" class="btn btn-primary">Login</button>
			</div>
		</div>

		
			<?php
				session_start();
				if(isset($_POST['login'])){
					$connection = mysqli_connect("localhost","root","");
					$db = mysqli_select_db($connection,"lms");
					$query = "select * from users where email = '$_POST[email]'";
					$query_run = mysqli_query($connection,$query);
					while($row = mysqli_fetch_assoc($query_run)){
						if($row['email'] == $_POST['email']){
							if($row['password'] == $_POST['password']){
								$_SESSION['name'] = $row['name'];
								$_SESSION['email'] = $row['email'];
								$_SESSION['id'] = $row['id'];
								header("Location:user_dashboard.php");
							}
							else{
								?>
								<br><br><center><span class="alert-danger">Wrong Password</span></center>
								<?php
							}
						}
					}
				}
			?>
	</div>
	</div>
</form>
</div>
</header>
</body>
</html>