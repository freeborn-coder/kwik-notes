<?php

namespace App\Http\Livewire;

use App\Models\Note;
use Livewire\Component;

class MainComponent extends Component
{

    public $notes;

    function __construct()
    {
        $this->notes = Note::all();
    }

    public function render()
    {
        return view('livewire.main-component');
    }
}
