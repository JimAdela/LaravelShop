<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;

class UsersController extends Controller {
	use HasResourceActions;

	/**
	 * Index interface.
	 *
	 * @param Content $content
	 * @return Content
	 */
	public function index(Content $content) {
		return $content
			->header('用户列表')
			->body($this->grid());
	}

	/**
	 * Make a grid builder.
	 *
	 * @return Grid
	 */
	protected function grid() {
		$grid = new Grid(new User());
		$grid->id('ID')->sortable();
		$grid->name('用户名');
		$grid->email('邮箱');
		$grid->email_verified('已验证邮箱')->display(function ($value) {
			return $value ? '是' : '否';
		});
		$grid->created_at('注册时间');

		$grid->disableCreateButton();
		$grid->actions(function ($actions) {
			$actions->disableView();

			$actions->disableDelete();

			$actions->disableEdit();
		});

		$grid->tools(function ($tools) {
			$tools->batch(function ($batch) {
				$batch->disableDelete();
			});
		});
		return $grid;
	}

}
