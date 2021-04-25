<!DOCTYPE html>
<html lang="en">
<head>
	<title>Car Purchasing</title>

	<link rel="stylesheet" type="text/css" href="style/reset.css">
	<link rel="stylesheet" type="text/css" href="style/responsive.css">
<style>
table,td,tr{
  padding: 10px;
}
  table {
    width:10%; 
    margin-left:45%; 
    margin-right:45%;
	
  }
</style>

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
						$sel = "SELECT * FROM cars WHERE Car_id = '$_GET[id]'";
						$rs = $conn->query($sel);
						$rws = $rs->fetch_assoc();
			?>
				<li>
					<a href="book_car.php?id=<?php echo $rws['Car_id'] ?>">
						<img class="thumb" src="images/<?php echo $rws['Image'];?>" width="300" height="200">
					</a>
					<span class="price"><?php echo 'COST:Rs.'.$rws['Price'];?></span>
					<div class="property_details">
					<h2><a href="book_car.php?id=<?php echo $rws['Car_id'] ?>">Car Name/Model: <span class="property_size"><?php echo $rws['Car_name'];?></span></h2></a>
                                        </div>
				</li>
				<li class="info"> <b>INFO:</b><br><p><?php echo $rws['Information'];?></p></li>
				<h3 align="center">Proceed to BUY <?php echo $rws['Car_name'];?>. </h3>
				<?php
					if(!$_SESSION['email'] && (!$_SESSION['pass'])){
				?>
			        <h3 align="center">Please <a href="login.php"> login</a> to continue your booking.</h3>
				<?php
					} else
						{
							?>
							<form method="post">
							  <table align="center">
						<tr align="center">
							<td>Quantity:</td>
							<td>
								<select name="Quantity">
									<option> 1</option>
									<option> 2</option>
									<option> 3</option>
									<option> 4</option>
									<option> 5</option>
									<option> 6</option>
									<option> 7</option>
									<option> 8</option>
									<option> 9</option>
									<option> 10</option>
								</select>
							</td>
						</tr>
						<tr>
						</tr>
						<tr>
							<td colspan="2" style="text-align:right"><input type="submit" name="save" value="Proceed to payment"></td>
						</tr>
					</table>
					</form>
                                        <?php
                                                        session_start();
                                                        $date=date("Y/m/d");
                                                        $cid=$_SESSION['cid'];
                                                        echo "<br><h5 align='center'>"."Today is " .$date. "</h5><br>";
                                                        if(isset($_POST['save'])){

                                                        $quantity = $_POST['Quantity'];
                                                        $price=$quantity * $rws['Price'];
                                                        $_SESSION['price']=$price;
							
							$qury = "INSERT INTO sales_order (Customer_id,Car_id,Quantity,Price,Order_date)
							VALUES('$cid','$_GET[id]','$quantity','$price','$date')";
							$result = $conn->query($qury);
                                        $qy = "SELECT * FROM sales_order WHERE Customer_id='$cid' AND Car_id = '$_GET[id]' AND Order_date='$date'";
					$log = $conn->query($qy);
					$num = $log->num_rows;
					$row = $log->fetch_assoc();
					if($num > 0){
						$_SESSION['oid']=$row['Order_No'];
					}	
							if($result == TRUE){
								echo "<script type = \"text/javascript\">
											alert(\"Successfully added.\");
											window.location = (\"pay.php\")
											</script>";
							} else{
								echo "<script type = \"text/javascript\">
											alert(\"Failed. Try Again\");
											window.location = (\"book_car.php\")
											</script>";
							}
							}
							?>
							<?php
						}

				?>
			</ul>
		</div>
	</section>
</body>
</html>