<?php

namespace Models;


class ProductModel extends BaseModel
{
	public function getProducts()
	{
		$sql = "SELECT * FROM pro";
		$result = $this->mysqli->query($sql);
		$products = $result->fetch_all(MYSQLI_ASSOC);
		return $products;
	}
}