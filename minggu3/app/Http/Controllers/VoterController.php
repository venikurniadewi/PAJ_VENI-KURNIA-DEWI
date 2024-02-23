<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Import fasad DB dari Laravel untuk bekerja dengan database
use Illuminate\Support\Facades\DB;
// Menggunakan model Voter dari namespace App\Models
use App\Models\Voter;

class VoterController extends Controller
{
    //
    // Metode untuk menampilkan data pemilih
    public function viewVoter()
    {
        // 
        // Mengambil semua data dari tabel 'voters' menggunakan Query Builder
        $voter = DB::table('voters')->get();
        
        // Mengambil semua data pemilih dari model Voter
        $voter = Voter::all();
        // Mengembalikan tampilan 'voters' dengan menggunakan data pemilih yang sudah diambil
        return view('voters', compact('voter'));
    }
}
