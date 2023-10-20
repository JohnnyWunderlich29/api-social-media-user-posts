<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

class BaseDashboard extends Component
{
    #[Title('Dashboard')]
    public function render()
    {
        return view('livewire.base-dashboard');
    }
}
