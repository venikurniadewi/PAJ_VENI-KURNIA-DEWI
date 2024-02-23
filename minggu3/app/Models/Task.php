<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    // Properti $fillable digunakan untuk menentukan atribut yang dapat diisi secara massal.
    protected $fillable = ['name', 'description'];
}
