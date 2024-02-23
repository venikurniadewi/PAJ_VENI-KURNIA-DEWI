<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TaskRequest; // Mengimpor TaskRequest untuk validasi
use App\Models\Task; // Mengimpor model Task

class TaskController extends Controller
{
    public function index(){
        $tasks = Task::all();
        return view('task.index',compact('tasks')); // Menampilkan tampilan untuk menampilkan task
    }

    public function create(){
        return view('task.create'); // Menampilkan tampilan untuk create task
    }

    public function store(TaskRequest $request){
        $validatedData = $request->validated(); // Memvalidasi data task yang dikirim dari formulir
        Task::create($validatedData); // Membuat entri baru dalam tabel task menggunakan data yang divalidasi
        return redirect('/task'); // Mengalihkan pengguna ke halaman daftar task setelah task dibuat
    }

    public function show(Task $task){
        return view('task.show',compact('task'));
    }

    public function edit($id){
        $tasks= Task::findOrFail($id);
        return view('task.edit',compact('tasks'));
    }

    public function update(Request $request,$id){
        $tasks= Task::findOrFail($id);
        $tasks->update($request->all());
        return redirect('/task');
    } 

    
}
