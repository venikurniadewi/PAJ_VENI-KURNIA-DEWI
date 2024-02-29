@extends('layouts.app') <!-- Memperluas layout 'app' -->

@section('content') <!-- Menentukan bagian konten dari layout -->

<div>
    <h1>Task List</h1> <!-- Judul halaman daftar tugas -->
    @foreach($tasks as $task) <!-- Melakukan iterasi untuk setiap tugas -->
    <div class="task-item"> <!-- Memulai div untuk setiap item tugas -->
        <strong>Name : {{ $task->name }}</strong> <!-- Menampilkan nama tugas -->
        <p>Description : {{ $task->description }}</p> <!-- Menampilkan deskripsi tugas -->
        <a href="{{url("/task/{$task->id}")}}" class="view-link">View</a> <!-- Tautan untuk melihat detail tugas -->
        <a href="{{url('task/' . $task->id . '/edit')}}" class="edit-link">Edit</a> 
        <!-- Tautan untuk mengedit tugas -->
        <form action="{{url('/task',[$task->id])}}" method="POST" class="delete-form"> <!-- Form untuk menghapus tugas -->
            @method('delete') <!-- Metode HTTP DELETE -->
            @csrf <!-- Cross-site request forgery protection token -->
            <button type="submit">Delete</button> <!-- Tombol untuk menghapus tugas -->
        </form>
    </div> <!-- Penutup div untuk setiap item tugas -->
    @endforeach
</div> <!-- Penutup div untuk daftar tugas -->

@endsection <!-- Akhir dari bagian konten dari layout -->
