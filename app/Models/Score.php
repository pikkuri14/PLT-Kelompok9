<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Mark;
use App\Models\Applicant;
use App\Models\DefenseExaminer;

class Score extends Model
{
    protected $table = 'arsys_seminar_examiner_score';
    use HasFactory;

    

    public function applicant()
    {
        return $this->belongsTo(EventApplicant::class, 'applicant_id', 'id');
    }

    public function defense(){
        return $this->belongsTo(DefenseExaminer::class,'examiner_id','id');
    }   

    public function eventType()
    {
        return $this->belongsTo(Mark::class, 'event_id', 'id');
    }

    
}
