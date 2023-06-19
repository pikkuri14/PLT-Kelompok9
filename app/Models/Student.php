<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Program;

class Student extends Model
{
    protected $table = 'arsys_student';
    use HasFactory;

    public function program(){
        return $this->belongsTo(Program::class, "program_id", "id");
    }
}
