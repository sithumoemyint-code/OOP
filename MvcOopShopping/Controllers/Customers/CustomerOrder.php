<?php

namespace Controllers\Customers;

use Models\OrderModel;

class CustomerOrder
{
	public $name;

	public function __construct()
	{
		$this->name = new OrderModel();
	}

	public function index()
	{
		$obj = $this->name->getProducts();
		var_dump($obj);
	}
}