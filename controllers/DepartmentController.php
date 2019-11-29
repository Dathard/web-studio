<?php 

class DepartmentController
{

	public function actionList()
	{
		$page = 'department';

		$level = "";

		$departmentsList = Department::getDepartmentsList();

		require_once(ROOT.'/views/departments/index.php');

		return true;
	}

	public function actionAjaxList()
	{
		$level = "";

		$departmentsList = Department::getDepartmentsList();

		require_once(ROOT.'/views/departments/modals/departments-modal-list-data.php');

		return true;
	}

	public function actionNew()
	{
		$level = "";
		
		$departmentsList = Department::newDepartment($_POST);

		require_once(ROOT.'/views/departments/department-element.php');

		return true;
	}

}