<!DOCTYPE html>
<html lang="en">
<head>
	<title>Car Purchasing</title>

	<link rel="stylesheet" type="text/css" href="style/reset.css">
	<link rel="stylesheet" type="text/css" href="style/responsive.css">
<style>
table, th, td,tr {
  padding: 15px;
  border: 1px solid black;
  text-align:center;
}
  table {
    width:50%; 
    margin-left:25%; 
    margin-right:25%;
  }
</style>
</head>
<body>
<section class="">
		<?php
			include 'header.php';
		?>
	</section>
	<section class="listings">
		<div class="wrapper">
				<h3 style="text-decoration: underline;">Your Orders</h3>
</section>
						<table align="center">
							<tr>
								<th>Car Booked</th>
								<th>Transaction ID</th>
								<th>Quantity</th>
								<th>Price</th>
								<th>Delivery Date</th>
							</tr>
							<?php
								session_start();
								include 'connection.php';
								$cid=$_SESSION['cid'];
								$select = "SELECT cu.Name,cu.Phone_number,ca.Car_name,pu.Transaction_id,sa.Quantity,sa.Price,pu.Supplier_Delivery_Date from cars ca,customers cu,purchase_order pu,sales_order sa where ca.Car_id=sa.Car_id and cu.Customer_id=sa.Customer_id and sa.Order_No=pu.Order_no and cu.Customer_id='$cid' ";
								$result = $conn->query($select);
								while($row = $result->fetch_assoc()){
							?>
							<tr>
								<td><?php echo $row['Car_name'] ?></td>
								<td><?php echo $row['Transaction_id'] ?></td>
								<td><?php echo $row['Quantity'] ?></td>
								<td>Rs.<?php echo $row['Price'] ?></td>
								<td><?php echo $row['Supplier_Delivery_Date'] ?></td>
							</tr>
						
							<?php
								}
							?>
						</table>
</div>
					<h2 align="center"><input type="submit" onclick="window.print()" align="center" value="Print Here" /></h2>
					
				</div>



