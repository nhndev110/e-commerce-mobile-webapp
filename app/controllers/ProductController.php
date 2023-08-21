<?php

namespace app\controllers;

use app\core\BaseController;
use app\models\ManufacturerModel;
use app\models\ProductModel;
use app\services\ProductService;
use app\services\ManufacturerService;

class ProductController extends BaseController
{
	public static function index(): void
	{
		view('pages/products/list', [
			'products_list'      => (new ProductModel)->getAllProducts(),
			'manufacturers_list' => (new ManufacturerModel)->getAllManufacturers(),
		]);
	}

	public static function show($req, $res)
	{
		view('pages/products/detail', [
			'product' => (new ProductModel)->getProduct($req->id),
		])
			->clearCache('pages/products/detail.tpl');
	}
}
