<?php

namespace App\Http\Livewire;

use App\Models\Task;
use Livewire\Component;

class CreateTask extends Component
{
    public $title;
    public $detail;

    protected $rules = [
        'detail' => 'required|max:100|string',
        'title' => 'required|max:50|string'
    ];

    public function submit()
    {
        $this->validate();

        $this->createTask();

        $this->title = '';
        $this->detail = '';

        $this->emit('taskAdded');
    }

    public function createTask()
    {
        Task::create([
            'title' => $this->title,
            'detail' => $this->detail
        ]);
    }

    public function render()
    {
        return view('livewire.create-task')
            ->layout('layouts.base');
    }
}
