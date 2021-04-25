<html>
<head>
	<title>Car Purchasing</title>

	<link rel="stylesheet" type="text/css" href="style/reset.css">
	<link rel="stylesheet" type="text/css" href="style/responsive.css">
</head>
<body>
<section class="">
		<?php
			include 'header.php';
		?>
</section>
	<h1><center> PRIME EXOTICS </center></h1>
<h3><center><i> WHERE CAR DREAMS BECOME REALITY  <i></center></h3>
<section class="listings">
		<div class="wrapper">
			<ul class="properties_list">
<?php
						include 'connection.php';
						$sel = "SELECT * FROM cars";
						$rs = $conn->query($sel);
						while($rws = $rs->fetch_assoc()){
?>
				<li>
                                        <a href="book_car.php?id=<?php echo $rws['Car_id'] ?>">
						<img class="thumb" src="images/<?php echo $rws['Image'];?>" width="300" height="200">
					</a>
					<span class="price"><?php echo 'COST:Rs.'.$rws['Price'];?></span>
					<div class="property_details">
					<h2><a href="book_car.php?id=<?php echo $rws['Car_id'] ?>"><span class="property_size"> Car Name/Model:<?php echo $rws['Car_name'];?></span></h2></a>
					</div>
				</li>
				<?php
				}
			?>
			</section>	<!--  end listing section  -->

</body>
</html>