<?php
	include_once __DIR__ . '/../inc/functions.php';
	$error=null;

	class Catergory  {

		static public function Get($id = null)
		{
			$sql = "SELECT sc.id as id,sc.name as name FROM 2014Spring_Catergory sc"
			;
					
			if($id == null){
				//	Get all records
				return fetch_all($sql);
			}else{
				// Get one record

				$sql .= " WHERE sc.id  = $id ";
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
				$sql = "Update 2014Spring_Catergory
							Set id='$row2[id]', name='$row2[name]',
								
						WHERE id = $row2[id]
						";
			}else{
				$sql = "INSERT INTO 2014Spring_Catergory
						(id,name)
						VALUES ('$row2[id]', '$row2[name]' ) ";				
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
			return array( 'id'=>null, 'name'=>null);
		}

		static public function Delete($id)
		{
			$conn = GetConnection();
			$sql = "DELETE FROM 2014Spring_Catergory WHERE id = $id";
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

			

			return count($errors) > 0 ? $errors : false ;
		}

	}



