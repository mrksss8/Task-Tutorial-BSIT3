<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TaskController extends Controller
{
    public function index(){

        $task_cnt = Task::all()->count();
        $tasks = Task::all();
        return view('Task.index', compact('tasks','task_cnt'));

    }

    public function create(){
        return view('Task.create');
    }

    public function edit($id){

        $task = Task::findorfail($id);
        return view('Task.edit',compact('task'));
    }

    public function update(Request $request, $id){

        $task = Task::findorfail($id);
        $task->task = $request->task;
        $task->description = $request->description;
        $task->date = $request->date;
        $task->save();

        return redirect()->route('task.index')->withStatus('Task Update Succesfully!');;
       
    }

    public function store(Request $request){


        $task = new Task;
        $task->task = $request->task;
        $task->description = $request->description;
        $task->date = $request->date;
        $task->save();


        return redirect()->route('task.index')->withStatus('Task Added Succesfully!');;
    }

    public function delete($id){

        $tasks = Task::findorfail($id);
        $tasks->delete();

        return redirect()->route('task.index')->withStatus('Task Deleted!');;

    }

}
