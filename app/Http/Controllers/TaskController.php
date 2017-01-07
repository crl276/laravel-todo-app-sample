<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    //

    protected $tasks;
    
    public function __construct()
    {
    	$this->middleware('auth');
    }

    public function index(Request $request)
    {
    	return view('tasks.index');
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
}
