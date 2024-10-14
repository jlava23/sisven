<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar Categoría') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{ route('categories.update', $category) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div>
                            <label for="name">Nombre:</label>
                            <input type="text" id="name" name="name" value="{{ $category->name }}" required class="w-full border border-gray-300 rounded p-2">
                        </div>

                        <div class="mt-4">
                            <label for="description">Descripción:</label>
                            <textarea id="description" name="description" class="w-full border border-gray-300 rounded p-2">{{ $category->description }}</textarea>
                        </div>

                        <div class="mt-4">
                            <button type="submit" class="bg-blue-700 hover:bg-blue-900 text-white font-bold py-2 px-4 rounded">Actualizar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>