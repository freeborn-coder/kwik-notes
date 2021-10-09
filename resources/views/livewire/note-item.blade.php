<div class="border border-gray-200 p-4 shadow rounded-lg flex flex-col justify-between">
    <div class="font-semibold text-lg flex justify-between">
        <h4>{{ $note->title }}</h4>
        <div class="relative">
            <span class="cursor-pointer text-xl"
                onclick="this.nextElementSibling.classList.toggle('hidden')">&#8942;</span>

            <div class="shadow-lg rounded-md bg-white p-4
                text-gray-500 font-normal z-10 absolute right-0 hidden w-[120px]">
                <ul>
                    <li
                        onclick="document.getElementById('noteModal{{$note->id}}').classList.toggle('hidden')"
                        class="mb-2 cursor-pointer hover:bg-gray-100">Edit</li>
                    <li wire:click="$emitUp('deleteNote','{{$note->id}}')" class="cursor-pointer hover:bg-gray-100">Delete</li>
                </ul>
            </div>
        </div>
    </div>
    <div>
        <p class="cursor-pointer"
            onclick="document.getElementById('noteModal{{$note->id}}').classList.toggle('hidden')">
            {{ $note->body }}
        </p>
    </div>
    <div>
        <p class="text-gray-500 mt-2">2021-10-06</p>
    </div>

    <!-- edit note modal -->
    <livewire:note-modal mode="edit" :note="$note" modal_id="noteModal{{$note->id}}" />
</div>
