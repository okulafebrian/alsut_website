<?php

namespace App\Models;

use App\Http\Controllers\TutorController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;

    protected $table = 'kelas';
    protected $primaryKey = 'id';
    protected $timestamp = true;
    protected $guarded = ['id'];

    public function tutor ()
    {
        return $this->belongsTo(Tutor::class, 'tutor_id', 'id');
    }

    public function pic ()
    {
        return $this->belongsTo(Tutor::class, 'pic_id', 'id');
    }

    public function subject ()
    {
        return $this->belongsTo(Tutor::class, 'subject_id', 'id');
    }
}
