<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Task;


class ApplicationController extends Controller
{
    public function create_user_task(Request $request){
        Task::create([
            'title' => $request->title,
            'description' => $request->description,
            'user_id' => null 
        ]);
        
        return redirect()->route('list_user_task');
    }

    public function list_user_tasks(){
        $tasks = Task::all();
        return view('list-task', compact('tasks'));
    }
}
