<div>
    @if(! empty($task))
        <div class="card task-edit-card">
            <div class="card-body bg-white text-center rounded">
                <h1 class="text-xl font-bold">Task Editing</h1>

                @error('description') <span class="text-red-500">- {{ $message }}</span> @enderror

                <form class="flex flex-col items-center mb-5" wire:submit.prevent="submit">
                    <input wire:model="title" class="form-text w-2/4 py-2 px-4 rounded-md shadow-sm border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 focus:ring-opacity-50 mb-3" type="text" placeholder="Title">
                    <input wire:model="detail" class="form-text w-2/4 py-2 px-4 rounded-md shadow-sm border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 focus:ring-opacity-50 mb-3" type="text" placeholder="Build a Todo App...">
                    <button class="btn btn-todo py-2 px-4 bg-indigo-500 text-white font-semibold rounded-md shadow-md hover:bg-indigo-700 mb-5 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-opacity-50">
                        Submit
                    </button>
                </form>
            </div>
    @endif
</div>
