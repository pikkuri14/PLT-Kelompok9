<?php

namespace App\Http\Livewire\Mark;

use Livewire\Component;
use App\Models\Mark;
use App\Models\Score;
use Carbon\Carbon;

class Idx extends Component
{

    
    public function render()
    {
        // Score::all()->where('id', 12);


        $score = Score::all()->where("event_id", 71)->sortBy('applicant_id');

        foreach ($score as $score2){

            $date = $score2->eventType->event_date;
            break;
        }

        $date = Carbon::parse($date)->format('j F Y');


        return view('livewire.mark.idx',
         [
          'score' => $score,
          'date' => $date,
          'atas' => $score,
          'atas1' => $score,
          'asd' => $score,
          'asd2'=> $score,
          'asd3'=> $score
         ])->layout('adminlte::page'); 
    }

    public function mount(){

        // dd(Score::all()->where('id', 354));
    }
}
