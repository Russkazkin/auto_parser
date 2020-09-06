<?php

namespace App\Http\Livewire;

use App\Models\Car;
use Livewire\Component;

class Progress extends Component
{
    public $progress;
    public $count;

    public $message;

    public function mount()
    {
        $this->count = Car::count();
    }

    public function getProgress()
    {
        $this->progress = Car::count() ?: 9612;
    }

    public function render()
    {

        return view('livewire.progress')->with(['progress' => $this->progress, 'count' => $this->count]);
    }
}
