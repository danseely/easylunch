<!DOCTYPE html>
<html>
 <head>
	 
  <?php
    
    include_once('../modules/db.php');
    
    if (!isset($_SERVER['PHP_AUTH_USER'])) {
        echo '<h1>not set</h1>';
        header('WWW-Authenticate: Basic realm="My Realm"');
        header('HTTP/1.0 401 Unauthorized');
        echo 'Text to send if user hits Cancel button';
        exit;
    } else {
        echo '<h1>set, checking...</h1>';
        $username = $_SERVER['PHP_AUTH_USER'];
        $hashedPassword = md5($_SERVER['PHP_AUTH_PW']);  
        $result = db_queryonerow("SELECT COUNT(*) as num FROM users WHERE username = '$username' AND password = '$hashedPassword'");  
  
        if($result['num'] != 0) {  
            // check input against user db
        } else {  
            header('HTTP/1.0 401 Unauthorized'); 
        } 
    }
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