<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TaskController extends Controller
{
    
    public function index(){
        $tasks = Task::all();
        return view('task.index')
            ->with('tasks',$tasks);
    }
    public function create(){
        return view('task.create');
    }
    public function store(Request $request){
        $task = new Task;
        $task->name = $request->name ;
        $task->description =$request->description;
        $task->save();
        return redirect('task');
    }
    public function edit($id){
        $task = Task::find($id);
        return view('task.edit')
            ->with('task',$task);
    }
    public function update(Request $request, $id){
        $task = Task::find($id);
        $task->name = $request->name;
        $task->description = $request->description;
        $task->save();
        return redirect('task');
    }
    public function destroy($id){
         $task = Task::find($id);
         $task->delete();
         return redirect('task');
    }
}
