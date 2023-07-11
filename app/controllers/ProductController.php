<?php

namespace app\controllers;

use app\core\BaseController;
use app\services\ProductService;
use app\services\ManufacturerService;

class ProductController extends BaseController
{
	public static function index(): void
	{
		view('clients/pages/products_list', [
			'data'      => [
				'products_list'      => ProductService::getProductsData(),
				'manufacturers_list' => ManufacturerService::getManufacturersData(),
			],
		]);
	}

	public static function show($req, $res)
	{
		view('clients/pages/product_detail', [
			'data' => ProductService::getProductData($req->id),
		])
			->clearCache('clients/pages/product_detail.tpl');
	}
}
