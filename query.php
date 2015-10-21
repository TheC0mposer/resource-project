<?php

	require('db_conn.php');

	$query = $db_conn->query('SELECT * FROM resources');
	$resources = array();

	foreach($query->fetchAll(PDO::FETCH_ASSOC) as $row)
	{
		$resources[] = $row;
	}
	
?>