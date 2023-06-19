<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Research;


class EventApplicant extends Model
{
    protected $fillable = [];
    protected $table = 'arsys_event_applicant';

    use HasFactory;

    public function research(){
        return $this->belongsTo(Research::class,'research_id','id');
    }


}
