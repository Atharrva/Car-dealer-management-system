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
			
				<h3>ADD CAR</h3>
				<form method="post">
					<table>
						<tr>
							<td>ID:</td>
							<td><input type="text" name="id" required></td>
						</tr>
						<tr>
							<td>Car Name:</td>
							<td><input type="text" name="name" required></td>
						</tr>
						<tr>
							<td>Image:</td>
							<td><input type="text" name="image" required></td>
						</tr>
						<tr>
							<td>Price</td>
							<td><input type="text" name="price" required></td>
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
							$image = $_POST['image'];
							$price = $_POST['price'];
							$qry = "INSERT INTO cars (Car_id,Car_name,Image,Price)
							VALUES('$id','$name','$image','$price')";
							$result = $conn->query($qry);
							if($result == TRUE){
								echo "<script type = \"text/javascript\">
											alert(\"Successfully Added Car.\");
											window.location = (\"edit_cars.php\")
											</script>";
							} else{
								echo "<script type = \"text/javascript\">
											alert(\"Failed. Try Again\");
											window.location = (\"edit_cars.php\")
											</script>";
							}
						}
						
					  ?>
			</ul>
		</div>
	</section>	<!--  end listing section  -->