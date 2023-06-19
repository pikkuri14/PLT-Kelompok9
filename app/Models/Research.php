<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ResearchSupervisor;
use App\Models\Student;

class Research extends Model
{
    protected $table = 'arsys_research';
    use HasFactory;

    public function supervisor(){
        return $this->hasMany(ResearchSupervisor::class, 'research_id', 'id');
    }
    public function student(){
        return $this->belongsTo(Student::class, 'student_id', 'id');
    }
}
