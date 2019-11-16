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

}