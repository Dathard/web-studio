<?php 

class ProjectController
{
	
	public function actionList()
	{
		$page = 'projects';

		$level = "";

		$priceList = PriceList::getlists();

		$projectsList = Project::getProjectsList();

		require_once(ROOT.'/views/projects/index.php');

		return true;
	}

	public function actionPackage($idPackage)
	{
		$page = 'projects';

		$level = "../";

		$priceList = PriceList::getlists();

		$projectsList = Project::getAListOfProjectsByPackage($idPackage);

		require_once(ROOT.'/views/projects/package.php');

		return true;
	}

	public function actionCard($idProject)
	{
		$page = 'projects';

		$level = "";

		$projectData = Project::getProjectData($idProject);

		if ( $projectData["id"] == NULL ) {
			return 404;
		}

		require_once(ROOT.'/views/projects/card.php');

		return true;
	}

	public function actionNew()
	{
		$level = "";
		
		$projectData = Project::newProject($_POST);

		require_once(ROOT.'/views/projects/project-element.php');

		return true;
	}

}