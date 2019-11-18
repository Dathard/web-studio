<?php 

return array(
	'projects' => 'project/list',
	'project/([0-9]+)' => 'project/card/$1',

	'price-list' => 'priceList/list',

	'departments' => 'department/list',

	'personnel/([0-9]+)' => 'personnel/card/$1',
	'personnel' => 'personnel/list',

	'customers' => 'customer/list',
	'customer/([0-9]+)' => 'customer/card/$1',

	'' => 'project/list'
);