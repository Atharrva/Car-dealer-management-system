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
			$sel= "SELECT cu.Name,pu.Supplier_id,cu.Phone_number,ca.Car_name,pu.Transaction_id,sa.Quantity,sa.Price,pu.Supplier_Delivery_Date,sa.Order_No from cars ca,customers cu,purchase_order pu,sales_order sa where ca.Car_id=sa.Car_id and cu.Customer_id=sa.Customer_id and sa.Order_No=pu.Order_No and sa.Order_No= '$_GET[id]'";
			$rs = $conn->query($sel);
			while($rws = $rs->fetch_assoc()){
			$name = $rws['Name'];	
			$phone = $rws['Phone_number'];
			$car_name= $rws['Car_name'];
			$Transaction = $rws['Transaction_id'];
			$quantity = $rws['Quantity'];
			$price = $rws['Price'];
			$supplier=$rws['Supplier_id'];
			$p=$price/$quantity;
			$date= $rws['Supplier_Delivery_Date'];
			}
		?>
		<section class="listings">
			<div class="wrapper">
				<h3>Update Details Here</h3>
				<form method="post">
					<table>
						<tr>
							<td>Name:</td>
							<td><?php echo $name;?></td>
						</tr>
						<tr>
							<td>Phone Number:</td>
							<td><?php echo $phone;?></td>
						</tr>
						<tr>
							<td>Car Name:</td>
							<td><?php echo $car_name;?></td>
						</tr>
						<tr>
							<td>Transaction ID:</td>
							<td><?php echo $Transaction;?></td>
						</tr>
						<tr>
							<td>Quantity:</td>
							<td><input type="text" name="quantity" required value="<?php echo $quantity;?>"></td>
						</tr>
						<tr>
							<td>Price</td>
							<td><?php echo $price;?></td>
						</tr>
						<tr>
							<td>Delivery Date:</td>
							<td><input type="text" name="ddate" required value="<?php echo $date;?>"></td>
						</tr>
						<tr>
							<td>Supplier ID:</td>
							<td><input type="text" name="supplier" required value="<?php echo $supplier;?>"></td>
						</tr>
						<tr>
							<td colspan="2" style="text-align:right"><input type="submit" name="save" value="Submit Details"></td>
						</tr>
					</table>
				</form>
				<?php
					if(isset($_POST['save'])){
						$quantitya = $_POST['quantity'];
						$pricea=$p*$quantitya;
						$datea = $_POST['ddate'];
						$suppliera=$_POST['supplier'];
						$qry = "UPDATE sales_order SET Quantity='$quantitya',Price='$pricea' WHERE Order_No='$_GET[id]'";
						$result_1 = $conn->query($qry);
						$mu = "UPDATE Purchase_order SET Supplier_Delivery_Date='$datea',Supplier_id='$suppliera' WHERE Order_No='$_GET[id]'";
						$result_2 = $conn->query($mu);
						if($result_1 == TRUE and $result_2 == TRUE){
							echo "<script type = \"text/javascript\">
										alert(\"Successfully Update\");
										window.location = (\"admin.php\")
										</script>";
						} 
						else{
							echo "<script type = \"text/javascript\">
										alert(\"Updation Failed. Try Again\");
										window.location = (\"admin.php\")
										</script>";
						}
					}
						
				 ?>
			</div>
		</section>
	</section>
</body>
</html>