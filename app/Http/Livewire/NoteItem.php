<?php

namespace App\Http\Livewire;

use App\Models\Note;
use Livewire\Component;

class NoteItem extends Component
{

    public $note;

    protected $listeners = ['updateNote'];

    public function mount(Note $note){
        $this->note = $note;
    }

    public function updateNote(Note $note){
        if($this->note->id == $note->id){
            $this->note = $note;
        }
    }

    public function render()
    {
        return view('livewire.note-item');
    }
}
