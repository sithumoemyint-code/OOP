<?php

namespace Controllers;

use Models\ProductModel;


class HomeController
{
	public $productModel;


	public function __construct()
	{
		$this->productModel = new ProductModel();
	}

	public function index()
	{
		echo 'There is home controllers.';

		$obj = $this->productModel->getProducts();

		print_r($obj);
	}
}
