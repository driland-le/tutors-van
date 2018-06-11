<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use App\Introduce;
use Encore\Admin\Controllers\ModelForm;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;

class IntroduceController extends Controller {
	use ModelForm;

	/**
	 * Index interface.
	 *
	 * @return Content
	 */
	public function index() {
		return Admin::content(function (Content $content) {
				$content->header('Introduce');
				$content->description('description');
				$content->body(
					$this->form()->edit()
				);
				// $grid->title('title');
				// $grid->created_at();
				// $grid->updated_at();
			});
	}

	/**
	 * Edit interface.
	 *
	 * @return Content
	 */
	public function edit() {
		return Admin::content(function (Content $content) {

			});
	}

	/**
	 * Create interface.
	 *
	 * @return Content
	 */
	public function create() {
		return Admin::content(function (Content $content) {

				$content->header('header');
				$content->description('description');

				$content->body($this->form());
			});
	}

	/**
	 * Make a grid builder.
	 *
	 * @return Grid
	 */
	protected function grid() {
		return Admin::grid(Introduce::class , function (Grid $grid) {

				$grid->id('ID')->sortable();

				$grid->created_at();
				$grid->updated_at();
			});
	}

	/**
	 * Make a form builder.
	 *
	 * @return Form
	 */
	protected function form() {
		return Admin::form(Introduce::class , function (Form $form) {

				$form->display('title', 'Title');
				$form->display('summary', 'Summary');
				$form->display('description', 'Description');

				$form->display('created_at', 'Created At');
				$form->display('updated_at', 'Updated At');
			});
	}
}
