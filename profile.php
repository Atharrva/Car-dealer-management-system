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
			include 'connection.php';
			$user_id = $_SESSION['cid'];
			$qy = "SELECT * FROM customers WHERE Customer_id='$user_id'";
			$log = $conn->query($qy);
			$num = $log->num_rows;
			$row = $log->fetch_assoc();
			if($num > 0){
			$name = $row['Name'];	
			$address = $row['Address'];
			$phone = $row['Phone_number'];
			$email = $row['Email_Address'];
			$password = $row['Password'];
			$gender= $row['Gender'];
			}
		?>
		<section class="listings">
		<div class="wrapper">
			
				<h3>Update Your Details Here</h3>
				<form method="post">
					<table>
						<tr>
							<td>Name:</td>
							<td><input type="text" name="name" required value="<?php echo $name;?>"></td>
						</tr>
						<tr>
							<td>Phone Number:</td>
							<td><input type="text" name="phone" required value="<?php echo $phone;?>"></td>
						</tr>
						<tr>
							<td>Email Address:</td>
							<td><input type="email" name="email" required value="<?php echo $email;?>"></td>
						</tr>
						<tr>
							<td>Password</td>
							<td><input type="password" name="password" required value="<?php echo $password;?>"></td>
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
							<td><input type="text" name="address" required value="<?php echo $address;?>"></td>
						</tr>
						<tr>
							<td colspan="2" style="text-align:right"><input type="submit" name="save" value="Submit Details"></td>
						</tr>
					</table>
				</form>
				<?php
						if(isset($_POST['save'])){
							$namea = $_POST['name'];
							$passworda = $_POST['password'];
							$gendera = $_POST['gender'];
							$emaila = $_POST['email'];
							$phonea = $_POST['phone'];
							$addressa = $_POST['address'];
							
							$qry = "UPDATE customers SET 
							Password='$passworda',
							Phone_number='$phonea',
							Name='$namea',
							Address='$addressa',
							Email_Address='$emaila',
							Gender='$gendera' WHERE Customer_id='$user_id'";
							$result = $conn->query($qry);
							if($result == TRUE){
								echo "<script type = \"text/javascript\">
											alert(\"Successfully Update\");
											window.location = (\"index.php\")
											</script>";
							} else{
								echo "<script type = \"text/javascript\">
											alert(\"Updation Failed. Try Again\");
											window.location = (\"index.php\")
											</script>";
							}
						}
						
					  ?>
			</div>
			</section>
</section>
</body>
</html>