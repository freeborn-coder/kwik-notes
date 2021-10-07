<div class="border border-gray-200 p-4 shadow rounded-lg flex flex-col justify-between">
    <div class="font-semibold text-lg flex justify-between">
        <h4>{{ $note->title }}</h4>
        <div class="relative">
            <span class="cursor-pointer text-xl"
                onclick="this.nextElementSibling.classList.toggle('hidden')">&#8942;</span>

            <div class="shadow-lg rounded-md bg-white p-4
                text-gray-500 font-normal z-10 absolute right-0 hidden w-[120px]">
                <ul>
                    <li class="mb-2"><a href="">Edit</a></li>
                    <li><a href="">Delete</a></li>
                </ul>
            </div>
        </div>
    </div>
    <p class="cursor-pointer"
        onclick="document.getElementById('editNoteModal').classList.toggle('hidden')">
        {{ $note->body }}
    </p>
    <p class="text-gray-500 mt-2">2021-10-06</p>
</div>
