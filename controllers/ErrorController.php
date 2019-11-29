<?php 

class ErrorController
{
	public static function actionNotFound()
	{
		$page = 'error';

		$level = "../";

		require_once(ROOT.'/views/errors/not-found.php');
	}
}