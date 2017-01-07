<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    //

    protected $tasks;

    public function __construct(TaskRepository $tasks)
    {
    	$this->middleware('auth');

        $this->tasks = $tasks;
    }

    public function index(Request $request)
    {
    	return view('tasks.index', [
            'tasks' => $this->tasks->forUser($request->user()),
            ]);
    }

    public function store(Request $request)
    {
    	$this->validates($request, [
    		'name' => 'required|max:255',
    	]);

    	$request->user()->tasks()->create([
    		'name' => $request->name,
    	]);

    	return redirect('/tasks');
    }

    public function destroy(Request $request, Task $task)
    {
        
    }
}
