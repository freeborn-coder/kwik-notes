<div class="w-full sm:w-4/5 sm:ml-[20%] bg-white">
    <div class="p-8">
        <div class="flex justify-between items-center">
            <h1 class="text-2xl font-bold">Notes</h1>
            <button
                onclick="document.getElementById('editNoteModal').classList.toggle('hidden')"
                class="px-4 py-2 bg-blue-500 text-white font-semibold rounded-md shadow">
                + Creae new note
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
                <livewire:note-item :note="$note" />
            @endforeach

        </div>
    </div>

    <!-- edit note modal -->
    <div id="editNoteModal" tabindex="-1" role="dialog" aria-hidden="true"
        class="absolute inset-0 hidden bg-gray-700 bg-opacity-75 transition-all duration-1000 z-10">

        <div class="flex justify-center items-center h-full">
            <div class="w-1/2 bg-white h-2/3 rounded-lg">
                <div class="modal-head p-4 h-[11.5%] flex justify-between">
                    <h3 class="font-bold text-xl text-gray-500">Edit Note <i class="fas fa-pen ml-2"></i></h3>
                    <span class="text-xl cursor-pointer text-gray-500" onclick="document.getElementById('editNoteModal').classList.toggle('hidden')">&#10006;</span>
                </div>
                <hr>
                <div class="modal-body p-4 h-[87%]">
                    <p class="mb-2 font-bold text-xl text-gray-600 focus:outline-none"
                        onclick="if(this.innerText == 'Add Title...') this.innerText = ''"
                        onblur="if(!this.innerText) this.innerText = 'Add Title...'"
                        contenteditable="true">
                        Note Title
                    </p>
                    <form action="" class="h-full">
                        <div class="text-lg text-gray-800">
                            <textarea name="" id="" rows="12" class="w-full focus:outline-none resize-none" placeholder="Note Body">Lorem ipsum dolor sit amet consecteturadipisicing elit. Eum quidem eligendi natus perspiciatis! Quo, atqueexcepturi illum totam blanditiis, sequi iste vel atullam aliquam omnis hic iure dolores et.Quo, atqueexcepturi illum totam blanditiis, sequi iste vel atullam aliquam omnis hic iure dolores et.Quo, atqueexcepturi illum totam blanditiis, sequi iste vel atullam aliquam omnis hic iure dolores et.</textarea>
                        </div>
                        <hr class="my-2">
                        <div class="flex justify-end">
                            <button class="px-4 py-2 bg-blue-500 text-white font-semibold rounded-md shadow">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
