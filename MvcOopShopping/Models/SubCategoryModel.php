<?php

namespace Models;


class SubCategoryModel extends BaseModel
{
	public function getProducts()
	{
		$sql = "SELECT sub_categories.*, category.name FROM sub_categories LEFT JOIN category ON sub_categories.cat_id = category.id";
		$result = $this->mysqli->query($sql);
		$products = $result->fetch_all(MYSQLI_ASSOC);
		return $products;
	}
}