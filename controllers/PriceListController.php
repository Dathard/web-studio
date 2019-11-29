<?php 

class PriceListController
{
	
	public function actionList()
	{
		$page = 'price-list';

		$level = "";

		$priceList = PriceList::getlists();

		require_once(ROOT.'/views/price-list/index.php');

		return true;
	}

	public function actionNewCategory()
	{
		$level = "";

		$projectData = PriceList::newCategory($_POST);

		return true;
	}

	public function actionNewPackage()
	{
		$level = "";
		
		$projectData = PriceList::newPackage($_POST);

		return true;
	}

}