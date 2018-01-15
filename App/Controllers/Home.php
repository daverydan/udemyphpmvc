<?php

namespace App\Controllers;

use Core\View;
use Core\Controller;

/**
 * Home Controller
 */
class Home extends Controller {

	/**
	 * Before filter
	 * 
	 * @return void
	 */
	protected function before()
	{
		echo '(before) ';
		// return false; // simulates a middleware > check logged in
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
		// Data Vars
		$name = 'Danny';
		$colors = ['red', 'green', 'blue'];

		View::render('home/index.php', compact('name', 'colors'));
		// 	[
		// 	'name'	=> 'Danny',
		// 	'colors'	=> ['red', 'green', 'blue']
		// ]
	}
}