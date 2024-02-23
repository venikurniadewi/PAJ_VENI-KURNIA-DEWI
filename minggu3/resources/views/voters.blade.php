<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voter</title>
</head>
<!-- Bagian tampilan untuk menampilkan data pemilih dalam sebuah tabel HTML -->
<body>
    <!-- Tabel dengan border yang diatur menjadi 1 -->
    <table border="1">
        <!-- Perulangan untuk setiap objek pemilih dalam variabel $voter -->
        @foreach ($voter as $vote)
            <!-- Baris tabel untuk setiap objek pemilih -->
            <tr>
                <!-- Kolom untuk menampilkan ID pemilih -->
                <td> {{$vote->id}} </td>
                <!-- Kolom untuk menampilkan nama pemilih -->
                <td> {{$vote->name}} </td> 
                <!-- Kolom untuk menampilkan alamat surel pemilih -->
                <td> {{$vote->email}} </td>
                <!-- Kolom untuk menampilkan alamat pemilih -->
                <td> {{$vote->address}} </td>
            </tr>
        @endforeach
    </table>
</body>
</html>