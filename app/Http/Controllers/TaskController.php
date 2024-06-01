<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    protected $table = 'tasks';
    public function index(){
        $task = Task::all();
        return view('tasks.index')->with('task',$task);
    }

    public function create(){
        return view('tasks.create');
    }

    public function store(Request $request){
        $task = new Task();
        $task->title = $request->title;
        $task->description = $request->description;
        $task->save();
        return redirect()->route('tasks.index');
    }

    public function edit($id)
    {
        $task = Task::findOrFail($id);
        return view('tasks.edit')->with('task',$task);
    }

    public function update(Request $req, $id)
    {
        $task = Task::findOrFail($id);
        $task->title = $req->title;
        $task->description = $req->description;
        $task->save();
        return redirect()->route('tasks.index');
    }

    public function destroy(Request $req, $id)  
    {
        $task = Task::findOrFail($id);
        $task->delete();
        return redirect()->route('tasks.index');
    }

    public function completed($id)
    {
        $task = Task::findOrFail($id);
        $task->completed = true;
        $task->save();
        return redirect()->route('tasks.index');
    }
    public function reset($id)
    {
        $task = Task::findOrFail($id);
        $task->completed = false;
        $task->save();
        return redirect()->route('tasks.index');
    }
}
