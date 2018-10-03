<?php
	  $db = mysqli_connect("localhost", "root", "", "image_upload");

	  // Initialize message variable
	  $msg = "";

	  // If upload button is clicked ...

	  // del
	  if (!isset($_FILES['image']['name'])) {
	  	echo "<script type='text/javascript'>alert('Set image and description please');</script>";
	  }

	  // del &&
	  if (isset($_POST['upload']) && $_FILES['image']['name']) {
	    // Get image name
	    $image = $_FILES['image']['name'];
	    // Get text
	    $image_text = mysqli_real_escape_string($db, $_POST['image_text']);

	    // Get name
	    $image_name = mysqli_real_escape_string($db, $_POST['name']);

	    // Get album

	    $image_album = mysqli_real_escape_string($db, $_POST['alb']);

	    // image file directory
	    $target = "images/".basename($image);

	    $sql = "INSERT INTO images (image, image_text, name, photo_album) VALUES ('$image', '$image_text', '$image_name', '$image_album')";
	    // execute query
	    mysqli_query($db, $sql);

	    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
	        $msg = "Image uploaded successfully";
	        
	    }else{
	        $msg = "Failed to upload image";
	    }
	  }
	  $result = mysqli_query($db, "SELECT * FROM images");

	  mysqli_close($db);

?>

<script>document.location.href = "index.php";</script>