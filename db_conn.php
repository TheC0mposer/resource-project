<?php
	try 
	{
	    $db_conn = new PDO('mysql:host=localhost;dbname=prototype', 'root', 'root');
	} 
	catch (PDOException $e) 
	{
	    print "Error!: " . $e->getMessage() . "<br/>";
	    die();
	}
?>