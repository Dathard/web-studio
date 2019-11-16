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

}