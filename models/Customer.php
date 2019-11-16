<?php 

class Customer
{

	public static function getCustomersList()
	{
		$db = Db::getConnection();

		$sql = "SELECT * FROM customers";
		$result = $db->query($sql);

		$customersList = array();

		while ( $row = $result->fetch_assoc() ) {
			array_push($customersList, array(
				'id'		=>	$row['id_customer'],
				'full-name'	=>	$row['last_name'].' '.$row['name'].' '.$row['surname'],
				'phone'		=>	$row['phone'],
				'email'		=>	$row['email']
			));
		}

		return $customersList;
	}
	
	
}