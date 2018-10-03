<?php
	require "db.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="st.css">
	<title>Sign up</title>
</head>
<body>
	

<?php
	$data = $_POST;
	if (isset($data['do_signup'])) {
		$errors = array();
		//$user = R::findOne('user', 'login = ?', array($data['login']));
		if(!trim($data['login'])) {
			$errors[] = 'Enter login!';
		}

		if(!trim($data['email'])) {
			$errors[] = 'Enter email!';
		}

		if(!($data['password'])) {
			$errors[] = 'Enter password!';
		}
 
		if ($data['password_2'] != $data['password']) {
			$errors[] = 'Password do not match!';
		}

		if (R::count('usrs', "login = ?", array($data['login'])) > 0) {
			$errors[] = 'Such login already exist!';
		}
  
		if (R::count('usrs', "email = ?", array($data['email'])) > 0) {
			$errors[] = 'Such email already exist!';
		}


		if(empty($errors)) {
			$user = R::dispense('usrs');
			$user->login = $data['login'];
			$user->email = $data['email'];
			$user->password = password_hash($data['password'], PASSWORD_DEFAULT);
			R::store($user);
			echo '<div style="color:green;">Success! Log in here: <a href="login.php"></a></div><hr>';
		}
		else {
			echo '<div style="color:red;">' . array_shift($errors) . '</div>' . '<hr>';
		}
	}
?>
<div class="sign_cont">
<form action="signup.php" method="POST">
	<p>
		<p><strong>Your login</strong>:</p>
		<input type="text" class = "input_f" name="login" value="<?php echo @$data['login']; ?>">
	</p>

	<p>
		<p><strong>Your email</strong>:</p>
		<input type="email" name="email" value="<?php echo @$data['email']; ?>">
	</p>

	<p>
		<p><strong>Your password</strong>:</p>
		<input type="password" name="password" value="<?php echo @$data['password']; ?>">
	</p>

	<p>
		<p><strong>Your password again</strong>:</p>
		<input type="password" name="password_2">
	</p>

	<p>
		<button type="submit" name="do_signup">Sign up</button>
	</p>
</form>
</div>
</body>
</html>