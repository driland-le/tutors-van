<?php

namespace App\Site\Controllers;

use App\Http\Controllers\Controller;
use App\Introduce;

class IntroduceController extends Controller {

	protected $introduce;

	// protected $config;

	/**
	 * __construct introduce
	 */
	public function __construct(Introduce $introduce) {
		$this->introduce = $introduce->getIdentifier();
	}

	/**
	 * index show home page
	 *
	 * @return view
	 */
	public function index() {
		var_dump($this->introduce);
		die;
		return view('site.introduce', [array('introduce' => $this->introduce)]);
	}

}
