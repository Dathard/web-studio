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

	public function actionCard($idCustomer)
	{
		$page = 'customers';

		$customerData = Customer::getCustomerData($idCustomer);

		$projectsList = Project::getAListOfClientProjects($idCustomer);

		require_once(ROOT.'/views/customers/card.php');

		return true;
	}

	public function actionAjaxList()
	{
		$customerData = Customer::getCustomersList();

		require_once(ROOT.'/views/customers/modals/customers-modal-list-data.php');

		return true;
	}

}