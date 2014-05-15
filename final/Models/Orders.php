<?php
	include_once __DIR__ . '/../inc/functions.php';

	class Orders  {

		static public function Get($id = null)
		{
			$sql = "select o.id,u.FirstName,u.LastName, concat(a.Addresses,',',a.City,' ',a.State,'-',a.Zip) Address,p.Name ProductName,concat('$ ',p.Price) Price
from 2014Spring_Orders o
	join 2014Spring_Users u on o.User_id = u.id
	join 2014Spring_Addresses a on o.Address_id = a.id
	join 2014Spring_Order_Items oi on o.id = oi.Order_id
	join 2014Spring_Products p on oi.Product_id = p.id
				   ";
			if($id == null){
				//	Get all records
				return fetch_all($sql);
			}else{
				// Get one record

				$sql .= " WHERE o.id = $id ";
				if(($results = fetch_all($sql)) && count($results) > 0){
					return $results[0];
				}else{
					return null;
				}
			}
		}

		static public function Save(&$row)
		{
			$conn = GetConnection();

			$row2 = escape_all($row, $conn);
			if (!empty($row['id'])) {
				$sql = "Update 2014Spring_Orders
							Set User_id='$row2[User_id]', Address_id='$row2[Address_id]''
						WHERE id = $row2[id]
						";
			}else{
				$sql = "INSERT INTO 2014Spring_Orders
						(User_id, Address_id)
						VALUES ('$row2[User_id]', '$row2[Address_id]' ) ";				
			}


			//echo $sql;
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
			return array( 'id' => null);
		}

		static public function Delete($id)
		{
			$conn = GetConnection();
			$sql = "DELETE FROM 2014Spring_Orders WHERE id = $id";
			//echo $sql;
			$results = $conn->query($sql);
			$error = $conn->error;
			$conn->close();

			return $error ? array ('sql error' => $error) : false;
		}

		static public function Validate($row)
		{
			$errors = array();
			if(empty($row['User_id'])) $errors['User_id'] = "is required";
			if(empty($row['Address_id'])) $errors['Address_id'] = "is required";

			
			return count($errors) > 0 ? $errors : false ;
		}

	}







