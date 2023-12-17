<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Entities;

class EntityController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Entities';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Entities());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('thumbnail', __('Thumbnail'));
        $grid->column('preview', __('Preview'));
        $grid->column('categoryId', __('CategoryId'));
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
        $show = new Show(Entities::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('thumbnail', __('Thumbnail'));
        $show->field('preview', __('Preview'));
        $show->field('categoryId', __('CategoryId'));
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
        $form = new Form(new Entities());

        $form->text('name', __('Name'));
        $form->text('thumbnail', __('Thumbnail'));
        $form->text('preview', __('Preview'));
        $form->number('categoryId', __('CategoryId'));

        return $form;
    }
}
