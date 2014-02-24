<?php
	include_once 'passwprd.php';
	
    function GetConnection()
	{
		global $password;
		
		//aim is to return an objest for mysql
		$conn = mysqli_connect('localhost', 'panwarn1', $password, 'panwarn1_db');
		return $conn;
		
		//echo(mysqli_error($conn));
		//echo 'called';
		
		// we do not put password coz we are cheking in github so we dont want it to be open
		
	}
	
	//$conn = GetConnection();
	//print_r($conn);  these two is for test connection
