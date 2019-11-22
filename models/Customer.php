<?php 

class Customer
{

	public static function getCustomersList()
	{
		$db = Db::getConnection();

		$sql = "SELECT * FROM customers ORDER BY id_customer DESC";
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
	
	public static function getCustomerData($idCustomer)
	{
		$db = Db::getConnection();

		$sql = "SELECT * FROM customers WHERE id_customer = $idCustomer";
		$result = $db->query($sql);

		$row = $result->fetch_assoc();

		return array(
			'full-name'	=>	$row['last_name'].' '.$row['name'].' '.$row['surname'],
			'phone'		=>	$row['phone'],
			'email'		=>	$row['email']
		);
	}

	public static function newCustomer($data)
	{
		$db = Db::getConnection();

		$sql = "INSERT INTO `customers` 
		(`last_name`, `name`, `surname`, `email`, `phone`) 
		VALUES 
		('".$data['last_name']."', '".$data['name']."', '".$data['surname']."', '".$data['email']."', '".$data['phone']."');";

		$db->query($sql);

		$sql = "SELECT * FROM customers 
		WHERE last_name = '".$data['last_name']."' 
		AND name = '".$data['name']."' 
		AND surname = '".$data['surname']."' 
		AND email = '".$data['email']."' 
		AND phone = '".$data['phone']."' 
		ORDER BY id_customer DESC LIMIT 1";

		$result = $db->query($sql);

		$row = $result->fetch_assoc();

		return array(
			'id'		=>	$row['id_customer'],
			'full-name'	=>	$row['last_name'].' '.$row['name'].' '.$row['surname'],
			'phone'		=>	$row['phone'],
			'email'		=>	$row['email']
		);
	}
	
}