<html>
<head>
	<title>Car Purchasing</title>

	<link rel="stylesheet" type="text/css" href="style/reset.css">
	<link rel="stylesheet" type="text/css" href="style/responsive.css">
<style>
table, th, td,tr {
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
<table align="center" height=130>
							<tr>
								<th>Customer ID</th>
								<th>Name</th>
								<th>Phone Number</th>
								<th>Email Address</th>
								<th>Gender</th>
								<th>Address</th>
								<th>EDIT</th>
							</tr>
							<?php
								include 'connection.php';
								$select = "SELECT * from customers";
								$result = $conn->query($select);
								while($row = $result->fetch_assoc()){
							?>
							<tr>
								<td><?php echo $row['Customer_id'] ?></td>
								<td><?php echo $row['Name'] ?></td>
								<td><?php echo $row['Phone_number'] ?></td>
								<td><?php echo $row['Email_Address'] ?></td>
								<td><?php echo $row['Gender'] ?></td>
								<td><?php echo $row['Address'] ?></td>
								<td><a href="admin_customers_edit.php?id=<?php echo $row['Customer_id'] ?>">Edit</a></td>
							</tr>
						
							<?php
								}
							?>
						</table>

</body>
</html>
