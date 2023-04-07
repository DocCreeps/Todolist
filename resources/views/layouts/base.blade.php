@extends('layouts.app')

@section('content')

    <main>
            <div class="mx-auto grid grid-cols-3 gap-4">
                <div class="bg-gray-400 shadow-md rounded-md p-4">
                    <!-- Contenu de la première carte -->
                    @livewire('index-tasks')
                </div>
                <div class="bg-gray-400 shadow-md rounded-md p-4">
                    <!-- Contenu de la deuxième carte -->
                    {{ $slot }}
                    @livewire('edit-task')
                </div>
                <div class="bg-gray-400 shadow-md rounded-md p-4">
                    <!-- Contenu de la troisième carte -->
                    @livewire('completed-tasks')
                </div>
            </div>
    </main>

@endsection
