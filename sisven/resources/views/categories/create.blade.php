<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Crear Nueva Categoría') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{ route('categories.store') }}" method="POST">
                        @csrf
                        <div>
                            <label for="name">Nombre:</label>
                            <input type="text" id="name" name="name" required class="w-full border border-gray-300 rounded p-2">
                        </div>

                        <div class="mt-4">
                            <label for="description">Descripción:</label>
                            <textarea id="description" name="description" class="w-full border border-gray-300 rounded p-2"></textarea>
                        </div>

                        <div class="mt-4">
                            <button type="submit" class="bg-green-700 hover:bg-green-900 text-white font-bold py-2 px-4 rounded">Crear</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>