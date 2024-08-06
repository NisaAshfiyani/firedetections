<?php
// app/Models/Detection.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detection extends Model
{
    use HasFactory;

    // Nama tabel yang terkait dengan model ini
    protected $table = 'detections';

    // Atribut yang dapat diisi secara massal
    protected $fillable = [
        'image',
        'description',
        'timestamp',
    ];

    // Menggunakan tipe data tanggal untuk kolom timestamp
    protected $dates = ['timestamp'];

    // Mendapatkan akses ke kolom timestamp sebagai instance Carbon
    public function getTimestampAttribute($value)
    {
        return \Carbon\Carbon::parse($value);
    }
}
