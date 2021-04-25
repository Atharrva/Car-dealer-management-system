<?php
	include 'connection.php';
		$query = "DELETE FROM cars WHERE Car_id = '$_GET[id]'";
	$result = $conn->query($query);
	if($result == TRUE  ){
		echo "<script type = \"text/javascript\">
			alert(\"DELETE Successful\");
			window.location = (\"edit_cars.php\")
			</script>";
		}
		else{
		echo "<script type = \"text/javascript\">
					alert(\"DELETE Failed\");
					window.location = (\"edit_cars.php\")
					</script>";
		}
	
?>
