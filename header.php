<?php
	session_start();
	error_reporting("E-NOTICE");
?>
<header>
			<div class="wrapper">
				<h1 class="logo"> PRIME EXOTICS</h1>
				<h5 class="logo2"> Contact:9902655879</h5>
				<nav>
					<?php
						if(!$_SESSION['email'] && (!$_SESSION['pass'])){
					?>
					<ul>
						<li><a href="index.php">Home</a></li>
					</ul>
					<a href="login.php">Login</a>
					<span>||</span>
					<a href="alogin.php">Admin Login</a>
					<?php
						} else{
					?>
							<ul>
								<li><a href="index.php">Home</a></li>
							</ul>
					<a href="logout.php">Logout</a>
					<ul>
						<li><a href="profile.php">Profile</a></li>
					</ul>
					<ul>
						<li><a href="your_order.php">Your Orders</a></li>
					</ul>

					<?php
						}
					?>
				</nav>
			</div>
		</header>