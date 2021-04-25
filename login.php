<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="style/reset.css">
	<link rel="stylesheet" type="text/css" href="style/responsive.css">


</head>
<body>
<section class="">
		<?php
			include 'header.php';
		?>
</section>
	<section class="search">
		<div class="wrapper">
		<div id="fom">
			<nav>
			<form method="post">
			<h3 style="text-align:center; color: #000099; font-weight:bold; text-decoration:underline">Login Area</h3>
				<table height="100" align="center">
					<tr>
						<td>Email Address:</td>
						<td><input type="email" name="email" placeholder="Enter Email Address" required></td>
					</tr>
					<tr>
						<td>Password:</td>
						<td><input type="password" name="pass" placeholder="Enter Password" required></td>
					</tr>
					<tr>
						<td><input type="submit" name="log" value="Login Here"></td>
						<td style="text-align:right;"><a href="signup.php">Signup Here</a></td>
					</tr>
				</table>
			</form>
			</nav>
			<?php
				if(isset($_POST['log'])){
					include 'connection.php';
					
					$uname = $_POST['email'];
					$pass = $_POST['pass'];
					
					$qy = "SELECT * FROM customers WHERE Email_Address = '$uname' AND Password= '$pass'";
					$log = $conn->query($qy);
					$num = $log->num_rows;
					$row = $log->fetch_assoc();
					if($num > 0){
						session_start();
						$_SESSION['email'] = $row['Email_Address'];
						$_SESSION['pass'] = $row['Password'];
						$_SESSION['cid']=$row['Customer_id'];
						echo "<script type = \"text/javascript\">
									alert(\"Login Successful.\");
									window.location = (\"index.php\")
									</script>";
					} else{
						echo "<script type = \"text/javascript\">
									alert(\"Login Failed. Try Again.\");
									window.location = (\"login.php\")
									</script>";
					}
				}
			?>
		</div>
		</div>
		</section>
</body>
</html>