<?php
  
  include_once('../modules/db.php');  
  error_log(print_r('in', true));
  //$restaurant_count = db_queryonerow('SELECT COUNT(*) FROM `restaurants`');
  $pick = db_queryonerow('SELECT `name` FROM `restaurants` ORDER BY RAND() LIMIT 1');
  error_log(print_r($pick['name'], true));
?>
  
<h1 class="center-inline">Let's go to <?php echo ucwords($pick['name']); ?>!</h1>  