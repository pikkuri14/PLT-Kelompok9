<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Faculty;
class DefenseExaminer extends Model
{
    protected $table = 'arsys_seminar_examiner';
    use HasFactory;

    public function examiner(){
        return $this->belongsTo(Faculty::class, 'examiner_id', 'id');
    }
}
