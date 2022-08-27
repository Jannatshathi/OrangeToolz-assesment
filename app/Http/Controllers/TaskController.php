<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(){
        $task = Task::all();
        return view('task.index', compact('task'));
    }

    public function store(Request $request){
        Task::create([
            'task' => $request->task,
        ]);
        return redirect()->back();
    }

    public function update(Request $request, $id){
        $task = Task::find($id);
        $task->update([
            'task' => $request->task,
        ]);
        return redirect()->back();
    }
}
