<?php

namespace Models;

class BaseModel
{
	public $mysqli;

	public function __construct()
	{
		$this->mysqli = new \mysqli('localhost', 'root', '', 'shopping_cart');
		if ($this->mysqli-> connect_errno) {
			echo 'Fail to connect to database: ' . $mysqli -> connect_errno;
			exit();
		}
	}
}