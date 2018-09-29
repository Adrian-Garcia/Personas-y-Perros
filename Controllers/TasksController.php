<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Task; 

class TasksController extends Controller {

    public function index() {
    	$tasks = Task::all();

    	return view('index', compact('tasks'));
    }

    public function show (Task $task) {

    	return view('show', compact('task'));
    }
}
 
/*

Estos tres sirven para Desplegar resultados
dd($id);
print($id);
echo($id);

*/ 