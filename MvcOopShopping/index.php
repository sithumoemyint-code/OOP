<?php
require 'vendor/autoload.php';

use Controllers\HomeController;
use Controllers\ProductController;
use Controllers\Admin\AdminHomeController;
use Controllers\Admin\AdminProductController;
use Controllers\Admin\AdminCategoryController;
use Controllers\Admin\AdminSubCategoryController;
use Controllers\Customers\CustomerDetail;
use Controllers\Customers\CustomerOrder;


$homeController = new HomeController();
$productController = new ProductController();
$adminHomeController = new AdminHomeController();
$adminProductController = new AdminProductController();
$adminCategoryController = new AdminCategoryController();
$adminSubCategoryController = new AdminSubCategoryController();
$customerDetail = new CustomerDetail();
$customerOrder = new CustomerOrder();


$action = isset($_GET['action'])? $_GET['action'] : '';
$method = isset($_GET['method'])? $_GET['method'] : '';
$method1 = isset($_GET['method1'])? $_GET['method1'] : '';

switch ($action) {
	case '':
		$homeController->index();
		break;

	case 'home':
		if ($method == '') {
			$homeController->index();
		}else {
			echo '404 not found';
		}	
		break;

	case 'customers':
		if ($method == '') {
			$customerDetail->index();
		}else if ($method == 'detail') {
			echo 'List. <br>';
			$customerDetail->index();
		}else if ($method == 'order') {
			echo 'Order List <br>';
			$customerOrder->index();
		}else{
			echo '404 not found';
		}
		break;

	case 'product':
		if ($method == '') {
			$productController->index();
		}else if ($method == 'list') {
			$productController->index();
		}else if ($method == 'insert') {
			$productController->insert();
		}else {
			echo '404 not found';
		}	
		break;

	case 'admin':
		if ($method == '') {
			$adminHomeController->index();
		}else if ($method == 'product') {
			if ($method1 == 'insert') {
				$adminProductController->insert();
			}else if ($method1 == ''){
				$adminProductController->index();
			}else if ($method1 == 'list') {
				$adminProductController->index();
			}else {
				echo '404 not found';
			}
		}else if ($method == 'category') {
			if ($method1 == 'list') {
				$adminCategoryController->index();
			}else if ($method1 == 'sublist') {
				$adminSubCategoryController->index();
			}else {
				echo '404 not found';
			}
		}else {
			echo '404 not found';
		}
		break;
	
	default:
		echo '404 not found';
		break;
}