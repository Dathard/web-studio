<?php 

class Project
{
	
	public static function getProjectsList()
	{
		$db = Db::getConnection();

		$sql = "SELECT
		projects.id, projects.domain, projects.status, price_list.package, price_list.price 
		FROM projects
		LEFT JOIN price_list ON projects.id_package=price_list.id_package
		ORDER BY projects.id DESC";

		$result = $db->query($sql);

		$projectsList = array();

		while ( $row = $result->fetch_assoc() ) {
			array_push($projectsList, array(
				'id'		=>	$row['id'],
				'domain'	=>	$row['domain'],
				'package'	=>	$row['package'],
				'price'		=>	$row['price'],
				'status'	=>	$row['status']	
			));
		}

		return $projectsList;
	}	

	public static function getAListOfProjectsByPackage($idPackage)
	{
		$db = Db::getConnection();

		$sql = "SELECT
		projects.id, projects.domain, projects.status, price_list.package, price_list.price 
		FROM projects
		LEFT JOIN price_list ON projects.id_package=price_list.id_package
		WHERE projects.id_package = $idPackage";

		$result = $db->query($sql);

		$projectsList = array();

		while ( $row = $result->fetch_assoc() ) {
			array_push($projectsList, array(
				'id'		=>	$row['id'],
				'domain'	=>	$row['domain'],
				'package'	=>	$row['package'],
				'price'		=>	$row['price'],
				'status'	=>	$row['status']	
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
				'id'		=>	$row['id'],
				'domain'	=>	$row['domain'],
				'package'	=>	$row['package'],
				'price'		=>	$row['price'],
				'status'	=>	$row['status']	
			));
		}

		return $projectsList;
	}	

	public static function getProjectData($idProject)
	{
		$db = Db::getConnection();

		$sql = "SELECT
		projects.id, projects.domain, price_list.package, price_list.price, departments.address_department, customers.id_customer, customers.last_name, customers.name, customers.surname
		FROM projects
		LEFT JOIN price_list ON projects.id_package=price_list.id_package
		LEFT JOIN departments ON projects.id_department=departments.id_department
		LEFT JOIN customers ON projects.id_customer=customers.id_customer
		WHERE projects.id = $idProject";

		$result = $db->query($sql);

		$row = $result->fetch_assoc();

		return array(
			'id'				=>	$row['id'],
			'domain'			=>	$row['domain'],
			'package'			=>	$row['package'],
			'price'				=>	$row['price'],
			'address_department'=>	$row['address_department'],
			'id_customer'		=>	$row['id_customer'],
			'full-name'			=>	$row['last_name'].' '.$row['name'].' '.$row['surname']
		);
	}

	public static function newProject($data)
	{
		$db = Db::getConnection();

		$sql = "INSERT INTO `projects` 
		(`id_department`, `id_package`, `id_servers`, `domain`, `id_customer`) 
		VALUES 
		('".$data['department_id']."', '".$data['package']."', '1', '".$data['domain']."', '".$data['customer_id']."');";

		$db->query($sql);

		$sql = "SELECT
		projects.id, projects.domain, projects.status, price_list.package, price_list.price 
		FROM projects
		LEFT JOIN price_list ON projects.id_package=price_list.id_package 
		WHERE projects.id_package = '".$data['package']."'
		AND projects.domain = '".$data['domain']."'
		AND projects.id_customer = '".$data['customer_id']."'
		ORDER BY projects.id DESC LIMIT 1";

		$result = $db->query($sql);

		$row = $result->fetch_assoc();

		return array(
			'id'		=>	$row['id'],
			'domain'	=>	$row['domain'],
			'package'	=>	$row['package'],
			'price'		=>	$row['price'],
			'status'	=>	$row['status']
		);
	}

}