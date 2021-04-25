<!DOCTYPE html>
<html lang="en">
<head>
	<title>Car Purchasing</title>
	<link rel="stylesheet" type="text/css" href="style/reset.css">
	<link rel="stylesheet" type="text/css" href="style/responsive.css">
</head>
<body>
<section class="">
		<?php
			include 'header.php';
		?>

			<section class="caption">
				<h2 class="caption" style="text-align: center"></h2>
				<h3 class="properties" style="text-align: center"></h3>
			</section>
	</section>



	<section class="search">
		<div class="wrapper">
		<div id="fom">
			<form method="post">
			<h3 style="text-align:center; color: #000099; font-weight:bold; text-decoration:underline">Admin Login Area</h3>
				<table height="100" align="center">
					<tr>
						<td>Email Address:</td>
						<td><input type="text" name="uname" placeholder="Enter Username" required></td>
					</tr>
					<tr>
						<td>Password:</td>
						<td><input type="password" name="pass" placeholder="Enter Password" required></td>
					</tr>
					<tr>
						<td colspan="2" style="text-align:center"><input type="submit" name="login" value="Login Here"></td>
					</tr>
				</table>
			</form>
			<?php
				if(isset($_POST['login'])){
					include 'connection.php';
					
					$uname = $_POST['uname'];
					$pass = $_POST['pass'];
					
					$query = "SELECT * FROM admin WHERE username = '$uname' AND password = '$pass'";
					$rs = $conn->query($query);
					$num = $rs->num_rows;
					$rows = $rs->fetch_assoc();
					if($num > 0){
						session_start();
						$_SESSION['uname'] = $rows['username'];
						$_SESSION['pass'] = $rows['password'];
						echo "<script type = \"text/javascript\">
									alert(\"Login Successful.................\");
									window.location = (\"admin.php\")
									</script>";
					} else{
						echo "<script type = \"text/javascript\">
									alert(\"Login Failed. Try Again................\");
									window.location = (\"alogin.php\")
									</script>";
					}
				}
			?>
			</div>
			</div>
		</section>
</body>
</html>

