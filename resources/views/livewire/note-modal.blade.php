<div id="{{ $modal_id }}" tabindex="-1" role="dialog" aria-hidden="true"
    wire:ignore
    class="absolute inset-0 bg-gray-700 bg-opacity-75 z-10 hidden">

    <div class="flex justify-center items-center h-full">
        <div class="w-1/2 bg-white h-2/3 rounded-lg">
            <div class="modal-head p-4 h-[11.5%] flex justify-between">
                <h3 class="font-bold text-xl text-gray-500">
                    {{ $mode == 'edit' ? 'Edit':'Create'}} Note <i class="fas fa-pen ml-2"></i>
                </h3>
                <span class="text-xl cursor-pointer text-gray-500"
                    onclick="document.getElementById('{{$modal_id}}').classList.toggle('hidden')">
                    &#10006;
                </span>
            </div>
            <hr>
            <div class="modal-body p-4 h-[87%]">

                {{-- <form action="" class="h-full"
                    wire:submit.prevent="saveNote('{{$title}}','{{$body}}')"> --}}
                <div class="h-full">

                    <input type="text" name="" id=""
                        wire:model.debounce.500ms="title"
                        class="text-xl font-bold text-gray-600 border-0 focus:outline-none w-full" placeholder="Note Title..."
                        value="{{$title}}">
                    <br>

                    <div class="text-lg text-gray-700">
                        <textarea name="" id="" rows="12"
                            wire:model.debounce.500ms="body"
                            class="w-full focus:outline-none resize-none placeholder-red-500"
                            placeholder="Note Body" required>{{$body}}</textarea>
                    </div>
                    <hr class="my-2">
                    <div class="flex justify-end">
                        <button
                        wire:click.prevent="saveNote('{{$title}}','{{$body}}')"
                            type="button"
                            class="px-4 py-2 bg-blue-500 text-white font-semibold rounded-md shadow">
                            Save
                        </button>
                    </div>
                </div>
                {{-- </form> --}}
            </div>
        </div>
    </div>
</div>
