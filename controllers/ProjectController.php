<?php 

class ProjectController
{
	
	public function actionList()
	{
		$page = 'projects';

		$priceList = PriceList::getlists();

		$projectsList = Project::getProjectsList();

		require_once(ROOT.'/views/projects/index.php');

		return true;
	}

	public function actionPackage($idPackage)
	{
		$page = 'projects';

		$priceList = PriceList::getlists();

		$projectsList = Project::getAListOfProjectsByPackage($idPackage);

		require_once(ROOT.'/views/projects/package.php');

		return true;
	}

	public function actionCard($idProject)
	{
		$page = 'projects';

		$projectData = Project::getProjectData($idProject);

		require_once(ROOT.'/views/projects/card.php');

		return true;
	}

	public function actionNew()
	{
		$projectData = Project::newProject($_POST);

		require_once(ROOT.'/views/projects/project-element.php');

		return true;
	}

}