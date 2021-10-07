<?php

namespace App\Http\Livewire;

use App\Models\Note;
use Livewire\Component;

class NoteItem extends Component
{

    public $note;

    function __construct($note)
    {
        $this->note = $note;
    }

    public function render()
    {
        return view('livewire.note-item');
    }
}
