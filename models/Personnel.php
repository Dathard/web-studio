<?php 

class Personnel
{
	
	public static function getPersonnelList()
	{
		$db = Db::getConnection();

		$sql = "SELECT * FROM personnel";
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
		WHERE personnel.id_personnel = 1";

		$result = $db->query($sql);

		$row = $result->fetch_assoc();

		return array(
			'full-name'	=>	$row['last_name'].' '.$row['name'].' '.$row['surname'],
			'phone'		=>	$row['phone'],
			'position'		=>	$row['position'],
			'address'		=>	$row['address'],
			'card_number'		=>	$row['card_number'],
			'address_department'		=>	$row['address_department']
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
				'premium'			=>	$row['premium'],
				'allowances'		=>	$row['allowances'],
				'salary'	=>	$row['salary']
			));
		}

		return $accounting;
	}

}