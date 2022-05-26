<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PIC extends Model
{
    use HasFactory;

    protected $table = 'p_i_c_s';
    protected $primaryKey = 'id';
    protected $timestamp = true;
    protected $guarded = ['id'];

    public function kelas ()
    {
        return $this->hasMany(Kelas::class);
    }
}
