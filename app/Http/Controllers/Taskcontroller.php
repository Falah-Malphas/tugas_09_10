<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class Taskcontroller extends Controller
{
     // mendapatkan dan menampilkan data tugas
     public function index()
     {
         // mendapatkan data tugas dari model
         $tasks = Task::all();
         dd($tasks);
 
         // mengirim data tugas ke view
         return view('task.index', [
             'tasks' => $tasks
         ]);

     $tasks = Task::all();
     dd($tasks);
     return view('tasks.index', compact('tasks'));
     }

     public function show($id){
        $tasks = Task::findOrFail($id);
        return view('tasks.show', compact('task'));
    }

    public function list(){
        $tasks = Task::all();

        return view('task.list', compact('tasks'));
    }
}
