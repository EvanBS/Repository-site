<?php require "db.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="my_styles.css">
</head>
<body>
<footer>
	<div class="left-footer-content">

		<div class="footer-text elements">
  			Designed by <span class="col">me</span>
		</div>
	</div>



<?php
if (isset($_SESSION['logged_user']) ) {
	?> 	<div class="right-footer-content">
		<div class = "all">All</div>
		<div class = "city">City</div>
		<div class = "nature">Nature</div>
		<div class = "space">Space</div><?php

	echo    "<div class='ref'>
				<a href='logout.php'><span class='col'>Log out</span></a>
			</div>";
}?>


		
	</div>
</footer>
<?php if (isset($_SESSION['logged_user']) ) :  
?>
	
	Main page, hello <?php echo $_SESSION['logged_user']['login']; 

?>

<div class="main_content"></div>

	<br>
	<br>
	<br>





	<form method="POST" action="hendler.php" enctype="multipart/form-data">
	    <input type="hidden" name="size" value="1000000">
	    <br>
	    <div>
	      <input type="file" name="image">
	    </div>

	    <div>
	      <input type="text" name="name" placeholder="Photo`s name">
	    </div>

	    <div>
	    	<select class="select_alb" name="alb">
	    		<option value="City">City</option>
	    		<option value="Nature">Nature</option>
	    		<option value="Nature">Space</option>
	    	</select>
	      
	    </div>

	    <div>
	      <textarea 
	        id="text" 
	        cols="46" 
	        rows="5" 
	        name="image_text" 
	        placeholder="Set your description"></textarea>
	    </div>
	    <div class = "post_button">
	        <!--<button type="submit" name="upload">POST</button>-->
	        <input type="submit" class = "sbmt" name="upload" value="POST">
	    </div>
    </form>




<?php 

	if ($_SESSION['logged_user']['login'] == 'admin' ) {
		echo "Delete photo by name: ";
		echo "<form action='del.php' method='POST'>";
		echo "<input type='text' name='name' placeholder='Photo name'>";
		echo "<br><input type='submit' class = 'sbmt' name='del' value='Delete'>";
		echo "</form>";
	}
?>


<?php else : 
?>
<div class="what_we_do">Photo gallery</div>
<div class="log_sign_ref">
	<a href="login.php">Login</a> | 
	<a href="signup.php">Sign up</a>
</div>
<?php endif; 
?>

<script src="jquery.js"></script>
<script>
$( document ).ready(function() {


	$(".main_content").text('');
		
		<?php

		$db = mysqli_connect("localhost", "root", "", "image_upload");

		$getAllImages = mysqli_query($db, "SELECT * FROM `images`");



		while ( $record = mysqli_fetch_assoc($getAllImages)) {
			echo '$(".main_content").append("<div class = post_cont><div class=elem><img src=/images/' . $record['image'] . '><div class=cntr>' . $record['name'] . '<br>' . $record['image_text'] . '</div></div></div>");';			
			}
			
		
		?>

	$(".all").click(function() {
		$(".main_content").text('');
		<?php

		$db = mysqli_connect("localhost", "root", "", "image_upload");

		$getAllImages = mysqli_query($db, "SELECT * FROM `images`");



		while ( $record = mysqli_fetch_assoc($getAllImages)) {
			echo '$(".main_content").append("<div class = post_cont><div class=elem><img src=/images/' . $record['image'] . '><div class=cntr>' . $record['name'] . '<br>' . $record['image_text'] . '</div></div></div>");';			
			}
			
		
		?>
	});

	$(".city").click(function() {
		

		$(".main_content").text('');
		
		<?php

		$db = mysqli_connect("localhost", "root", "", "image_upload");

		$getAllImages = mysqli_query($db, "SELECT * FROM `images`");

		$temp = "temp";
		$str = "City";

		while ( $record = mysqli_fetch_assoc($getAllImages)) {
			$temp = strval($record['photo_album']);
			
		
			//if ($temp == $str) {
	


			if ($temp == $str) {
					echo '$(".main_content").append("<div class = post_cont><div class=elem><img src=/images/' . $record['image'] . '><div class=cntr>' . $record['name'] . '<br>' . $record['image_text'] . '</div></div></div>");';
					

			}
			
		}
		?>	
	});

	$(".nature").click(function() {
		

		$(".main_content").text('');
		
		<?php

		$db = mysqli_connect("localhost", "root", "", "image_upload");

		$getAllImages = mysqli_query($db, "SELECT * FROM `images`");

		$temp = "temp";
		$str = "Nature";

		while ( $record = mysqli_fetch_assoc($getAllImages)) {
			$temp = strval($record['photo_album']);
			
		
			//if ($temp == $str) {
	


			if ($temp == $str) {
					echo '$(".main_content").append("<div class = post_cont><div class=elem><img src=/images/' . $record['image'] . '><div class=cntr>' . $record['name'] . '<br>' . $record['image_text'] . '</div></div></div>");';
					

			}
			
		}
		?>	
	});


	$(".space").click(function() {
		

		$(".main_content").text('');
		
		<?php

		$db = mysqli_connect("localhost", "root", "", "image_upload");

		$getAllImages = mysqli_query($db, "SELECT * FROM `images`");

		$temp = "temp";
		$str = "Space";

		while ( $record = mysqli_fetch_assoc($getAllImages)) {
			$temp = strval($record['photo_album']);
			
		
			//if ($temp == $str) {
	


			if ($temp == $str) {
					echo '$(".main_content").append("<div class = post_cont><div class=elem><img src=/images/' . $record['image'] . '><div class=cntr>' . $record['name'] . '<br>' . $record['image_text'] . '</div></div></div>");';
					

			}
			
		}
		?>	
	});


});
</script>


</body>
</html>