<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nilaiModel extends Model
{
    use HasFactory;

    protected $table = "nilai";
    protected $fillable = ['nama_matakuliah', 'nilai_mahasiswa', 'nama_mahasiswa', 'program_studi', 'semester'];

}
