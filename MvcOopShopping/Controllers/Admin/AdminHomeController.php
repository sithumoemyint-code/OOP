<?php

namespace Controllers\Admin;

use Models\ProductModel;


class AdminHomeController
{
	public $productModel;


	public function __construct()
	{
		$this->productModel = new ProductModel();
	}

	public function index()
	{
		echo 'Welcome to Admin';
	}
}
