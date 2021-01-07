<?php

namespace Models;


class OrderModel extends BaseModel
{
	public function getProducts()
	{
		$sql = "SELECT orders.*, customers.id AS cid, customers.name, customers.email FROM orders LEFT JOIN customers ON orders.customer_id = customers.id";
		$result = $this->mysqli->query($sql);
		$products = $result->fetch_all(MYSQLI_ASSOC);
		return $products;
	}
}