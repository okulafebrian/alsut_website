<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tutor extends Model
{
    use HasFactory;

    protected $table = 'tutors';
    protected $primaryKey = 'id';
    protected $timestamp = true;
    protected $guarded = ['id'];

    public function kelas ()
    {
        return $this->hasMany(Kelas::class);
    }

}
