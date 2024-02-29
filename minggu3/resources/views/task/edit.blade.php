@extends('layouts.app') <!-- Memperluas layout 'app' -->

@section('content') <!-- Menentukan bagian konten dari layout -->

<div class="container"> <!-- Memulai div container untuk konten -->
    <h2>Edit Task</h2> <!-- Judul halaman edit tugas -->
    
    <form method="POST" action="{{url("/task/{$tasks->id}") }}"> <!-- Form untuk mengirimkan pembaruan tugas -->
        @csrf <!-- Cross-site request forgery protection token -->
        @method('PUT') <!-- Metode HTTP PUT untuk pembaruan -->

        <div class="form-group">
            <label for="name">Name</label> <!-- Label untuk input nama tugas -->
            <input type="text" class="form-control" id="name" name="name" value="{{ $tasks->name }}"> <!-- Input field untuk nama tugas -->
        </div>
        <div class="form-group">
            <label for="description">Description</label> <!-- Label untuk input deskripsi tugas -->
            <input type="text" class="form-control" id="description" name="description" value="{{ $tasks->description }}"> <!-- Input field untuk deskripsi tugas -->
        </div>
        <button type="submit" class="btn btn-primary">Update</button> <!-- Tombol untuk mengirimkan pembaruan tugas -->
    </form>

    <a href="{{url('/task')}}">Back To Task</a> <!-- Tautan untuk kembali ke halaman daftar tugas -->
</div> <!-- Penutup div container untuk konten -->

@endsection <!-- Akhir dari bagian konten dari layout -->
