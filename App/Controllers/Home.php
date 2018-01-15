<?php

namespace App\Controllers;

/**
 * Home Controller
 */
class Home extends \Core\Controller {

	/**
	 * Before filter
	 * 
	 * @return void
	 */
	protected function before()
	{
		echo '(before) ';
		return false; // simulates a middleware > check logged in
	}

	/**
	 * After filter
	 * 
	 * @return void
	 */
	protected function after()
	{
		echo ' (after)';
	}

	/**
	 * Show index page
	 * 
	 * @return void
	 */
	public function indexAction()
	{
		echo 'HomeController @ index()';
	}
}