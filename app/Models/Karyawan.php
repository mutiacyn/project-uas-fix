<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    protected $table = 'karyawan';
    protected $primaryKey = 'karyawan_id';

    protected $fillable = [
        'user_id',
        'birthday',
        'divisi',
        'jabatan',
        'gender',
        'phone',
        'alamat',
    ];

    // karyawan milik 1 user
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
