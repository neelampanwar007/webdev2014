<?php
	error_reporting (E_ALL );
	ini_set("display_errors", 1);
	include_once __DIR__ . '/password.php';

	function GetConnection(){
		global $password;

		$conn = mysqli_connect('localhost', 'panwarn1', $password, 'panwarn1_db');
		return $conn;
	}

	function fetch_all($sql){
		$conn = GetConnection();
		$results = $conn->query($sql);
		
		$error = $conn->error;
		if($error){
			echo $error;
		}
		
		$arr = array();

		while ($row = $results->fetch_assoc()) {
			$arr[] = $row;
		}

		$conn->close();

		return $arr;
	}
	function escape_all($row, $conn){
		$row2 = array();
		foreach ($row as $key => $value) {
			$row2[$key] = $conn->real_escape_string($value);
		}
		return $row2;
	}
