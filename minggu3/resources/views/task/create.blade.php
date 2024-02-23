@extends('layouts.app') <!-- Mewarisi layout dari 'layouts.app' -->

@section('content') <!-- Menentukan bagian konten dari layout -->

<div class="container">
    <h1>
        Create New Tasks <!-- Judul halaman untuk membuat tugas baru -->
    </h1>

    <form method="POST" action="{{url('/task/store')}}">
        @csrf <!-- Cross-site request forgery protection token untuk form -->

        <label form="name">Name</label> <!-- Label untuk input nama tugas -->
        <input type="text" name="name" id=""> <!-- Input field untuk nama tugas -->
        <br>
        <label for="description">Description</label> <!-- Label untuk input deskripsi tugas -->
        <textarea name="description" id="" cols="30" rows="10"></textarea> <!-- Textarea untuk deskripsi tugas -->
        <br>
        <button type="submit">Create Task</button> <!-- Tombol untuk mengirimkan formulir untuk membuat tugas -->
    </form>

    <a href="{{url('/task')}}">Back To Task</a> <!-- Link untuk kembali ke halaman daftar tugas -->
</div>

@endsection <!-- Akhir dari bagian konten dari layout -->
