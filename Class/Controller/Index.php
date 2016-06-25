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



		// Load the welcome view
		$this->content = new \Micro\View('Index/Index');
	}
}