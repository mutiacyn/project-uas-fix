<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

// app/Models/Division.php
class Division extends Model
{
    protected $table = 'divisions';
    protected $fillable = ['nama_divisi', 'keterangan'];

    public function karyawans()
{
    return $this->hasMany(Karyawan::class);
}

}

