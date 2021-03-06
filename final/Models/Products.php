<?php
	include_once __DIR__ . '/../inc/functions.php';
	error_reporting (E_ALL);
	
	

	class Products  {

		static public function Get($id = null, $catergory_id = null)
		{
			$sql = "SELECT p.id ,p.name ProductName, 
			concat('$',p.price)Price,s.name SuplierName , c.Name Category,
			sc.name SubCategory,p.Picture_url Picture,p.Description FROM 2014Spring_Products p
       			   join 2014Spring_Supliers s on p.Suplier_id = s.id
				join 2014Spring_Catergory c on p.Catergory_id=c.id
				join 2014Spring_SubCategory sc on p.SubCategory_id=sc.id
								   ";
								   // decarlare an id for insex
								   //$sql="SELECT * from 2014Spring_Products sp";//if the above sql doent work then use this statement and comment the above one.
				   
           if($id){
				$sql .= " WHERE p.id = $id ";
				if(($results = fetch_all($sql)) && count($results) > 0){
					return $results[0];
				}else{
					return null;
				}
			}
			
           elseif($catergory_id){
				//$sql .= "  join 2014Spring_Catergory sc ON sp.Catergory_id= sc.id 
				//and sp.Catergory_id=$catergory_id ";
				$sql = "SELECT * from 2014Spring_Products where Catergory_id= $catergory_id";//if this sql doens work then use the above one.
				
				//echo $sql;
				return fetch_all($sql);
			}
			
			elseif($SubCategory_id){
				$sql .= "  join 2014Spring_SubCategory ssc ON sp.SubCategory_id= ssc.id 
				and sp.SubCategory_id=$SubCategory_id ";
				return fetch_all($sql);
			}else{
				return fetch_all($sql);
			}
		}
				
       static public function GetCategories()
		{
			$sql = "SELECT * FROM 2014Spring_Catergory  "
			;
			return fetch_all($sql);
		}
		
		
		static public function GetSubcategories()

		{
			
				
			$sql =  "SELECT * FROM 2014Spring_SubCategory  "
				;
			return fetch_all($sql);
		}
		

		static public function Save(&$row)
		{
			$conn = GetConnection();

			$row2 = escape_all($row, $conn);
			if (!empty($row['id'])) {
				$sql = "UPDATE 2014Spring_Products
							SET Name='$row2[Name]', Price='$row2[Price]',
								Description='$row2[Description]', Picture_Url='$row2[Picture_Url]'
						WHERE id = $row2[id]
						";
			}else{
				$sql = "INSERT INTO 2014Spring_Products
						(Name,Price,Description,Picture_url)
						VALUES ('$row2[Name]', '$row2[Price]', '$row2[Description]', '$row2[Picture_url]' ) ";		

			}
			$results = $conn->query($sql);
			$error = $conn->error;

			if(!$error && empty($row['id'])){
				$row['id'] = $conn->insert_id;
			}

			$conn->close();

			return $error ? array ('sql error' => $error) : false;
		}

		static public function Blank()
		{
			return array( 'id' => null,'ProductName'=>null,'Price'=>null,'SupplierName'=>null,'Category'=>null,
			'SubCategory'=>null,'Picture'=>null,'Description'=>null);
		}

		static public function Delete($id)
		{
			$conn = GetConnection();
			$sql = "DELETE FROM 2014Spring_Products WHERE id = $id";
			//echo $sql;
			$results = $conn->query($sql);
			$error = $conn->error;
			$conn->close();

			return $error ? array ('sql error' => $error) : false;
		}

		static public function Validate($row)
		{
			$errors = array();
			if(empty($row['Name'])) $errors['Name'] = "is required";

			return count($errors) > 0 ? $errors : false ;
		}

	}



