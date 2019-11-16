<?php 

class DepartmentController
{

	public function actionList()
	{
		$page = 'department';

		$departmentsList = Department::getDepartmentsList();

		require_once(ROOT.'/views/departments/index.php');

		return true;
	}

}