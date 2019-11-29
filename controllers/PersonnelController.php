<?php 

class PersonnelController
{
	
	public function actionList()
	{
		$page = 'personnel';

		$level = "";

		$departmentsList = Department::getDepartmentsList();

		$personnelList = Personnel::getPersonnelList();

		require_once(ROOT.'/views/personnel/index.php');

		return true;
	}

	public function actionDepartment($idDepartment)
	{
		$page = 'personnel';

		$level = "../";

		$departmentsList = Department::getDepartmentsList();

		$personnelList = Personnel::getPersonnelListOfDepartment($idDepartment);

		require_once(ROOT.'/views/personnel/department.php');

		return true;
	}

	public function actionCard($idPersonnel)
	{
		$page = 'personnel';

		$level = "";

		$personnelData = Personnel::getPersonnelData($idPersonnel);

		$accounting = Personnel::getAccounting($idPersonnel);

		if ( !count($accounting) ) {
			return 404;
		}

		require_once(ROOT.'/views/personnel/card.php');

		return true;
	}

	public function actionNew()
	{
		$level = "";
		
		$personnelData = Personnel::newEmployee($_POST);

		require_once(ROOT.'/views/personnel/personnel-element.php');

		return true;
	}

}