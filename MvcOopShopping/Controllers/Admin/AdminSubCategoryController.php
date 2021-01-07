<?php

namespace Controllers\Admin;

use Models\SubCategoryModel;

class AdminSubCategoryController
{
	public $subcategory;

	public function __construct()
	{
		$this->subcategory = new SubCategoryModel;
	}

	public function index()
	{
		$obj = $this->subcategory->getProducts();
		var_dump($obj);
	}
}
