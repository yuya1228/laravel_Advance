<?php

namespace App\Admin\Controllers;

use App\models\Shop_user;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class Shop_userController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Shop_user';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Shop_user());

        $grid->column('id', __('Id'));
        $grid->column('user_id', __('User id'));
        $grid->column('shop_id', __('Shop id'));
        $grid->column('date_start', __('Date start'));
        $grid->column('time_start', __('Time start'));
        $grid->column('sum_people', __('Sum people'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Shop_user::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('user_id', __('User id'));
        $show->field('shop_id', __('Shop id'));
        $show->field('date_start', __('Date start'));
        $show->field('time_start', __('Time start'));
        $show->field('sum_people', __('Sum people'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Shop_user());

        $form->number('user_id', __('User id'));
        $form->number('shop_id', __('Shop id'));
        $form->date('date_start', __('Date start'))->default(date('Y-m-d'));
        $form->time('time_start', __('Time start'))->default(date('H:i:s'));
        $form->number('sum_people', __('Sum people'));

        return $form;
    }
}
