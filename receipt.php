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
    width:30%; 
    margin-left:35%; 
    margin-right:35%;
	
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
				<h3 style="text-decoration: underline;">Your Order Has Been Placed</h3>
</section>
							<?php
								session_start();
								include 'connection.php';
								$oid=$_SESSION['oid'];
								$select = "SELECT cu.Name,cu.Phone_number,ca.Car_name,pu.Transaction_id,sa.Quantity,sa.Price,pu.Supplier_Delivery_Date from cars ca,customers cu,purchase_order pu,sales_order sa where ca.Car_id=sa.Car_id and cu.Customer_id=sa.Customer_id and sa.Order_No=pu.Order_no and sa.Order_No='$oid' ";
								$result = $conn->query($select);
								while($row = $result->fetch_assoc()){
							?>

						<table>
							<tr>
								<th>Name</th>
								<td><?php echo $row['Name'] ?></td>
							</tr>
							<tr>
								<th>Phone</th>
								<td><?php echo $row['Phone_number'] ?></td>
							</tr>
							<tr>
								<th>Car Booked</th>
								<td><?php echo $row['Car_name'] ?></td>
							</tr>
							<tr>
								<th>Transaction ID</th>
								<td><?php echo $row['Transaction_id'] ?></td>
							</tr>
							<tr>
								<th>Quantity</th>
								<td><?php echo $row['Quantity'] ?></td>
							</tr>
							<tr>
								<th>Price</th>
								<td>Rs.<?php echo $row['Price'] ?></td>
							</tr>
							<tr>
								<th>Delivery Date</th>
								<td><?php echo $row['Supplier_Delivery_Date'] ?></td>
							</tr>
							<?php
								}
							?>
						</table>
</div>
					<h2 align="center"><input type="submit" onclick="window.print()" align="center" value="Print Here" /></h2>
					
				</div>



