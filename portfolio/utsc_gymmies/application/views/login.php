<!DOCTYPE html>
<html lang="en">

	<head>
		<title> Website CI </title>
	</head>

	<body>

		<div id="container">
			<h1> Login </h1>


			<?php 

				echo form_open('main/login');

				echo validation_errors();
				
					echo "<p> Email: <br>";
					echo form_input('email');
					echo "</p>";

					echo "<p> Password: <br>";
					echo form_password('password');
					echo "</p>";

					echo "<p>";
					echo form_submit('login_submit' , 'login');
					echo "</p>";

				echo form_close();

			?>

			<a href="<?php echo base_url().'main/signup'; ?>"> signup</a>
		</div>

	</body>

</html>