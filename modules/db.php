<?php
	
	$dbconfig['hostname'] = 'dsmysql.db';
	$dbconfig['username'] = 'svceasylunch';
	$dbconfig['password'] = 'nds*^5h^&54ftyGUI%^&^I';
	$dbconfig['db'] = 'easylunch';
	
	
  function db_query($sql = "") {
    if ( $sql == "" ) return false;
  
    global $dbconfig;
    $db = new mysqli($dbconfig['hostname'],$dbconfig['username'],$dbconfig['password'],$dbconfig['db']);
    if ( $db->connect_errno > 0 ) die("Error: ".mysqli_error($db));
  
    if ( is_array($sql) ) {
      foreach ( $sql as $query ) {
        if (!$result = $db->query($query) ) {
          die("Error: ".mysqli_error($db));
        }
      }
    } else {
      if (!$result = $db->query($sql) ) {
        die("Error: ".mysqli_error($db));
      }
    }
  
    return $result;
  }
	
  function db_querytorows($sql = "") {
    $result = db_query($sql);
    if ( $result != false ) {
      $returnable = array();

      while ( $row = $result->fetch_assoc() ) {
        $returnable[] = $row;
      }

      return $returnable;
    }
    return false;
  }
	
	function db_queryonerow($sql = "") {
    $result = db_query($sql);
    if ( $result == false ) return false;

    $returnable = $result->fetch_assoc();
    if ( $returnable != NULL ) return $returnable;

    return false;
  }
	
