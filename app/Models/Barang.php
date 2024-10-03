<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Barang extends Model
{
    use HasFactory;

    protected $table = 'barang';  // Specify the table name

    protected $fillable = [
        'nama',
        'harga',
        'ukuran',
        'deskripsi',
        'foto',  // Include this if the foto field is present
    ];

    public function pembelian()
    {
        return $this->hasMany(Pembelian::class);
    }

    public function review()
    {
        return $this->hasMany(Review::class);
    }
}
