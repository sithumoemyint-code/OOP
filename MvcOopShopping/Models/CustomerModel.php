<?php

namespace Models;


class CustomerModel extends BaseModel
{
	public function getProducts()
	{
		$sql = "SELECT * FROM customers";
		$result = $this->mysqli->query($sql);
		$products = $result->fetch_all(MYSQLI_ASSOC);
		return $products;
	}
}