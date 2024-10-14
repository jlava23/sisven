@extends('layouts.app')

@section('content')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="text-2xl font-bold">Eliminar Categoría</h1>
                    <p class="mt-4">¿Estás seguro de que deseas eliminar la categoría "{{ $category->name }}"?</p>

                    <form action="{{ route('categories.destroy', $category) }}" method="POST" class="mt-4">
                        @csrf
                        @method('DELETE')

                        <div class="mt-4">
                            <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                                Confirmar Eliminación
                            </button>
                            <a href="{{ route('categories.index') }}" class="bg-gray-300 hover:bg-gray-500 text-black font-bold py-2 px-4 rounded ml-2">
                                Cancelar
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection