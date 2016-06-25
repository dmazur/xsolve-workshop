<?php
/**
 * Index Page
 *
 * Example index page.
 *
 * @package		MicroMVC
 * @author		David Pennington
 * @copyright	(c) 2011 MicroMVC Framework
 * @license		http://micromvc.com/license
 ********************************** 80 Columns *********************************
 */
namespace Controller;

class Index extends \MyController
{
	public function run()
	{
		$productServiceFactory = new \Domain\Service\ProductServiceFactory();
		$productService = $productServiceFactory->createService();

		$this->productList = $productService->listAll();

		// Load the welcome view
		$this->content = 'Index/Index';
	}
}
