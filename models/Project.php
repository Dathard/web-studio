<?php 

class Project
{
	
	public static function getProjectsList()
	{
		$db = Db::getConnection();

		$sql = "SELECT
		projects.id, projects.domain, projects.status, price_list.package, price_list.price 
		FROM projects
		LEFT JOIN price_list ON projects.id_package=price_list.id_package";

		$result = $db->query($sql);

		$projectsList = array();

		while ( $row = $result->fetch_assoc() ) {
			array_push($projectsList, array(
				'id'			=>	$row['id'],
				'domain'		=>	$row['domain'],
				'package'	=>	$row['package'],
				'price'		=>	$row['price'],
				'status'		=>	$row['status']	
			));
		}

		return $projectsList;
	}	

	public static function getAListOfClientProjects($idCustomer)
	{
		$db = Db::getConnection();

		$sql = "SELECT
		projects.id, projects.domain, projects.status, price_list.package, price_list.price 
		FROM projects
		LEFT JOIN price_list ON projects.id_package=price_list.id_package
		WHERE projects.id_customer = $idCustomer";

		$result = $db->query($sql);

		$projectsList = array();

		while ( $row = $result->fetch_assoc() ) {
			array_push($projectsList, array(
				'id'			=>	$row['id'],
				'domain'		=>	$row['domain'],
				'package'	=>	$row['package'],
				'price'		=>	$row['price'],
				'status'		=>	$row['status']	
			));
		}

		return $projectsList;
	}	

}