<?php

use Illuminate\Routing\Router;

Router::group([
		'namespace' => config('site.constants.common.routes.namespace'),
	],

function (Router $route) {
		$route->get('giới-thiệu-về-trung-tâm.html', 'IntroduceController@index')->name('site.introduce');
	}
);
