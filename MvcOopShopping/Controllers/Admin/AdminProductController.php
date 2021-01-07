<?php

namespace Controllers\Admin;

use Models\ProductModel;

class AdminProductController
{
	public $productModel;


	public function __construct()
	{
		$this->productModel = new ProductModel();
	}


	public function index()
	{
		$products = $this->productModel->getProducts();
		echo '<pre>' . var_dump($products) . '</pre>';
	}

	public function insert()
	{
		echo 'Admin Product Insert. Thanks!';
	}
}
