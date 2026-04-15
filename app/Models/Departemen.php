<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Karyawan;

class Departemen extends Model
{
    
    protected $table = 'departemen'; 
    protected $primarykey = 'id_departemen';
    protected $fillable = ['nama_departemen'];
    public $timestamps = false;

    public function karyawans()
    {
        return $this->hasMany(Karyawan::class);
    }
}
