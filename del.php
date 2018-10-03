<?php
	  $db = mysqli_connect("localhost", "root", "", "image_upload");

	  // Initialize message variable
	  $msg = "";

	  // If upload button is clicked ...


	  // del &&
	  echo $_POST['name'];

	  if (isset($_POST['name'])) {
	    // Get image name
	    $image = $_POST['name'];
	    
	    
	    $sql = "DELETE  FROM `images` WHERE `name`='$image'";
	    // execute query
	    if ($db->query($sql) === TRUE) {
		    echo "Record deleted successfully";
		} else {
		    echo "Error deleting record: " . $db->error;
		}
	  }
?>

