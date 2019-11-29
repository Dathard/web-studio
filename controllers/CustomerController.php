<?php 

class CustomerController 
{
	
	public function actionList()
	{
		$page = 'customers';

		$level = "";

		$departmentsList = Department::getDepartmentsList();

		$customersList = Customer::getCustomersList();


		require_once(ROOT.'/views/customers/index.php');

		return true;
	}

	public function actionCard($idCustomer)
	{
		$page = 'customers';

		$level = "";

		$customerData = Customer::getCustomerData($idCustomer);
		
		if ( strlen($customerData["full-name"]) <= 2 ) {
			return 404;
		}

		$projectsList = Project::getAListOfClientProjects($idCustomer);

		require_once(ROOT.'/views/customers/card.php');

		return true;
	}

	public function actionAjaxList()
	{
		$level = "";

		$customerData = Customer::getCustomersList();

		require_once(ROOT.'/views/customers/modals/customers-modal-list-data.php');

		return true;
	}

	public function actionNew()
	{
		$level = "";
		
		$customerData = Customer::newCustomer($_POST);

		require_once(ROOT.'/views/customers/customer-element.php');

		return true;
	}

}