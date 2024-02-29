<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TaskRequest; // Mengimpor TaskRequest untuk validasi
use App\Models\Task; // Mengimpor model Task
use App\Http\Requests\UpdateTaskRequest; // Mengimpor UpdateTaskRequest untuk validasi

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
        return view('task.show',compact('task')); // Menampilkan tampilan detail untuk suatu task
    }
    
    public function edit($id){
        $tasks= Task::findOrFail($id); // Mengambil task berdasarkan ID yang diberikan
        return view('task.edit',compact('tasks')); // Menampilkan form edit untuk task yang dipilih
    }
    

    public function update(UpdateTaskRequest $request, $id){
        $tasks= Task::findOrFail($id); // Mengambil task berdasarkan ID yang diberikan
        $tasks->update($request->all()); // Memperbarui informasi task dengan data yang diterima dari request
        return redirect("/task/{$tasks->id}"); // Mengarahkan pengguna kembali ke halaman detail task yang telah diperbarui
        
        // $validatedData = $request->validated();
        // $tasks->update($validatedData);
    }

    public function delete(Task $task){
        $task->delete(); // Menghapus task dari database
        return redirect('/task'); // Mengarahkan pengguna kembali ke halaman daftar task setelah penghapusan berhasil
    }
    
    
    // public function edit($id){
    //     $tasks= Task::findOrFail($id);
    //     return view('task.edit',compact('tasks'));
    // }

    // public function update(Request $request,$id){
    //     $tasks= Task::findOrFail($id);
    //     $tasks->update($request->all());
    //     return redirect('/task');
    // } 

    
}
