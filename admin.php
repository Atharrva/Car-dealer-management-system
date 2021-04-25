<html>
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
    width:80%; 
    margin-left:10%; 
    margin-right:10%;
  }
</style>
</head>
<body>
<section class="">
		<?php
			include 'menu.php';
		?>
</section>
	<h1><center> PRIME EXOTICS </center></h1>
<h3><center><i> WHERE CAR DREAMS BECOME REALITY  <i></center></h3>
<table align="center">
							<tr>
								<th>Order No.</th>
								<th>Name</th>
								<th>Phone Number</th>
								<th>Car Booked</th>
								<th>Transaction ID</th>
								<th>Quantity</th>
								<th>Price</th>
								<th>Delivery Date</th>
								<th>Supplier ID</th>
								<th>EDIT</th>
								<th>DELETE</th>
							</tr>
							<?php
								include 'connection.php';
								$select = "SELECT cu.Name,cu.Phone_number,ca.Car_name,pu.Supplier_id,pu.Transaction_id,sa.Quantity,sa.Price,pu.Supplier_Delivery_Date,sa.Order_No from cars ca,customers cu,purchase_order pu,sales_order sa where ca.Car_id=sa.Car_id and cu.Customer_id=sa.Customer_id and sa.Order_No=pu.Order_No";
								$result = $conn->query($select);
								while($row = $result->fetch_assoc()){
							?>
							<tr>
								<td><?php echo $row['Order_No'] ?></td>
								<td><?php echo $row['Name'] ?></td>
								<td><?php echo $row['Phone_number'] ?></td>
								<td><?php echo $row['Car_name'] ?></td>
								<td><?php echo $row['Transaction_id'] ?></td>
								<td><?php echo $row['Quantity'] ?></td>
								<td>Rs.<?php echo $row['Price'] ?></td>
								<td><?php echo $row['Supplier_Delivery_Date'] ?></td>
								<td><?php echo $row['Supplier_id'] ?></td>
								<td><a href="booked_car_edit.php?id=<?php echo $row['Order_No'] ?>">Edit</a></td>
								<td><a href="booked_car_delete.php?id=<?php echo $row['Order_No'] ?>">Delete</a></td>
							</tr>
						
							<?php
								}
							?>
						</table>

</body>
</html>

