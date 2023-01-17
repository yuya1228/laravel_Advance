<?php

namespace App\Admin\Controllers;

use App\models\Shop;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ShopController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Shop';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Shop());

        $grid->column('id', __('Id'));
        $grid->column('area_id', __('Area id'));
        $grid->column('genre_id', __('Genre id'));
        $grid->column('shop_name', __('Shop name'));
        $grid->column('store_overview', __('Store overview'));
        $grid->column('image', __('Image'));
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
        $show = new Show(Shop::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('area_id', __('Area id'));
        $show->field('genre_id', __('Genre id'));
        $show->field('shop_name', __('Shop name'));
        $show->field('store_overview', __('Store overview'));
        $show->field('image', __('Image'));
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
        $form = new Form(new Shop());

        $form->number('area_id', __('Area id'));
        $form->number('genre_id', __('Genre id'));
        $form->text('shop_name', __('Shop name'));
        $form->textarea('store_overview', __('Store overview'));
        $form->image('image', __('Image'));

        return $form;
    }
}
