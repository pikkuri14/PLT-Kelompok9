<?php

namespace App\Http\Livewire\Pengumuman;

use Livewire\Component;
use App\Models\Score;

class Idx extends Component
{

    public function render()
    {
        return view('livewire.pengumuman.idx')->layout('adminlte::page');
    }
}
