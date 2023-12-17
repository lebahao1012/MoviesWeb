<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Videos;

class VideosController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Videos';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Videos());

        $grid->column('id', __('Id'));
        $grid->column('title', __('Title'));
        $grid->column('description', __('Description'));
        $grid->column('filePath', __('FilePath'));
        $grid->column('isMovie', __('IsMovie'));
        $grid->column('uploadDate', __('UploadDate'));
        $grid->column('releaseDate', __('ReleaseDate'));
        $grid->column('views', __('Views'));
        $grid->column('duration', __('Duration'));
        $grid->column('season', __('Season'));
        $grid->column('episode', __('Episode'));
        $grid->column('entityId', __('EntityId'));
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
        $show = new Show(Videos::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('title', __('Title'));
        $show->field('description', __('Description'));
        $show->field('filePath', __('FilePath'));
        $show->field('isMovie', __('IsMovie'));
        $show->field('uploadDate', __('UploadDate'));
        $show->field('releaseDate', __('ReleaseDate'));
        $show->field('views', __('Views'));
        $show->field('duration', __('Duration'));
        $show->field('season', __('Season'));
        $show->field('episode', __('Episode'));
        $show->field('entityId', __('EntityId'));
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
        $form = new Form(new Videos());

        $form->text('title', __('Title'));
        $form->textarea('description', __('Description'));
        $form->text('filePath', __('FilePath'));
        $form->switch('isMovie', __('IsMovie'));
        $form->datetime('uploadDate', __('UploadDate'))->default(date('Y-m-d H:i:s'));
        $form->date('releaseDate', __('ReleaseDate'))->default(date('Y-m-d'));
        $form->number('views', __('Views'));
        $form->text('duration', __('Duration'));
        $form->number('season', __('Season'));
        $form->number('episode', __('Episode'));
        $form->number('entityId', __('EntityId'));

        return $form;
    }
}
