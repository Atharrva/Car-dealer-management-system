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
								<th>ID</th>
								<th>Phone Number</th>
								<th> Name</th>
								<th>Address</th>
								<th>EDIT</th>
								<th>DELETE</th>
							</tr>
							<?php
								include 'connection.php';
								$select = "SELECT * from supplier";
								$result = $conn->query($select);
								while($row = $result->fetch_assoc()){
							?>
							<tr>
								<td><?php echo $row['Supplier_id'] ?></td>
								<td><?php echo $row['Supplier_phone_number'] ?></td>
								<td><?php echo $row['Supplier_name'] ?></td>
								<td><?php echo $row['Supplier_address'] ?></td>
								<td><a href="suppliers_edit.php?id=<?php echo $row['Supplier_id'] ?>">Edit</a></td>
								<td><a href="suppliers_delete.php?id=<?php echo $row['Supplier_id'] ?>">Delete</a></td>
							</tr>
							<?php
								}
							?>
<h2 align="center"><a href="add_suppliers.php"><span>Add new Supplier</span></a></h2>
						</table>

</body>
</html>

