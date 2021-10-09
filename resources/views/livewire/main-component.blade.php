<div class="w-full sm:w-4/5 sm:ml-[20%] bg-white">
    <div>
        <div class="p-8">
            <div class="flex justify-between items-center">
                <h1 class="text-2xl font-bold">Notes</h1>
                <button
                    onclick="document.getElementById('createNoteModal').classList.toggle('hidden')"
                    class="px-4 py-2 bg-blue-500 text-white font-semibold rounded-md shadow">
                    + Create new note
                </button>
            </div>
        </div>
        <hr class="border border-gray-100">
        <div class="p-8">
            <div class="flex justify-between items-center">
                <div class="text-lg text-gray-400 w-1/2">
                    <i class="fas fa-search"></i>
                    <input type="search" name="" placeholder="search" id=""
                        class="p-2 placeholder-gray-400 rounded-md focus:outline-none w-1/2">
                </div>
                <div>
                    <button onclick="this.nextElementSibling.classList.toggle('hidden')"
                        class="px-4 py-2 font-semibold shadow border rounded">
                        <i class="fas fa-sort"></i> Sort: Chronological</button>
                    <div class="bg-white font-semibold shadow-md py-4 px-7 absolute hidden">
                        <ul class="text-gray-500">
                            <li class="mb-2"><a href="">Ascending Order</a></li>
                            <li class="mb-2"><a href="">Descending Order</a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>

        <hr class="border border-gray-100">
        <div class="p-4 sm:p-8">
            <h3 class="text-gray-500 font-semibold">PINNED PUBLIC NOTES</h3>

            <div class="grid grid-cols-2 sm:grid-cols-3 mt-3 gap-4">

                @foreach ($notes as $note)
                    <livewire:note-item :note="$note" :key="$note->id" />
                @endforeach

            </div>
        </div>

        <!-- edit note modal -->
        <livewire:note-modal mode="create" modal_id="createNoteModal" />
    </div>
</div>
