<?php
	  $db = mysqli_connect("localhost", "root", "", "test_db");

	  // Initialize message variable
	  $msg = "";

	  // If upload button is clicked ...


	  // del &&
	  echo $_POST['name'];

	  if (isset($_POST['name'])) {
	    // Get image name
	    $userId = $_POST['name'];
	    
	    
	    $sql = "DELETE  FROM `usrs` WHERE `id`='$userId'";
	    // execute query
	    if ($db->query($sql) === TRUE) {
		    echo "Record deleted successfully";
		} else {
		    echo "Error deleting record: " . $db->error;
		}
	  }
?>