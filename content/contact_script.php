<?php

	if (isset($_POST['first_name'])) {
		# code...

		$first_name = ($_POST['first_name']);
		$last_name = ($_POST['last_name']);
		$email = ($_POST['email']);
		$message = ($_POST['message']);

		$message .= "<br>";
		$message .= "from: " . $first_name . " " . $last_name;
		$message .= "<br>";
		$message .= "email: " . $email;

		
		mail("yichenzhu1337@gmail.com", "You got mail from UniversityOfCs.com", $message) or die('u got an error');

		echo "Message sucessfully sent! <br>";
	?>	
	<a href="../index.php"> back </a>


	<?php
	}
	else{
		echo "message not sent plz try again! <br>";


		?>
		<a href="../index.php"> back </a>

		<?php
	}
?>
