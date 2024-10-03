<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Review extends Model
{
    use HasFactory;

    protected $table = 'review';

    protected $fillable = [
        'pesan_review',
        'foto',
        'user_id',
        'barang_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function barang()
    {
        return $this->belongsTo(Barang::class, 'barang_id');
    }

    public function scopeFilter(Builder $query, array $filters): void{
        if ($filters['search'] ?? false){
            $query->whereHas('barang', function($query) use ($filters){
                $query->where('nama', 'like', '%'.$filters['search'].'%');
            });

            $query->orWhereHas('user', function($query) use ($filters){
                $query->where('nama', 'like', '%'.$filters['search'].'%');
            });
        }
    }
}
