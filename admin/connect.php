<?php
	try {
	  $db = new PDO("mysql:host=localhost;dbname=movie_app", 'kluz','musembya@26');
	  if ($db) {
	  	//echo "connected";
	  }
	}
	catch(PDOException $e) {
	    echo $e;
	}
