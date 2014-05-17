<?php
	include_once __DIR__ . '/../inc/functions.php';

	class Order_Items  {

		static public function Get($id = null)
		{
			$sql = "SELECT p.id as pid ,oi.id, oi.created_at CreateTime, oi.updated_at UpdateTime,p.Name ProductName
FROM panwarn1_db.2014Spring_Order_Items oi
join 2014Spring_Orders o on oi.Order_id = o.id 
	join 2014Spring_Products p on oi.Product_id = p.id
				   ";
			if($id == null){
				//	Get all records
				return fetch_all($sql);
			}else{
				// Get one record

				$sql .= " WHERE oi.id = $id ";
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
				$sql = "Update panwarn1_db.2014Spring_Order_Items
							Set Order_id='$row2[Order_id]', Product_id='$row2[Product_id]'
						WHERE id = $row2[id]
						";
			}else{
				$sql = "INSERT INTO 2014Spring_Order_Items
						(Order_id,Product_id)
						VALUES ('$row2[Order_id]', '$row2[Product_id]' ) ";				
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
			return array( 'id' => null,'CreateTime'=>null,'UpdateTime'=>null,'ProductName'=>null,'pid'=>null);
		}

		static public function Delete($id)
		{
			$conn = GetConnection();
			$sql = "DELETE FROM 2014Spring_Order_Items WHERE id = $id";
			//echo $sql;
			$results = $conn->query($sql);
			$error = $conn->error;
			$conn->close();

			return $error ? array ('sql error' => $error) : false;
		}

		static public function Validate($row)
		{
			$errors = array();
			

			if(!is_numeric($row['Order_id'])) $errors['Order_id'] = " is required and must be a number";
			if(!is_numeric($row['Product_id'])) $errors['Product_id'] = "is required and must be a number";
			

			return count($errors) > 0 ? $errors : false ;
		}

	}







