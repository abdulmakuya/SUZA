<?php	
	//connect to the server
	$db=mysql_connect("SERVER_NAME", "USERNAME","PASSWORD")  or die ("Could not connect to server"); 
	//connect to the database inside the server
	mysql_select_db('DATABASE_NAME', $db) or die('Error selecting database : ' . mysql_error());
	
?>