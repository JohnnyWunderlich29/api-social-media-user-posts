<?php

namespace App\Livewire;

use GuzzleHttp\Client;
use Livewire\Attributes\Title;
use Livewire\Component;

class UserApi extends Component
{
    public $users;

    public $text;
    public $title = 'Users API';

    public function mount()
    {
        $this->dummyAPI();
    }

    public function dummyAPI()
    {
        $client = new Client();

        $response = $client->get('https://dummyapi.io/data/v1/user?limit=10', [
            'headers' => [
                'app-id' => '651e17b3cc00f8af52684385',
                'Content-type' => 'application/json',
                'Accept' => 'application/json',
            ]
        ]);

        $this->users = json_decode($response->getBody(), true);
    }

    public function eventUserCard(string $id)
    {
        $this->text = $id;
        $this->dispatch('userid', id: $id);
    }
    
    #[Title('Users')]
    public function render()
    {
        return view('livewire.user-api');
    }
}
