<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;
use Auth;

class CreatePost extends Component
{
    public $body;
    public function render()
    {
        return view('livewire.create-post');
    }
    public function createPost()
    {
        Post::create([
            'user_id' => Auth::user()->id,
            'body' => $this->body
        ]);

        $this->body = "";
        $this->emit('postCreated');
    }
}
