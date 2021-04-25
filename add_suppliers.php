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
			include 'menu.php';
		?>
			<section class="listings">
		<div class="wrapper">
			
				<h3>ADD SUPPLIER</h3>
				<form method="post">
					<table>
						<tr>
							<td>Supplier ID:</td>
							<td><input type="text" name="id" required></td>
						</tr>
						<tr>
							<td>Supplier Phone Number:</td>
							<td><input type="text" name="phone" required></td>
						</tr>
						<tr>
							<td>Supplier Name:</td>
							<td><input type="text" name="name" required></td>
						</tr>
						<tr>
							<td>Supplier Address</td>
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
							$id = $_POST['id'];
							$phone = $_POST['phone'];
							$address = $_POST['address'];
							$qry = "INSERT INTO supplier (Supplier_id,Supplier_phone_number,Supplier_name,Supplier_address)
							VALUES('$id','$phone','$name','$address')";
							$result = $conn->query($qry);
							if($result == TRUE){
								echo "<script type = \"text/javascript\">
											alert(\"Successfully Added Supplier.\");
											window.location = (\"edit_suppliers.php\")
											</script>";
							} else{
								echo "<script type = \"text/javascript\">
											alert(\"Failed. Try Again\");
											window.location = (\"edit_suppliers.php\")
											</script>";
							}
						}
						
					  ?>
			</ul>
		</div>
	</section>	<!--  end listing section  -->