<?php

namespace App\Http\Livewire\Pengumuman;

use Livewire\Component;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class Lists extends Component
{
    public $body, $title;
    
    public function render()
    {
        // $post = Post::all();
        return view('livewire.pengumuman.lists');
    }

    public function save(){
        Post::create([
            'user_id' => 5,
            'body' => $this->body,
        ]);
    }

    
}
