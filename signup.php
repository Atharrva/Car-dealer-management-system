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
		<section class="listings">
		<div class="wrapper">
			
				<h3>Signup Here</h3>
				<form method="post">
					<table>
						<tr>
							<td>Name:</td>
							<td><input type="text" name="name" required></td>
						</tr>
						<tr>
							<td>Phone Number:</td>
							<td><input type="text" name="phone" required></td>
						</tr>
						<tr>
							<td>Email Address:</td>
							<td><input type="email" name="email" required></td>
						</tr>
						<tr>
							<td>Password</td>
							<td><input type="password" name="password" required></td>
						</tr>
						<tr>
							<td>Gender:</td>
							<td>
								<select name="gender">
									<option> Male </option>
									<option> Female </option>
									<option> Other </option>
									<option> Prefer Not To Specify </option>
								</select>
							</td>
						</tr>
						<tr>
							<td>Address:</td>
							<td><input type="text" name="address" required></td>
						</tr>
						<tr>
							<td colspan="2" style="text-align:right"><input type="submit" name="save" value="Submit Details"></td>
						</tr>
					</table>
				</form>
				<?php
						if(isset($_POST['save'])){
							include 'connection.php';
							$name = $_POST['name'];
							$password = $_POST['password'];
							$gender = $_POST['gender'];
							$email = $_POST['email'];
							$phone = $_POST['phone'];
							$address = $_POST['address'];
							
							$qry = "INSERT INTO customers (Password,Phone_number,Name,Address,Email_Address,Gender)
							VALUES('$password','$phone','$name','$address','$email','$gender')";
							$result = $conn->query($qry);
							if($result == TRUE){
								echo "<script type = \"text/javascript\">
											alert(\"Successfully Registered.\");
											window.location = (\"login.php\")
											</script>";
							} else{
								echo "<script type = \"text/javascript\">
											alert(\"Registration Failed. Try Again\");
											window.location = (\"signup.php\")
											</script>";
							}
						}
						
					  ?>
			</ul>
		</div>
		</section>
</section>
</body>
</html>