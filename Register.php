<!DOCTYPE html>
<html lang="en">

<head>
	<link href="css/login.css" rel="stylesheet">
</head>

<body style="padding-top: 30px;">
	<form method="POST">
		<?php

		error_reporting(0);
		$con = mysqli_connect("localhost", "root", "", "resume");
		if (isset($_POST["ok"])) {
			$number = 1;
			$queryX = "select * from register";
			$res = mysqli_query($con, $queryX);
			while ($row = mysqli_fetch_array($res))

				if ($res) {
					if ($row['u_name']  == $_POST['username']) {
						echo "<script>alert('This User Name is allready existe. use anether one')</script>";
						$number = 1;
					} else {
						$number = 0;
					}
				}
		}
		if ($number != 1 && $_POST['name'] && $_POST['username']) {

			echo "<script>alert('inserted')</script>";
			$query = "insert into register(id,name,u_name,email,gender,mobile,password)values('NULL','" . $_POST['name'] . "','" . $_POST['username'] . "','" . $_POST['email'] . "','" . $_POST['gender'] . "','" . $_POST['mobile'] . "','" . $_POST['password'] . "')";

			$result = mysqli_query($con, $query);
			// if($result)
			// {
			// 	echo "<script>alert('inserted')</script>";
			// }
			// else{
			// 	echo "<script>alert('something went wrong')</script>";
			// }

			$queryA = "insert into resume_data(full_name,email,phone,user_id)values('" . $_POST['name'] . "','" . $_POST['email'] . "','" . $_POST['mobile'] . "','" . $_POST['username'] . "')";
		


			$resultA = mysqli_query($con, $queryA);
			if ($resultA) {
				echo "<script>window.location='login.php'</script>";
				// echo "<script>alert('inserted')</script>";
			} else {
				echo "<script>alert('something went wrong')</script>";
			}




			$queryB = "update resume_data set image='uploads/example.png',full_name='" . $_POST['name'] . "',expert='Web Developer',about='Explain Your self in Sort',lA='Gujarati',lB='Hindi',lC='English',address='Rajkot, India',phone='" . $_POST['mobile'] . "',email='" . $_POST['email'] . "',eduA='Enducation ONE',yearA='2020 - 2023',eduB='Education TWO',yearB='2020 - 2023',expeyearA='2020',expetitleA='Software Developer',expeA='Explain Sort',expeyearB='2020', expetitleB='Software Developer',expeB='Explain Sort',skillA='HTML',skillB='CSS',skillC='JS',skillD='PHP',skillE='SQL' where user_id='" . $_POST['username'] . "'";
			$resultB = mysqli_query($con, $queryB);
			if ($resultB) {
				echo "<script>window.location='login.php'</script>";
				// echo "<script>alert('inserted')</script>";
			} else {
				echo "<script>alert('something went wrong')</script>";
			}
		}
		echo $queryA;
		?>
		<div class="container">
			<div class="screen" style="height: 100%;width:360px;padding:0 15px 15px 18px;">
				<div class="screen__content">
					<form class="login" style="width: 95%; padding-top: 40px;">
						<h1 style="padding-bottom:20px;padding-top: 20px;">
							<center>Register</center>
						</h1>
						<div class="login__field" style="padding-left:20px">
							<i class="login__icon fas fa-user"></i>
							<input type="text" class="login__input" placeholder="Name" name="name" required>
						</div>
						<div class="login__field" style="padding-left:20px">
							<i class="login__icon fas fa-lock"></i>
							<input type="text" class="login__input" placeholder="User name" name="username" required>
						</div>
						<div class="login__field" style="padding-left:20px">
							<i class="login__icon fas fa-lock"></i>
							<input type="text" class="login__input" placeholder="Email" name="email" required>
						</div>
						<div class="login__field" style="padding-left:20px">
							<i class="login__icon fas fa-lock"></i>
							<input type="text" class="login__input" placeholder="Gender" name="gender" required>
						</div>
						<div class="login__field" style="padding-left:20px">
							<i class="login__icon fas fa-lock"></i>
							<input type="text" class="login__input" placeholder="Mobile Number" name="mobile" required>
						</div>
						<div class="login__field" style="padding-left:20px">
							<i class="login__icon fas fa-lock"></i>
							<input type="password" class="login__input" placeholder="password" name="password" required>
						</div>
						<a href="index.php">

							<button class="button login__submit" name="ok">
								<span class="button__text"><a class="button login__submitx">
										<center>Register</center>
									</a></span>
								<i class="button__icon fas fa-chevron-right"></i>
							</button>
						</a>
					</form>

					<p style="padding:20px 0px 5px 62%;"><a href="login.php" style="text-decoration: none; color:black;">back to home</a></p>


				</div>
				<div class="screen__background">
					<span class="screen__background__shape screen__background__shape4"></span>
					<span class="screen__background__shape screen__background__shape3"></span>
					<span class="screen__background__shape screen__background__shape2"></span>
					<span class="screen__background__shape screen__background__shape1"></span>
				</div>
			</div>
		</div>
	</form>
</body>

</html>