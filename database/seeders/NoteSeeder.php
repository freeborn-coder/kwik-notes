<?php

namespace Database\Seeders;

use App\Models\Note;
use Illuminate\Database\Seeder;

class NoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Note::create([
            'title' => 'Note 1',
            'body' => 'This is the body of note 1'
        ]);
        Note::create([
            'title' => 'Note 2',
            'body' => 'This is the body of note 1'
        ]);
        Note::create([
            'title' => 'Note 3',
            'body' => 'This is the body of note 1'
        ]);
    }
}
