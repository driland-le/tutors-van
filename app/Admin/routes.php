<?php

use Illuminate\Routing\Router;

Admin::registerAuthRoutes();

Route::group([
		'prefix'     => config('admin.route.prefix'),
		'namespace'  => config('admin.route.namespace'),
		'middleware' => config('admin.route.middleware'),
	],

function (Router $router) {
		$router->get('/', 'HomeController@index');
		$router->resource('introduce', IntroduceController::class );
		$router->resource('rule-get-class', RuleGetClassController::class );
		$router->resource('subject', SubjectController::class );
		$router->resource('class', ClassController::class );
		$router->resource('group-level', GroupLevelController::class );
		$router->resource('level', LevelController::class );
	}
);
