<?php
	include 'connection.php';
		$query = "DELETE FROM supplier WHERE Supplier_id = '$_GET[id]'";
	$result = $conn->query($query);
	if($result == TRUE  ){
		echo "<script type = \"text/javascript\">
			alert(\"DELETE Successful\");
			window.location = (\"edit_suppliers.php\")
			</script>";
		}
		else{
		echo "<script type = \"text/javascript\">
					alert(\"DELETE Failed\");
					window.location = (\"edit_suppliers.php\")
					</script>";
		}
	
?>
