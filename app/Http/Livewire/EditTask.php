<?php

namespace App\Http\Livewire;

use App\Models\Task;
use Livewire\Component;

class EditTask extends Component
{
    public $task;
    public $detail;
    public $title;

    protected $rules = [
        'detail' => 'required|max:100|string',
        'title' => 'required|max:50|string'
    ];

    protected $listeners = [
        'editingTask'
    ];

    public function mount()
    {
        $this->getTask();
    }

    public function submit()
    {
        $this->validate();

        $this->updateTask();

        $this->task = null;

        $this->emit('taskEdited');
    }

    public function editingTask()
    {
        $this->getTask();
    }

    public function updateTask()
    {
        $this->task->title = $this->title;
        $this->task->detail = $this->detail;
        $this->task->editing = false;

        $this->task->save();
    }

    public function getTask()
    {
        $this->task = Task::where('editing', '=', true)
            ->first();

        if($this->task) {
            $this->detail = $this->task->detail;
        }
    }

    public function render()
    {
        return view('livewire.edit-task');
    }
}
