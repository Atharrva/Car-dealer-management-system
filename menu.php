<?php
	session_start();
	error_reporting("E-NOTICE");
?>
<header>
			<div class="wrapper">
				<h1 class="logo"> PRIME EXOTICS</h1>
				<a href="#" class="hamburger"></a>
				<nav>
					<?php
						if(!$_SESSION['email'] && (!$_SESSION['pass'])){
					?>
					<a href="alogin.php">Admin Login</a>
					<?php
						} else{
					?>
				Welcome <a href="admin.php"><strong>Administrator</strong></a>
				<span>||</span>
				<a href="logout.php">Log out</a>
			<ul>
			    <li><a href="admin.php"><span>Orders</span></a></li>
			</ul>
			<ul>
			    <li><a href="edit_customers.php"><span>Customers</span></a></li>
			</ul>
			<ul>
			    <li><a href="edit_cars.php"><span>Cars</span></a></li>
			</ul>
			<ul>
			    <li><a href="edit_suppliers.php"><span>Suppliers</span></a></li>
			</ul>
					<?php
						}
					?>
				</nav>
			</div>
		</header>

			