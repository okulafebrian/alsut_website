<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tutee extends Model
{
    use HasFactory;

    protected $table = 'tutees';
    protected $primaryKey = 'id';
    protected $timestamp = true;
    protected $guarded = ['id'];

}
