<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Post;

class PostGet extends Component
{
    public function render()
    {

        $data = Post::where('enabled', 1)->orderByDesc('created_at')->get();

        return view('livewire.post-get', compact('data'));
    }
}
