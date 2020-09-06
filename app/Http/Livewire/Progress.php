<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Progress extends Component
{
    public $manufacturer;
    public $category;

    public function getProgress()
    {
        $this->manufacturer = session('manufacturer');
        $this->category = session('category');
    }

    public function render()
    {
        return view('livewire.progress')->with(['manufacturer' => $this->manufacturer, 'category' => $this->category]);
    }
}
