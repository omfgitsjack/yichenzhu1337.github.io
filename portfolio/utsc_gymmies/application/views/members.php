<!DOCTYPE html>
<html lang="en">

	<head>
		<title> Website CI </title>
	</head>

	<body>

		<div id="container">
			<h1> Members Area </h1>

			<?php
				echo "<pre>";
				echo "You are logged in";
				//print_r($this->session->all_userdata());
				echo "</pre>";		

			?>

			<a href=' <?php echo base_url(). "main/logout"; ?>'> Logout </a>


		</div>

	</body>

</html>