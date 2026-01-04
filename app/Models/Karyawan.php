<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use App\Models\Division;
use App\Models\Position;
use App\Models\User;

class Karyawan extends Model
{
    protected $table = 'karyawan';
    protected $primaryKey = 'karyawan_id';

    protected $fillable = [
        // 'karyawan_id',
        'user_id',
        'id_staff',
        'birthday',
        'divisi_id',
        'jabatan_id',
        'gender',
        'phone',
        'alamat',
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function divisi()
    {
        return $this->belongsTo(Division::class);
    }
    
    public function jabatan()
    {
        return $this->belongsTo(Position::class);
    }
    
}
