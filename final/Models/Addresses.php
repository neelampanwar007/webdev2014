<?php
	include_once __DIR__ . '/../inc/functions.php';

	class Addresses  {

		static public function Get($id = null)
		{
			$sql = "select a.addresses Addresses,a.City City, a.State State,a.Zip Zip,a.Country Country,
			k.name AddressType,concat(u.FirstName,' ',u.LastName) User from 2014Spring_Addresses a
            join 2014Spring_Keywords k on a.addressType = k.id
              join 2014Spring_Users u on a.users_id = u.id
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
				$sql = "Update 2014Spring_Addresses
							Set Addresses='$row2[Addresses]', City='$row2[City]',
								State='$row2[State]', Zip='$row2[Zip]', AddressType='$row2[AddressType]',Users_id='$row2[Users_id],
								Country='$row2[Country]
						WHERE id = $row2[id]
						";
			}else{
				$sql = "INSERT INTO 2014Spring_Addresses
						(Addresses,City,State,Zip,AddressType,Users_id,Country)
						VALUES ('$row2[Addresses]', '$row2[City]', '$row2[State]', '$row2[Zip]', '$row2[AddressType]',
						'$row2[Users_id]','$row2[Country]' ) ";				
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
			$sql = "DELETE FROM 2014Spring_Addresses WHERE id = $id";
			//echo $sql;
			$results = $conn->query($sql);
			$error = $conn->error;
			$conn->close();

			return $error ? array ('sql error' => $error) : false;
		}

		static public function Validate($row)
		{
			$errors = array();
			if(empty($row['Addresses'])) $errors['Addresses'] = "is required";
			if(empty($row['City'])) $errors['City'] = "is required";

			if(!is_numeric($row['State'])) $errors['State'] = "is required";
			if(empty($row['Zip'])) $errors['Zip'] = "is required";
			if(empty($row['AddressType'])) $errors['AddressType'] = "is required";
			if(empty($row['Users_id'])) $errors['Users_id'] = "is required";
			if(!is_numeric($row['Country'])) $errors['Country'] = "is required";

			return count($errors) > 0 ? $errors : false ;
		}

	}



