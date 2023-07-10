<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peserta extends Model
{
    use HasFactory;

    protected $table = 'peserta';
    protected $primarykey = 'id';

    protected $fillable = [
        'nama',
        'alamat',
        'jenis_kelamin',
        'asal_sekolah',
        'kelas'
    ];
}
