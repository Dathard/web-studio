<?php 

class Personnel
{
	
	public static function getPersonnelList()
	{
		$db = Db::getConnection();

		$sql = "SELECT * FROM personnel ORDER BY id_personnel DESC";
		$result = $db->query($sql);

		$personnelList = array();

		while ( $row = $result->fetch_assoc() ) {
			array_push($personnelList, array(
				'id'			=>	$row['id_personnel'],
				'full-name'		=>	$row['last_name'].' '.$row['name'].' '.$row['surname'],
				'id_department'	=>	$row['id_department'],
				'position'		=>	$row['position']
			));
		}

		return $personnelList;
	}

	public static function getPersonnelData($idPersonnel)
	{
		$db = Db::getConnection();

		$sql = "SELECT
		personnel.last_name, personnel.name, personnel.surname, personnel.position, requisites.address, requisites.phone, requisites.card_number, departments.address_department
		FROM personnel
		LEFT JOIN requisites ON personnel.id_personnel=requisites.id_requisites
		LEFT JOIN departments ON personnel.id_department=departments.id_department
		WHERE personnel.id_personnel = $idPersonnel";

		$result = $db->query($sql);

		$row = $result->fetch_assoc();

		return array(
			'full-name'			=>	$row['last_name'].' '.$row['name'].' '.$row['surname'],
			'phone'				=>	$row['phone'],
			'position'			=>	$row['position'],
			'address'			=>	$row['address'],
			'card_number'		=>	$row['card_number'],
			'address_department'=>	$row['address_department']
		);
	}	

	public static function getAccounting($idPersonnel)
	{
		$db = Db::getConnection();

		$sql = "SELECT
		accounting.premium, accounting.allowances, accounting.salary
		FROM requisites
		JOIN accounting ON accounting.card_number=requisites.card_number

		WHERE requisites.id_requisites = $idPersonnel";
		$result = $db->query($sql);

		$accounting = array();

		while ( $row = $result->fetch_assoc() ) {
			array_push($accounting, array(
				'premium'	=>	$row['premium'],
				'allowances'=>	$row['allowances'],
				'salary'	=>	$row['salary']
			));
		}

		return $accounting;
	}

	public static function newEmployee($data)
	{
		$lastName = addslashes(htmlspecialchars($data['last_name']));
		$name = addslashes(htmlspecialchars($data['name']));
		$surname = addslashes(htmlspecialchars($data['surname']));
		$id_department = addslashes(htmlspecialchars($data['id_department']));
		$position = addslashes(htmlspecialchars($data['position']));
		
		$address = addslashes(htmlspecialchars($data['address']));
		$phone = addslashes(htmlspecialchars($data['phone']));
		$card_number = addslashes(htmlspecialchars($data['card_number']));


		$db = Db::getConnection();

		$sql = "INSERT INTO `personnel` 
		(`last_name`, `name`, `surname`, `id_department`, `position`) 
		VALUES 
		('".$lastName."', '".$name."', '".$surname."', '".$id_department."', '".$position."');";
		$db->query($sql);

		$sql = "SELECT * FROM personnel 
		WHERE last_name = '".$lastName."' 
		AND name = '".$name."' 
		AND surname = '".$surname."' 
		AND id_department = '".$id_department."' 
		AND position = '".$position."' 
		ORDER BY id_personnel DESC";
		$result = $db->query($sql);

		$row = $result->fetch_assoc();

		$sql = "INSERT INTO `requisites` 
		(`id_requisites`, `address`, `phone`, `card_number`) 
		VALUES 
		('".$row['id_personnel']."', '".$address."', '".$phone."', '".$card_number."');";
		$db->query($sql);

		return array(
			'id'			=>	$row['id_personnel'],
			'full-name'		=>	$row['last_name'].' '.$row['name'].' '.$row['surname'],
			'position'		=>	$row['position']
		);
	}

}