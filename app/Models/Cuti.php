<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Cuti extends Model
{
    protected $table = 'cuti';

    protected $fillable = [
        'user_id',
        'jenis',
        'sub_jenis',
        'tanggal_mulai',
        'tanggal_selesai',
        'alasan',
        'file',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
