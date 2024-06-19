<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Transport;

class TransportController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Transport';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Transport());
            
        $grid = new Grid(new Transport());
        $grid->column('id', __('Id'));
        $grid->column('email', __('Email'));
        $grid->column('status', __('Status'));
        $grid->column('type', __('Type'));
        $grid->column('category', __('Category'));
        $grid->column('breed', __('Breed'));
        $grid->column('weight', __('Weight'));
        $grid->column('height', __('Height'));
        $grid->column('age', __('Age'));
        $grid->column('quantity', __('Quantity'));
        $grid->column('p_name', __('P name'));
        $grid->column('p_phone', __('P phone'));
        $grid->column('p_email', __('P email'));
        $grid->column('p_addr', __('P addr'));
        $grid->column('p_addr2', __('P addr2'));
        $grid->column('p_state', __('P State'));
        $grid->column('p_district', __('P District'));
        $grid->column('p_location', __('P Location'));
        $grid->column('d_name', __('D name'));
        $grid->column('d_phone', __('D phone'));
        $grid->column('d_email', __('D email'));
        $grid->column('d_addr', __('D addr'));
        $grid->column('d_addr2', __('D addr2'));
        $grid->column('d_state', __('D State'));
        $grid->column('d_district', __('D District'));
        $grid->column('d_location', __('D Location'));
        $grid->column('company_id', __('Company id'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));
        $grid->filter(function ($filter) {

            // Sets the range query for the created_at field
            $filter->between('created_at', 'Created Time')->datetime();
        });
        $grid->filter(function ($filter) {

            // Sets the range query for the created_at field
            $filter->between('updated_at', 'Updated Time')->datetime();
        });
        $grid->filter(function ($filter) {

            // Sets the range query for the created_at field
            $filter->in('status', 'status');
        });
       
      
        
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
        $show = new Show(Transport::findOrFail($id));
        
        $show->field('id', __('Id'));
        $show->field('email', __('Email'));
        $show->field('status', __('Status'));
        $show->field('type', __('Type'));
        $show->field('category', __('Category'));
        $show->field('breed', __('Breed'));
        $show->field('weight', __('Weight'));
        $show->field('height', __('Height'));
        $show->field('age', __('Age'));
        $show->field('quantity', __('Quantity'));
        $show->field('p_name', __('P name'));
        $show->field('p_phone', __('P phone'));
        $show->field('p_email', __('P email'));
        $show->field('p_addr', __('P addr'));
        $show->field('p_addr2', __('P addr2'));
        $show->field('p_state', __('P State'));
        $show->field('p_district', __('P District'));
        $show->field('p_location', __('P Location'));
        $show->field('d_name', __('D name'));
        $show->field('d_phone', __('D phone'));
        $show->field('d_email', __('D email'));
        $show->field('d_addr', __('D addr'));
        $show->field('d_addr2', __('D addr2'));
        $show->field('d_state', __('D State'));
        $show->field('d_district', __('D District'));
        $show->field('d_location', __('D Location'));
        $show->field('company_id', __('Company id'));


        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Transport());
        $form->email('email', __('Email'));
        $form->number('status', __('Status'));
        $form->text('type', __('Type'));
        $form->text('category', __('Category'));
        $form->text('breed', __('Breed'));
        $form->number('weight', __('Weight'));
        $form->number('height', __('Height'));
        $form->number('age', __('Age'));
        $form->number('quantity', __('Quantity'));
        $form->text('p_name', __('P name'));
        $form->text('p_phone', __('P phone'));
        $form->text('p_email', __('P email'));
        $form->textarea('p_addr', __('P addr'));
        $form->textarea('p_addr2', __('P addr2'));
        $form->text('p_state', __('P state'));
        $form->text('p_district', __('P district'));
        $form->text('p_location', __('P location'));
        $form->text('d_name', __('D name'));
        $form->text('d_phone', __('D phone'));
        $form->text('d_email', __('D email'));
        $form->textarea('d_addr', __('D addr'));
        $form->textarea('d_addr2', __('D addr2'));
        $form->text('d_state', __('D state'));
        $form->text('d_district', __('D district'));
        $form->text('d_location', __('D location'));
       
        $form->number('company_id', __('Company id'));

        return $form;
    }
}
