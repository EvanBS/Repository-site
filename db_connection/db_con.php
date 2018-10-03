<?php
	$connection = mysqli_connect('127.0.0.1', 'root', '', 'test_db'); // server, user, passw, db
	
		if (!$connection) {
			echo "DB not dconnected" . '<br>';
			exit();
		}
?>