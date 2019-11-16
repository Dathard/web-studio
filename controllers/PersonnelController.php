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

}