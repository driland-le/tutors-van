<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;

use Encore\Admin\Facades\Admin;

use Encore\Admin\Layout\Content;

class TutorController extends Controller {

	public function Index() {
		return Admin::content(function (Content $content) {

				$content->header('I am robot...');
				$content->description('This page to management tutor of Van...');

				// $content->row(Dashboard::title());

				// $content->row(function (Row $row) {

				// 		$row->column(4, function (Column $column) {
				// 				$column->append(Dashboard::environment());
				// 			});

				// 		$row->column(4, function (Column $column) {
				// 				$column->append(Dashboard::extensions());
				// 			});

				// 		$row->column(4, function (Column $column) {
				// 				$column->append(Dashboard::dependencies());
				// 			});
				// 	});
			});
	}
}
