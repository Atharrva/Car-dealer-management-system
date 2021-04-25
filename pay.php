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
			include 'header.php';
		?>
	</section>



	<section class="listings">
		<div class="wrapper">
				<h3 style="text-decoration: underline">Make Payments Here</h3>
				<?php
                                $cost=$_SESSION['price'];
                                echo "Total Payment Cost = Rs.".$cost."<br>"."<br>";
                                ?>
				<form method="post">
					<table>
						<tr>
							<td>TRANSACTION ID:</td>
							<td><input type="text" name="transaction" required></td>
						</tr>
						<tr>
							<td><br>PIN NUMBER:</td>
							<td><br><input type="password" name="pin" required></td>
						</tr>
						
						<tr>
							<td colspan="2" style="text-align:right"><input type="submit" name="pay" value="Submit Details"></td>
						</tr>
					</table>
				</form>
		</div>
	</section>
				<?php
						if(isset($_POST['pay'])){
                                                        session_start();
							include 'connection.php';
							$transaction = $_POST['transaction'];
							$pin = $_POST['pin'];
							$sql="select count(*)  as count from supplier";
							$res = $conn->query($sql);
							while($rws = $res->fetch_assoc()){
							$max=$rws['count'];
							}
							$supplier=rand(1,$max);
							$oid=$_SESSION['oid'];
							$d=strtotime("+3 Months");
                                                        $date = date("Y/m/d",$d);
							$_SESSION['ddate']=$date;
							$qry ="INSERT INTO purchase_order (Order_No,Supplier_id,Supplier_Delivery_Date,Transaction_id,Pin)
							VALUES('$oid','$supplier','$date','$transaction','$pin')";
							$result = $conn->query($qry);
							if($result == TRUE){
								echo "<script type = \"text/javascript\">
											alert(\"Payment Successfully Done.\");
											window.location = (\"receipt.php\")
											</script>";
							} else{
								echo "<script type = \"text/javascript\">
											alert(\"Registration Failed. Try Again\");
											window.location = (\"pay.php\")
											</script>";
							}
						}
						
					  ?>
</body>
</html>