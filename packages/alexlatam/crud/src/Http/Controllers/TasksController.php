<?php

namespace Alexlatam\Crud\Http\Controllers;

use Illuminate\Routing\Controller;

class TasksController extends Controller
{
    public function index()
    {
        // Code to get all the tasks
        return view('package-crud::tasks.index');
    }

    public function show()
    {
        // Code to get one task
        return view('package-crud::tasks.show');
    }

    public function create()
    {
        // Code to create the task
        return view('package-crud::tasks.create');
    }
    public function store()
    {
        // Code to store the task
        return view('package-crud::tasks.create');
    }
    public function edit()
    {
        // Code to edit the task
        return view('package-crud::tasks.edit');
    }
    public function update()
    {
        // Code to update the task
        return view('package-crud::tasks.edit');
    }
    public function delete()
    {
        // Code to delete the task
        return view('package-crud::tasks.edit');
    }
}
