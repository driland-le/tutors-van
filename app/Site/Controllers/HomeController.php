<?php

namespace App\Site\Controllers;

use App\Http\Controllers\Controller;

class HomeController extends Controller {

	/**
	 * __construct int contruction of this controller
	 */
	public function __construct() {

	}
	/**
	 * index show home page
	 *
	 * @return view
	 */
	public function index() {
		return view('site.index');
	}

}
