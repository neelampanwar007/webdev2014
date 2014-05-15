<?php
	include_once __DIR__ . '/../inc/functions.php';
	
	class SubCategory  {

	 static public function Get($id = null)
		{
				
			$sql = "SELECT sc.id, sc.name SubCategoryName,c.name CategoryName FROM panwarn1_db.2014Spring_SubCategory sc
join 2014Spring_Catergory c on sc.Catergory_id = c.id
				   ";
			
			if($id == null)
			{
				//	Get all records
				return fetch_all($sql);
			}
			else
			{// Get one record
				$sql .= " WHERE sc.id = $id ";
				
				if(($results = fetch_all($sql)) && count($results) > 0)
				{
					return $results[0];
				}
				else
				{
					return null;
				}
			}
		}

		static public function Save(&$row)
		{
			$conn = GetConnection();

			$row2 = escape_all($row, $conn);
			if (!empty($row['id'])) {
				$sql = "Update 2014Spring_SubCategory
							Set id='$row2[id]', name='$row2[name]',
								Caterrgory_id='$row2[Catergory_id]'
						WHERE id = $row2[id]
						";
			}else{
				$sql = "INSERT INTO 2014Spring_SubCategory
						(id,name,Catergory_id)
						VALUES ('$row2[id]', '$row2[name]', '$row2[Catergory_id]' ) ";				
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
			$sql = "DELETE FROM 2014Spring_SubCategory WHERE ssc.id = $id";
			//echo $sql;
			$results = $conn->query($sql);
			$error = $conn->error;
			$conn->close();

			return $error ? array ('sql error' => $error) : false;
		}

		static public function Validate($row)
		{
			$errors = array();
			if(empty($row['id'])) $errors['id'] = "is required";
			if(empty($row['name'])) $errors['name'] = "is required";

			if(!is_numeric($row['Catergory_id'])) $errors['Catergory_id'] = "is required";
			
			return count($errors) > 0 ? $errors : false ;
		}

	}



