<?php

namespace Models;


class CategoryModel extends BaseModel
{
	public function getProducts()
	{
		$sql = "SELECT * FROM category";
		$result = $this->mysqli->query($sql);
		$products = $result->fetch_all(MYSQLI_ASSOC);
		return $products;
	}
}