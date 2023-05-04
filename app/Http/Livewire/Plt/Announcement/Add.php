<?php

namespace App\Http\Livewire\Plt\Announcement;

use Livewire\Component;
use App\Models\Plt\Announcement;
class Add extends Component
{
    public $title, $body;
    public function render(){
        return view('livewire.plt.announcement.add');
    }
    public function save(){
        Announcement::create([
            'title' => $this->title,
            'body' => $this->body,
        ]);
        $this->title = '';
        $this->body = '';
        $this->emit('refresh_Announcement_List');
    }
}
