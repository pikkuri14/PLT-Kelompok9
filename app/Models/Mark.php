<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\EventType;

class Mark extends Model
{
    use HasFactory;
    protected $fillable = ['event_id', 'event_type', 'event_date'];
    protected $table = 'arsys_event';


    function type(){
        return $this->belongsTo(EventType::class, 'event_type', 'id');
    }

}


