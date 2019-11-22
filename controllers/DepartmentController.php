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

	public function actionAjaxList()
	{
		$departmentsList = Department::getDepartmentsList();

		require_once(ROOT.'/views/departments/modals/departments-modal-list-data.php');

		return true;
	}

}