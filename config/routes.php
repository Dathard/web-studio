<?php 

return array(
	'projects/package/([0-9]+)' => 'project/package/$1',
	'projects' => 'project/list',
	'project/([0-9]+)' => 'project/card/$1',
	'project/new' => 'project/new',

	'price-list' => 'priceList/list',

	'departments/ajax' => 'department/ajaxList',
	'departments' => 'department/list',
	'department/new' => 'department/new',

	'personnel/([0-9]+)' => 'personnel/card/$1',
	'personnel' => 'personnel/list',

	'customers/ajax' => 'customer/ajaxList',
	'customers' => 'customer/list',
	'customer/([0-9]+)' => 'customer/card/$1',
	'customer/new' => 'customer/new',

	'' => 'project/list'
);