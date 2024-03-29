<?php

namespace App\Http\Livewire;

use Illuminate\Support\Carbon;
use Livewire\Component;
use App\Models\Task;

class CompletedTasks extends Component
{

    public $tasks;

    protected $listeners = [
        'taskAdded',
        'taskCompleted'
    ];

    public function mount()
    {
        $this->getTasks();
    }

    public function taskAdded()
    {
        $this->getTasks();
    }

    public function taskCompleted()
    {
        $this->getTasks();
    }

    public function getTasks()
    {
        $tasks = Task::where('completed_at', '!=', null)
            ->orderBy('completed_at', 'desc')
            ->get();

        foreach ($tasks as $key => $task) {
            $date = Carbon::parse($task->completed_at);
            $task->completed_at = $date->format('d/m/Y H:i');
        }

        $this->tasks = $tasks;
    }

    public function getTask($id)
    {
        $this->task = Task::find($id);
    }

    public function returnTask($id)
    {
        $this->getTask($id);
        $this->task->completed_at = null;
        $this->task->save();

        $this->mount();

        $this->emit('taskReturned');
    }

    public function deleteTask($id)
    {
        $this->getTask($id);
        $this->task->delete();

        $this->mount();
    }

    public function render()
    {
        return view('livewire.completed-tasks');
    }
}
