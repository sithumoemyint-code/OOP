<?php

namespace Controllers\Admin;

use Models\CategoryModel;


class AdminCategoryController
{
	public $category;

	public function __construct()
	{
		$this->category = new CategoryModel;
	}

	public function index()
	{
		$obj = $this->category->getProducts();
		var_dump($obj);
	}
}