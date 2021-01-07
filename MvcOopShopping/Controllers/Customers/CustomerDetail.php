<?php

namespace Controllers\Customers;

use Models\CustomerModel;


class CustomerDetail
{
	public $customer;

	public function __construct()
	{
		$this->customer = new CustomerModel();
	}

	public function index()
	{
		$obj = $this->customer->getProducts();
		var_dump($obj);
	}
}