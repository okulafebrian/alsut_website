<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    protected $table = 'subjects';
    protected $primaryKey = 'id';
    protected $timestamp = true;
    protected $guarded = ['id'];

    public function kelas ()
    {
        return $this->hasMany(Kelas::class);
    }
}
