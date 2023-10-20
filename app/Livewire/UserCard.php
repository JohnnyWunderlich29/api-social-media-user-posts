<?php

namespace App\Livewire;

use GuzzleHttp\Client;
use Livewire\Attributes\Title;
use Livewire\Attributes\Url;
use Livewire\Component;

class UserCard extends Component
{

    #[Url('user/id={id}')]
    public $id = '';

    public $user;

    public function mount()
    {
        $client = new Client();
        try{
            $response = $client->get('https://dummyapi.io/data/v1/user/' . $this->id, [
                'headers' => [
                    'app-id' => '651e17b3cc00f8af52684385',
                    'Content-type' => 'application/json',
                    'Accept' => 'application/json',
                ],
            ]);

            $this->user = json_decode($response->getBody(), true);
        } catch (\Exception $e) {
            redirect()->to('/users/api');
        }
    }

    #[Title('User')]
    public function render()
    {
        return view('livewire.user-card')->title('User ' . $this->user['firstName'] . ' ' . $this->user['lastName']);
    }
}
