<?php 

class CustomerController 
{
	
	public function actionList()
	{
		$page = 'customers';

		$departmentsList = Department::getDepartmentsList();

		$customersList = Customer::getCustomersList();

		require_once(ROOT.'/views/customers/index.php');

		return true;
	}

}