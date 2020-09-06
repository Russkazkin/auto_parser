<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Progress extends Component
{
    public $car;

    public function getProgress()
    {
        $this->car = session('car');
    }

    public function render()
    {
        return view('livewire.progress')->with(['car' => $this->car]);
    }
}
