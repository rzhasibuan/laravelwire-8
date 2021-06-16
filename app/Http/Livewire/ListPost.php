<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class ListPost extends Component
{
    protected $listeners = [
        "postCreated" => '$refresh',
    ];

    public $updateSteteId = 0;
    public $body = '';

    public function render()
    {
        return view('livewire.list-post',[
            'posts' => Post::latest()->get(),
        ]);
    }

    public function showUpdateForm($postId)
    {
        $this->updateSteteId = $postId;
        $post = Post::find($postId);
        $this->body = $post->body;
    }

    public function updatePost($postId)
    {
        $post = Post::find($postId);
        $post->body = $this->body;
        $post->save();

        // berfungsi agar state datanya tertutup kembali kerna bernilai angka 0
        $this->updateSteteId = 0;
    }
}
