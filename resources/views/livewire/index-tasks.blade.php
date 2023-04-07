<div class="md:w-1/3 w-full rounded-md bg-white shadow-md p-4 mb-4 md:mb-0">
    <div class="flex justify-center">
        <h2 class="text-lg font-bold">Tasks</h2>
    </div>

    <hr class="my-2">

    <ul class="task-list">
        @foreach($tasks as $key => $task)
            <div x-data="{ open: false }">
                <li @click="open = true" class="task flex items-center py-2">
                    <span class="task-number text-gray-600 text-lg font-semibold mr-2">{{ $task->title }}</span>
                    <span class="text-gray-500">{{ $task->detail }}</span>
                </li>

                <ul x-show.transition.in.duration.150ms="open" @click.away="open = false" x-cloak>
                    <li wire:click="taskCompleted({{$task->id}})" @click="open = false" class="task-buttons text-center py-2 px-3 rounded-lg bg-green-500 text-white mr-2 mb-2"><i class="fas fa-check"> </i> Complete</li>
                    <li wire:click="editTask({{$task->id}})" @click="open = false" class="task-buttons text-center py-2 px-3 rounded-lg bg-blue-500 text-white mr-2 mb-2"><i class="fas fa-edit"></i> Edit</li>
                    <li wire:click="deleteTask({{$task->id}})" @click="open = false" class="task-buttons text-center py-2 px-3 rounded-lg bg-red-700 text-white mr-2"><i class="fas fa-trash-alt"></i> Delete</li>
                </ul>

            </div>
        @endforeach
    </ul>
</div>


<style>
    [x-cloak] { display: none; }
</style>
