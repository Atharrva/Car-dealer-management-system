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
								<th>Car ID</th>
								<th>Car Name</th>
								<th>Image</th>
								<th>Price</th>
								<th>EDIT</th>
								<th>DELETE</th>
							</tr>
							<?php
								include 'connection.php';
								$select = "SELECT * from cars";
								$result = $conn->query($select);
								while($row = $result->fetch_assoc()){
							?>
							<tr>
								<td><?php echo $row['Car_id'] ?></td>
								<td><?php echo $row['Car_name'] ?></td>
								<td><?php echo $row['Image'] ?></td>
								<td><?php echo $row['Price'] ?></td>
								<td><a href="car_edit.php?id=<?php echo $row['Car_id'] ?>">Edit</a></td>
								<td><a href="car_delete.php?id=<?php echo $row['Car_id'] ?>">Delete</a></td>
							</tr>
							<?php
								}
							?>
<h2 align="center"><a href="add_cars.php"><span>Add new Car</span></a></h2>
						</table>

</body>
</html>

