<?php require_once 'core/init.php';?>

<?php
	
	//if (Session::exists('home')) {
	//	echo Session::flash('home');
	//}

	//echo Session::get(Config::get('session/session_name'));

	$user = new User();
	//$another = new User(6);

	if ($user->isLoggedIn()) {
		echo $user->data()->username . '<br>';

		?>
		<p> Hello <a href="$"></a> <?php echo $user->data()->name; ?></p>

		<ul>
			<li><a href="logout.php"> Logout </a></li>
			<li><a href="update.php"> Update information </a></li>
			<li><a href="profile.php?user=<?php echo $user->data()->username; ?>"> Profile </a></li>
			<li><a href="changepassword.php"> change password </a></li>
			<li><a href="add_post.php"> Add Post </a></li>
			<li><a href="view_post.php"> View Post </a></li>		
		</ul>
		<?php


		if ($user->hasPermission('admin')) {
			echo "you are an admin yay!";
			# code...
		}
		else{
			echo "you are NOT an admin";
		}
	}
	else{
	?>
		<p> you need to login or register</p>
		<a href="login.php"> Login </a><br>
		<a href="register.php"> Register </a><br>
	<?php
	}

	?>
