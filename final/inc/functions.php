<?php
	//include_once 'password.php';
	include_once __DIR__ . '/password.php';
	
    function GetConnection()
	{
		global $password;
		
		//aim is to return an objest for mysql
		$conn = mysqli_connect('localhost', 'panwarn1', $password, 'panwarn1_db');
		return $conn;
		
		echo(mysqli_connect_error($conn));
		//echo 'called';
		
		// we do not put password coz we are cheking in github so we dont want it to be open
		
	}
	
	//$conn = GetConnection();
	//print_r($conn);  //these two is for test connection
	
	 function fetch_all($sql)
	 {
	 	
				$conn = GetConnection();
				$results = $conn->query($sql);  // result is pointer to data base
				
				$arr = array();
				
				while ($row = $results->fetch_assoc())  // if any record remaining fetch will give that record from result and if you reach last row of result set then while will break
				{
					$arr[] = $row; // as long ar we have row we push to that row in array(like stake)
					
					
				}
				
				$conn->close(); // closing the connection because php will give this connection to others after u done with this connection
				// more the execution time between get and close more will be the connection open for your database and that make php slower
				return $arr;// returing array
	 }
