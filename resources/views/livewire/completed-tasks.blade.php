<div class="card tasks-card">
    <div class="card-body justify-content-center text-center">
        <h1 class="text-xl font-bold mb-8">Completed Tasks</h1>

        <p class="card-separator"></p>

        <ul class="task-list">
            @foreach($tasks as $key => $task)
                <div x-data="{ open: false }">
                    <li @click="open = true" class="task">
                        <div class="ml-4 text-xs inline-flex items-center font-bold leading-sm uppercase px-3 py-1 bg-green-200 text-green-700 rounded-full mb-2">
                            <span class="task-completed-icon"><i class="fas fa-check"></i></span>
                            <span class="task-completed-date"> Finished : {{ $task->completed_at }}</span>
                        </div>

                         title : {{ $task->title }} - detail :  {{ $task->detail }}
                    </li>

                    <ul x-show.transition.in.duration.150ms="open" @click.away="open = false" x-cloak class="flex flex-wrap justify-center">
                        <li wire:click="returnTask({{$task->id}})" @click="open = false" class="task-buttons flex justify-center items-center w-8 h-8 rounded-lg bg-blue-500 text-white mr-2 mb-2"><i class="fas fa-undo-alt"></i></li>
                        <li wire:click="deleteTask({{$task->id}})" @click="open = false" class="task-buttons flex justify-center items-center w-8 h-8 rounded-lg bg-red-700 text-white mr-2 mb-2"><i class="fas fa-trash-alt"></i></li>
                    </ul>
                </div>
            @endforeach
        </ul>
    </div>
</div>

<style>
    [x-cloak] { display: none; }
</style>
