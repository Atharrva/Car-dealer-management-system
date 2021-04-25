<?php
	include 'connection.php';
	$query1 = "DELETE FROM sales_order WHERE Order_No = '$_GET[id]'";
	$result1 = $conn->query($query1);
	$query2 = "DELETE FROM purchase_order WHERE Order_No = '$_GET[id]'";
	$result2 = $conn->query($query2);
	if($result2 == TRUE  ){
		echo "<script type = \"text/javascript\">
			alert(\"DELETE Successful\");
			window.location = (\"admin.php\")
			</script>";
	}
	else{
		echo "<script type = \"text/javascript\">
					alert(\"DELETE Failed\");
					window.location = (\"admin.php\")
					</script>";
		}
?>
