<div class="w-full rounded-md bg-white shadow-md p-4 mb-4 md:mb-0">
    <div class="flex justify-center">
        <h2 class="text-lg font-bold">Tasks</h2>
    </div>

    <hr class="my-2">

    <ul class="task-list">
        @foreach($tasks as $key => $task)
            <div x-data="{ open: false }">
                <li @click="open = true" class="task flex items-center py-2">
                    <span class="task-number text-gray-600 text-lg font-semibold mr-2">{{ $task->title }}</span>
                    <span class="text-gray-500 mr-2">{{ $task->detail }}</span>
                    <div
                        class="text-xs inline-flex items-center font-bold leading-sm uppercase px-3 py-1 bg-blue-200 text-blue-700 rounded-full"
                    >
                        <span class="task-start-date">Start : {{ $task->created_at }}</span>
                    </div>
                    @if($task->updated_at !== $task->created_at)
                        <div
                            class="ml-4 text-xs inline-flex items-center font-bold leading-sm uppercase px-3 py-1 bg-orange-200 text-orange-700 rounded-full"
                        >
                            <span class="task-update-date"> Update : {{$task->updated_at }}</span>
                        </div>
                    @endif
                </li>

                <ul x-show.transition.in.duration.150ms="open" @click.away="open = false" x-cloak class="flex flex-wrap justify-center">
                    <li wire:click="taskCompleted({{$task->id}})" @click="open = false" class="task-buttons flex justify-center items-center w-8 h-8 rounded-lg bg-green-500 text-white mr-2 mb-2">
                        <i class="fas fa-check"></i>
                    </li>

                    <li wire:click="editTask({{$task->id}})" @click="open = false" class="task-buttons flex justify-center items-center w-8 h-8 rounded-lg bg-blue-500 text-white mr-2 mb-2">
                        <i class="fas fa-edit"></i>
                    </li>

                    <li wire:click="deleteTask({{$task->id}})" @click="open = false" class="task-buttons flex justify-center items-center w-8 h-8 rounded-lg bg-red-700 text-white mr-2 mb-2">
                        <i class="fas fa-trash-alt"></i>
                    </li>
                </ul>

            </div>
        @endforeach
    </ul>
</div>


<style>
    [x-cloak] { display: none; }
</style>
