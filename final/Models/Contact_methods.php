<?php
	include_once __DIR__ . '/../inc/functions.php';

	class Contact_methods {

		static public function Get($id = null)
		{
			$sql = "SELECT * FROM 2014Spring_Contact_methods
				   ";
			if($id == null){
				//	Get all records
				return fetch_all($sql);
			}else{
				// Get one record

				$sql .= " WHERE id = $id ";
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
				$sql = "Update 2014Spring_Contact_methods
							Set ContactMethodType='$row2[ContactMethodType]', Value='$row2[Value]',
								User_id='$row2[User_id]'
						WHERE id = $row2[id]
						";
			}else{
				$sql = "INSERT INTO 2014Spring_Contact_methods
						(ContactMethodType, Value, User_id)
						VALUES ('$row2[ContactMethodType]', '$row2[Value]', '$row2[User_id]' ) ";				
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
			$sql = "DELETE FROM 2014Spring_Contact_methods WHERE id = $id";
			//echo $sql;
			$results = $conn->query($sql);
			$error = $conn->error;
			$conn->close();

			return $error ? array ('sql error' => $error) : false;
		}

		static public function Validate($row)
		{
			$errors = array();
			if(empty($row['ContactMethodType'])) $errors['ContactMethodType'] = "is required";
			if(empty($row['Value'])) $errors['Value'] = "is required";

			if(!is_numeric($row['User_id'])) $errors['User_id'] = "must be a number";
			

			return count($errors) > 0 ? $errors : false ;
		}

	}







