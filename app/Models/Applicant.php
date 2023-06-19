<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    protected $fillable = ['research_id'];
    protected $table = 'arsys_event_applicant';
    use HasFactory;
}
