<?php require "db.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>admin panel</title>
</head>
<body>
	

<?php
	if ($_SESSION['logged_user']['login'] == 'admin') {
		$connection = mysqli_connect('127.0.0.1', 'root', '', 'test_db'); // server, user, passw, db
		
			if (!$connection) {
				echo "DB not connected" . '<br>';
				exit();
			}


		$getAllUsers = mysqli_query($connection, "SELECT * FROM `usrs`");



		while ( $record = mysqli_fetch_assoc($getAllUsers)) {
				
			echo "User id: " . $record['id'] . " User`s login: " . $record['login'] . " email: " . $record['email'];
			echo "<hr>";

		}


		echo "Delete user by id: ";
		echo "<form action='del_user.php' method='POST'>";
		echo "<input type='text' name='name' placeholder='id'>";
		echo "<input type='submit' class = 'sbmt' name='del' value='Delete'>";
		echo "</form>";
	}
	else {
		echo "Access denied";
	}
?>



</body>
</html>