<?php 

class Department
{
	
	public static function getDepartmentsList()
	{
		$db = Db::getConnection();

		$sql = 'SELECT * FROM departments';
		$result = $db->query($sql);

		$departmentsList = array();

		while ( $row = $result->fetch_assoc() ) {

			$sql = 'SELECT COUNT(*) FROM personnel WHERE id_department = '.$row['id_department'];
			$personnel = $db->query($sql);
			$personnel = $personnel->fetch_assoc();

			$sql = 'SELECT COUNT(*) FROM projects WHERE id_department = '.$row['id_department'].' AND status = 0';
			$unfinishedProjects = $db->query($sql);
			$unfinishedProjects = $unfinishedProjects->fetch_assoc();


			array_push($departmentsList, array(
				'id'					=>	$row['id_department'],
				'address'				=>	$row['address'],
				'site'					=>	$row['site'],
				'amount_of_workers'		=>	$personnel['COUNT(*)'],
				'unfinished_projects'	=> 	$unfinishedProjects['COUNT(*)']
			));
		}

		return $departmentsList;
	}

}