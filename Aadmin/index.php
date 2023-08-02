<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>NGP Online Library</title>
	<link rel="stylesheet" type="text/css" href="../css/csse.css">
	<title>NGP Online Library</title>
	
</head>
<body background="../image/img10.jpg" style="background-repeat: no-repeat;height: 100vh; background-size: 100% 100%;">
	
	<header>
<div class="main">
		<div class="logo">
			<img src="../image/img2.jpeg">
		</div>
	<div class="main">
		
			
		</div>
		<ul class="nav navbar-nav navbar-right">
			<li class="nav-item">
					<b><a class="nav-link" href="../home.php">HOME</a>
				</li>
				<li class="nav-item">
					<b><a class="nav-link" href="../admin/index.php">ADMIN LOGIN</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="../index.php">STUDENT LOGIN</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="../signup.php">REGISTRATION</a>
				</li>
			</ul>
		</div>
		</div>
	</nav><br>
	<span><marquee>This is NGP E-Library. Library opens at 10:00 AM and close at 4:00 PM</marquee></span><br><br>
			
		<div class="container" id="main_content">
			<center><h1>Admin Login Form</h1></center>
			<form action="" method="post">
				<div class="box">
					<label for="name">Email ID:</label>
					<input type="text" name="email" class="form-control" placeholder="Emter your Email" required>
				</div>
				<div class="box">
					<label for="name">Password:</label>
					<input type="password" name="password" class="form-control" placeholder="Emter your Password" required>
				</div>
				<button type="submit" name="login" class="btn btn-primary">Login</button>
			</form>
             <?php
				session_start();
				if(isset($_POST['login'])){
					$connection = mysqli_connect("localhost","root","");
					$db = mysqli_select_db($connection,"lms");
					$query = "select * from admins where email = '$_POST[email]'";
					$query_run = mysqli_query($connection,$query);
					while($row = mysqli_fetch_assoc($query_run)){
						if($row['email'] == $_POST['email']){
							if($row['password'] == $_POST['password']){
								$_SESSION['name'] = $row['name'];
								$_SESSION['email'] = $row['email'];
								header("Location:admin_dashboard.php");
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
</header>
</body>
</html>