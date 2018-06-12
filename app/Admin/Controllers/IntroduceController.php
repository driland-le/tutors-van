<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Introduce;
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
				$content->description('Introduce Page Manager');
				$content->breadcrumb(
					['text' => 'Dashboard', 'url' => '/'],
					['text' => 'User management', 'url' => '/auth/users'],
					['text' => 'Introduce']
				);
				$content->body($this->grid());
			});
	}

	/**
	 * Edit interface.
	 *
	 * @param $id
	 * @return Content
	 */
	public function edit($id) {
		return Admin::content(function (Content $content) use ($id) {

				$content->header('Introduce');
				$content->description('Introduce Page Manager');

				$content->body($this->form()->edit($id));
			});
	}

	/**
	 * Create interface.
	 *
	 * @return Content
	 */
	public function create() {
		return Admin::content(function (Content $content) {

				$content->header('Introduce');
				$content->description('Introduce Page Manager');

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
				$grid->id('Id');
				$grid->title('Title')->sortable();
				$grid->summary('Summary');
				$grid->description('Description');

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
				$form->text('title', 'Title')->rules('required|min:10');
				$form->textarea('summary', 'Summary');
				$form->ckeditor('description', 'Description');
			});
	}
}
