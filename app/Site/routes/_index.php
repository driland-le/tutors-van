<?php

use Illuminate\Routing\Router;

Router::group([
		'namespace' => config('site.constants.common.routes.namespace'),
	],

function (Router $route) {
		$route->get('/', 'HomeController@index');
	}
);
