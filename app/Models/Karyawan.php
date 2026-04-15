<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Departemen;

class Karyawan extends Model
{
    public $timestamps = false;

    protected $table = 'karyawan';
    protected $primarykey = 'ID';
    public $incrementing = true;
    protected $keyType = 'int';      
    protected $fillable = ['nama', 'posisi'];

    public function departemen()
    {
        return $this->belongsTo(Departemen::class, 'id_departemen', 'id_departemen');
    }
}

