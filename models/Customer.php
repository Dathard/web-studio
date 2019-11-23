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
		$lastName = addslashes(htmlspecialchars($data['last_name']));
		$name = addslashes(htmlspecialchars($data['name']));
		$surname = addslashes(htmlspecialchars($data['surname']));
		$email = addslashes(htmlspecialchars($data['email']));
		$phone = addslashes(htmlspecialchars($data['phone']));

		$db = Db::getConnection();

		$sql = "INSERT INTO `customers` 
		(`last_name`, `name`, `surname`, `email`, `phone`) 
		VALUES 
		('".$lastName."', '".$name."', '".$surname."', '".$email."', '".$phone."');";

		$db->query($sql);

		$sql = "SELECT * FROM customers 
		WHERE last_name = '".$lastName."' 
		AND name = '".$name."' 
		AND surname = '".$surname."' 
		AND email = '".$email."' 
		AND phone = '".$phone."' 
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