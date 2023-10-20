<?php

namespace App\Livewire;

use GuzzleHttp\Client;
use Livewire\Component;

class CommentByPost extends Component
{
    public $postID;
    public $comments;

    public function mount($postid)
    {
        $this->postID = $postid;
        $this->getCommentByPost();
    }

    public function getCommentByPost()
    {

        $client = new Client();
        $response = $client->get('https://dummyapi.io/data/v1/post/'.$this->postID.'/comment', [
            'headers' => [
                'app-id' => '651e17b3cc00f8af52684385',
                'Content-type' => 'application/json',
                'Accept' => 'application/json',
            ],
        ]);

        $this->comments = json_decode($response->getBody(), true);
    }

    public function render()
    {
        return view('livewire.comment-by-post');
    }
}
