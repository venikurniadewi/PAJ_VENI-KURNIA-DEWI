@extends('layouts.app') <!-- Memperluas layout 'app' -->

@section('content') <!-- Menentukan bagian konten dari layout -->

<div class="container"> <!-- Memulai div container untuk konten -->
    <h1>{{$task->name}}</h1> <!-- Menampilkan judul tugas -->
    <p>{{$task->description}}</p> <!-- Menampilkan deskripsi tugas -->

    <a href="{{url('/task')}}">Back to Task</a> <!-- Tautan untuk kembali ke halaman daftar tugas -->
</div> <!-- Penutup div container untuk konten -->

@endsection <!-- Akhir dari bagian konten dari layout -->
