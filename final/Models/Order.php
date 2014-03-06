<?php
	include_once __DIR__ .'/../inc/functions.php';
	
	
	class Order
	{
		
		static public function Get($id = null)
	
		{
			if($id == null)
			{
				//Get all record
				print_r('model');
				return fetch_all("SELECT * FROM 2014Spring_Order");
			}
			else 
			{
					//Get one record
			}
			
		}
		
		static public function Create($row)
		{
			
		}
		
		static public function Blank()
		{
			
			return array('id'=> null);
		}
			
			
		static public function Update($row)
		{
			
			
			
		}
		
		static public function Delete($id)
		{
			
			
		}
		
		static public function Validate($row)
		{
			
		}
	}
	
	
	
	
	
