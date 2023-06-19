<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Research;
use App\Models\Faculty;
use App\Models\SupervisorScore;

class ResearchSupervisor extends Model
{
    use HasFactory;
    protected $fillable = ['research_id', 'supervisor_id', 'role', 'bypass'];
    protected $table = 'arsys_research_supervisor';

    public function faculty(){
        return $this->belongsTo(faculty::class, 'supervisor_id','id' );
    }

    public function research(){
        return $this->belongsTo(Research::class, 'research_id', 'id');
    }

    public function supervisorScore(){
        return $this->belongsTo(SupervisorScore::class, 'supervisor_id', 'id');
    }
}
