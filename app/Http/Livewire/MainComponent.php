<?php

namespace App\Http\Livewire;

use App\Models\Note;
use Livewire\Component;

class MainComponent extends Component
{

    public $notes;

    protected $listeners = [
        'deleteNote',
        'newNote',
        'updateNote'
    ];

    public function mount(){
        $this->notes = Note::latest()->get();
    }

    public function deleteNote(Note $note){

        $index = $this->notes->search(function($item) use ($note){
            return $item->id == $note->id;
        });
        $this->notes->forget($index);
        $note->delete();
    }

    public function newNote(Note $note){
        $this->notes->prepend($note);
    }

    public function render()
    {
        return view('livewire.main-component');
    }
}
