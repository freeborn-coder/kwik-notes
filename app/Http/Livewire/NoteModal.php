<?php

namespace App\Http\Livewire;

use App\Models\Note;
use Livewire\Component;

class NoteModal extends Component
{

    public $noteId, $modal_id;
    public $title, $body;

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

    public function saveNote($title, $body){

        if($this->mode == 'edit'){
            Note::where('id',$this->noteId)->update(['title'=>$this->title,'body'=>$this->body]);
        }else if($this->mode == 'create'){
            Note::create(['title'=>$this->title,'body'=>$this->body]);
        }
    }

    public function render(){
        return view('livewire.note-modal');
    }
}
