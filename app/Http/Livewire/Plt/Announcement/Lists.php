<?php

namespace App\Http\Livewire\Plt\Announcement;

use Livewire\Component;
use App\Models\Plt\Announcement;

class Lists extends Component
{
    protected $listeners = ['refresh_Announcement_List'];
    public function render()
    {
        $announcements = Announcement::all();
        return view('livewire.plt.announcement.lists', ['announcements' => $announcements]);
    }
    public function refresh_Announcement_List(){
        $this->render();
    }
    public function delete($announcementId){
        Announcement::find($announcementId)->delete();
    }
}
