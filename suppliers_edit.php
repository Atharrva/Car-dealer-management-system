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
			include 'connection.php';
			$sel= "SELECT * from supplier where Supplier_id= '$_GET[id]'";
			$rs = $conn->query($sel);
			while($rws = $rs->fetch_assoc()){
			$id = $rws['Supplier_id'];	
			$name= $rws['Supplier_name'];
			$phone= $rws['Supplier_phone_number'];
			$address = $rws['Supplier_address'];
			}
		?>
			<section class="listings">
		<div class="wrapper">
			
				<h3>Update Details Here</h3>
				<form method="post">
					<table>
						<tr>
							<td>Supplier ID:</td>
							<td><input type="text" name="id" required value="<?php echo $id;?>"></td>
						</tr>
						<tr>
							<td>Phone Number:</td>
							<td><input type="text" name="phone" required value="<?php echo $phone;?>"></td>
						</tr>
						<tr>
							<td>Supplier Name:</td>
							<td><input type="text" name="name" required value="<?php echo $name;?>"></td>
						</tr>
						<tr>
							<td>Address</td>
							<td><input type="text" name="address" required value="<?php echo $address;?>"></td>
						</tr>
						<tr>
							<td colspan="2" style="text-align:right"><input type="submit" name="save" value="Submit Details"></td>
						</tr>
					</table>
				</form>
				<?php
						if(isset($_POST['save'])){
							$ida = $_POST['id'];
							$namea = $_POST['name'];
							$phonea = $_POST['phone'];
							$addressa = $_POST['address'];
							$qry = "UPDATE supplier SET Supplier_id='$ida',Supplier_phone_number='$phonea',Supplier_name='$namea',Supplier_address='$addressa' WHERE Supplier_id='$_GET[id]'";
							$result = $conn->query($qry);
							if($result == TRUE){
								echo "<script type = \"text/javascript\">
											alert(\"Successfully Update\");
											window.location = (\"edit_suppliers.php\")
											</script>";
							} else{
								echo "<script type = \"text/javascript\">
											alert(\"Updation Failed. Try Again\");
											window.location = (\"edit_suppliers.php\")
											</script>";
							}
						}
						
					  ?>
		</div>
		</section>
</section>
</body>
</html>