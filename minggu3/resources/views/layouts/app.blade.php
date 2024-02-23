<!DOCTYPE html> 
<html lang="en"> 
    <head> 
        <meta charset="UTF-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta http-equiv="X-UA-Compatible" content="ie=edge"> 
        <link rel="stylesheet" href="{{asset('css/styles.css')}}"> <!-- Mengimpor berkas CSS eksternal -->
        <title>Task App</title> <!-- Menetapkan judul halaman -->
    </head>
    <body> 
        <header> 
            <nav> 
                <ul> 
                    <li><a href="{{url('/task')}}">Home</a></li> <!-- Tautan ke halaman utama -->
                    <li><a href="{{url('/task/create')}}">Create Task</a></li> <!-- Tautan ke halaman pembuatan tugas -->
                </ul>
            </nav>
       </header>
        <main> 
            <div class="container"> <!-- Kontainer untuk konten dinamis -->
            @yield('content') <!-- Menampilkan konten dinamis -->
            </div>
        </main>
        <footer> 
        <p> &copy; {{date('Y')}} Task App</p> <!-- Tahun berjalan dan nama aplikasi -->
        </footer>
    </body>
</html>
