<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use Encore\Admin\Layout\Row;

class HomeController extends Controller {
	public function index() {
		return Admin::content(function (Content $content) {

				$content->header('Dashboard');
				$content->description('Main page...');

				$content->row(view('admin.dashboard.index'));

				// 	$content->row(function (Row $row) {

				// 			$row->column(4, function (Column $column) {
				// 					$column->append(Dashboard::environment());
				// 				});

				// 			$row->column(4, function (Column $column) {
				// 					$column->append(Dashboard::extensions());
				// 				});

				// 			$row->column(4, function (Column $column) {
				// 					$column->append(Dashboard::dependencies());
				// 				});
				// 		});
			});
	}
}
