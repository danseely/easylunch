<!DOCTYPE html>
<html>
 <head>
	 
  <?php
    
    //include_once('../modules/db.php');
    
  ?>
	 
  <meta charset="UTF-8">
  <title>Add Restaurant</title>
  <link rel="stylesheet" type="text/css" href="main.css">
 </head>
 <body>
  <h1>Add a new location</h1>
  
  <form action="insert-new.php" method="POST" accept-charset="utf-8">
  	<input type="text" name="new_name" placeholder="Restaurant Name">
  	<input type="text" name="new_cuisine" placeholder="Restaurant Cuisine">
  	<input type="text" name="new_category" placeholder="Restaurant category">
  	<input type="text" name="new_price_rating" placeholder="Restaurant Price Rating">
  	<input type="submit" value="Create">
  </form>
  
  <br>
  
  <h3><a href="index.php">Nevermind, take me home</a></h3>
  
 </body>