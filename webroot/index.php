<!DOCTYPE html>
<html>
 <head>
	 
  <meta charset="UTF-8">
  <title>Just pick already!</title>
  <link rel="stylesheet" type="text/css" href="main.css">
  <link rel="shortcut icon" type="image/png" href="/favicon.png" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  
  <?php
  	include_once('../modules/db.php');  	
  	$restaurants = db_query('select * from `restaurants`');
  ?>
  
 </head>
 
 <body>
  <h1 class="center-inline">InfosecLunch</h1>
  
  <div id="graphic"><img src="idk.png" height="300px" class="center-block" /></div>
  
  <br>
  
  <div id="stuff">
  
    <button id="pick_button" class="center-block">Pick a spot!</button>
    <div id="pick"></div>
    
  </div>
  
  <div id="footer">
    <h3><a href="index.php">Start over</a></h3>
    <h3><a href="add.php">Add more restaurants</a></h3>
  </div>
  
  
  <!- ################# Script ####################### -->
  <script type="text/javascript">
    // ajax call to picker php snippet
    //$('#pick_button').click(function() {
    //  $('#pick').load(encodeURI('load-lunch.php'));
    //  $('graphic').empty();
    //  $('graphic').load(encodeURI('thumbsup.png'));
    //});
    
    $('#pick_button')
      .bind('click',function(event) {
        $('#pick').load(encodeURI('load-lunch.php'));
      })
      .bind('click',function(event) {
        $('#graphic').empty();
      })
      .bind('click',function(event) {
        $('#graphic').append('<img src="thumbsup.png" height="300px" class="center-block" />');
    });
  
  </script>
 </body>
 
</html>