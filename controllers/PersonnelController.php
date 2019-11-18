<?php 

class PersonnelController
{
	
	public function actionList()
	{
		$page = 'personnel';

		$departmentsList = Department::getDepartmentsList();

		$personnelList = Personnel::getPersonnelList();

		require_once(ROOT.'/views/personnel/index.php');

		return true;
	}

	public function actionCard($idPersonnel)
	{
		$page = 'personnel';

		$personnelData = Personnel::getPersonnelData($idPersonnel);

		$accounting = Personnel::getAccounting($idPersonnel);

		require_once(ROOT.'/views/personnel/card.php');

		return true;
	}

}