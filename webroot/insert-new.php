  <?php
	  
	include_once('../modules/db.php');
	
  if (ISSET($_POST)) {
    $sql = "INSERT INTO easylunch.restaurants (`name`, `cuisine`, `category`, `price_rating`) VALUES (";
    $sql .= "'".$_POST['new_name']."', '".$_POST['new_cuisine']."', '".$_POST['new_category']."', '".$_POST['new_price_rating']."')";
  	$make_new_restaurant = db_query($sql);
	}
	  
  ?>
  
  <h1>Sweet!</h1>
  
  <a href="add.php">Add another location</a><br>
  <a href="index.php">Back home</a>