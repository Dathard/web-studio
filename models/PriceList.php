<?php 

class PriceList
{

	public static function getLists()
	{
		$db = Db::getConnection();

		$sql = "SELECT * FROM category_packages";
		$result = $db->query($sql);

		$priceList = array();

		while ( $row = $result->fetch_assoc() ) {
			$sql = "SELECT * FROM price_list WHERE id_category = ".$row['id_category'];
			$packages = $db->query($sql);

			$packageList = array();

			while ( $package = $packages->fetch_assoc() ) {
				array_push($packageList, array(
					'id_package'=>	$package['id_package'],
					'package'	=>	$package['package'],
					'price'		=>	$package['price']
				));
			}

			array_push($priceList, array(
				'id_category'	=>	$row['id_category'],
				'category_name'	=>	$row['category_name'],
				'packages'		=>	$packageList
			));
		}

		return $priceList;
	}

	public static function newCategory($data)
	{
		$categoryName = addslashes(htmlspecialchars($data['category_name']));

		$db = Db::getConnection();

		$sql = "INSERT INTO `category_packages` 
		(`category_name`) 
		VALUES 
		('".$categoryName."');";

		$db->query($sql);
	}

	public static function newPackage($data)
	{
		$category = addslashes(htmlspecialchars($data['category']));
		$package = addslashes(htmlspecialchars($data['package']));
		$price = addslashes(htmlspecialchars($data['price']));

		$db = Db::getConnection();

		$sql = "INSERT INTO `price_list` 
		(`id_category`, `package`, `price`) 
		VALUES 
		('".$category."', '".$package."', '".$price."');";

		$db->query($sql);
	}

}