<?php 

class PriceListController
{
	
	public function actionList()
	{
		$page = 'price-list';

		$priceList = PriceList::getlists();

		require_once(ROOT.'/views/price-list/index.php');

		return true;
	}

	public function actionNewCategory()
	{
		$projectData = PriceList::newCategory($_POST);

		return true;
	}

	public function actionNewPackage()
	{
		$projectData = PriceList::newPackage($_POST);

		return true;
	}

}