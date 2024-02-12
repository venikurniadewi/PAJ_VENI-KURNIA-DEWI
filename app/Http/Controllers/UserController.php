<?php

namespace App\Http\Controllers;

use App\Models\U_StudentModel;
use App\Models\U_TeacherModel;
use App\Models\U_AdminModel;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function viewStudentUser()
    {
        // Mengambil semua data dari model U_StudentModel
        $data = U_StudentModel::all();
        // Mengirim data ke view 'Uv_Student'
        return view('Uv_Student', ['data' => $data]);
    }

    public function viewTeacherUser()
    {
        // Mengambil semua data dari model U_TeacherModel
        $data = U_TeacherModel::all();
        // Mengirim data ke view 'Uv_Teacher'
        return view('Uv_Teacher', ['data' => $data]);
    }

    public function viewAdminUser()
    {
        // Mengambil semua data dari model U_AdminModel
        $data = U_AdminModel::all();
        // Mengirim data ke view 'Uv_Admin'
        return view('Uv_Admin', ['data' => $data]);
    }
}
