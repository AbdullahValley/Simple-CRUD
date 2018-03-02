<?php

	$connection = new PDO
		
		('mysql:host=localhost; dbname=simple_CRUD; charset=utf8mb4', 'root', '');


	if ($connection==FALSE)
		{
		  echo "Abdullah Al Noman ==> Your Database connection have some ERROR ! :( ";
		}
?>