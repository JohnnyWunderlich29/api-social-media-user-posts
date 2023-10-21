<?php

namespace App\Livewire;

use GuzzleHttp\Client;
use Livewire\Component;

class PostUser extends Component
{
    public $user;

    public $posts;


    public function mount($user)
    {
        $this->user = $user;
        $this->getPost();
    }

    public function getPost()
    {
        $client = new Client();
        $response = $client->get('https://dummyapi.io/data/v1/user/'.$this->user['id'].'/post', [
            'headers' => [
                'app-id' => 'YOUR_API_HERE',
                'Content-type' => 'application/json',
                'Accept' => 'application/json',
            ],
        ]);

        $this->posts = json_decode($response->getBody(), true);
    }

    public function render()
    {
        return view('livewire.post-user');
    }
}
