<?php
	require "db.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="st.css">
	<title>Login</title>
</head>
<body>
	

<?php
	$data = $_POST;


	if (isset($data['do_login'])) {
		$errors = array();


		$user = R::findOne('usrs', 'login = ?', array($data['login']));
		if ($user) {
			if (password_verify($data['password'], $user->password)) {
				// 200
				$_SESSION['logged_user'] = $user;
				//var_dump($_SESSION['logged_user']);
				
				echo '<div style="color:green;">You have been logged! <a href="/index.php">Main page</a> </div><hr>';
			
			}
			else {
				$errors[] = 'Wrong password!';	
			}
		}
		else {
			$errors[] = 'No user with such login!';			
		}

		if(!empty($errors)) {
			echo '<div style="color:red;">' . array_shift($errors) . '</div>' . '<hr>';
		}
		


	}
?>
<div class="sign_cont">
<form action="login.php" method="POST">
	<p>
		<p><strong>login</strong>:</p>
		<input type="text" name="login" value="<?php echo @$data['login']; ?>">
	</p>

	<p>
		<p><strong>Password</strong>:</p>
		<input type="password" name="password" value="<?php echo @$data['password']; ?>">
	</p>

	<p>
		<button type="submit" name="do_login">Login</button>
	</p>
</form>

</div>
</body>
</html>