<?php

namespace App\Http\Livewire;

use App\Models\Note;
use Livewire\Component;

class NoteModal extends Component
{

    public $noteId, $modal_id;
    public $title, $body;
    public $mode = 'create';

    public function mount($mode = 'edit', $modal_id, Note $note = null, $title = '', $body = ''){
        if($note){
            $this->noteId = $note->id;
            $this->title = $note->title;
            $this->body = $note->body;
        }else {
            $this->title = $title;
            $this->body = $body;
        }

        $this->mode = $mode;
        $this->modal_id = $modal_id;
    }

    public function saveNote(){

        if($this->mode == 'edit'){
            Note::where('id',$this->noteId)->update(['title'=>$this->title,'body'=>$this->body]);
            $this->emitTo('note-item','updateNote',$this->noteId,$this->title,$this->body);
        }else if($this->mode == 'create'){
            $new = Note::create(['title' => $this->title,'body'=>$this->body]);
            $this->emitTo('main-component','newNote',$new->id);
            $this->reset();
        }
    }

    public function render(){
        return view('livewire.note-modal');
    }
}
