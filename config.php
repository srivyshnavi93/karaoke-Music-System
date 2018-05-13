<?php
	$username = "root";
	$password = "4451";

	try { 
				$dsn = "mysql:host=localhost;dbname=karaokegroup";
	            $pdo = new PDO($dsn, $username, $password);
	            
		}
	    catch(PDOexception $e) {
	    	echo "Connection to database failed: " . $e->getMessage();
	    }
?>