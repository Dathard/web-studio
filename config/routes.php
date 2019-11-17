<?php 

return array(
	'projects' => 'project/list',

	'price-list' => 'priceList/list',

	'departments' => 'department/list',

	'personnel' => 'personnel/list',

	'customers' => 'customer/list',
	'customer/([0-9]+)' => 'customer/card/$1',

	'' => 'project/list'
);