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
			$sel= "SELECT * from cars where Car_id= '$_GET[id]'";
			$rs = $conn->query($sel);
			while($rws = $rs->fetch_assoc()){
			$id = $rws['Car_id'];	
			$car_name= $rws['Car_name'];
			$image= $rws['Image'];
			$price = $rws['Price'];
			}
		?>
		<section class="listings">
		<div class="wrapper">
			
				<h3>Update Details Here</h3>
				<form method="post">
					<table>
						<tr>
							<td>CAR ID:</td>
							<td><input type="text" name="id" required value="<?php echo $id;?>"></td>
						</tr>
						<tr>
							<td>Car Name:</td>
							<td><input type="text" name="name" required value="<?php echo $car_name;?>"></td>
						</tr>
						<tr>
							<td>Image:</td>
							<td><input type="text" name="image" required value="<?php echo $image;?>"></td>
						</tr>
						<tr>
							<td>Price</td>
							<td><input type="text" name="price" required value="<?php echo $price;?>"></td>
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
							$imagea = $_POST['image'];
							$pricea = $_POST['price'];
							$qry = "UPDATE cars SET Car_id='$ida',Car_name='$namea',Image='$imagea',Price='$pricea' WHERE Car_id='$_GET[id]'";
							$result = $conn->query($qry);
							if($result == TRUE){
								echo "<script type = \"text/javascript\">
											alert(\"Successfully Update\");
											window.location = (\"edit_cars.php\")
											</script>";
							} else{
								echo "<script type = \"text/javascript\">
											alert(\"Updation Failed. Try Again\");
											window.location = (\"edit_cars.php\")
											</script>";
							}
						}
						
					  ?>
		</div>
		</section>
</section>
</body>
</html>