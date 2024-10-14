@extends('layouts.app')
@extends('layouts.app')

@section('content')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="text-2xl font-bold">Editar Categoría</h1>

                    <form action="{{ route('categories.update', $category) }}" method="POST" class="mt-4">
                        @csrf
                        @method('PUT')
                        
                        <label for="name" class="block">Nombre:</label>
                        <input type="text" id="name" name="name" value="{{ $category->name }}" required class="w-full border border-gray-300 rounded p-2">

                        <label for="description" class="block mt-4">Descripción:</label>
                        <textarea id="description" name="description" class="w-full border border-gray-300 rounded p-2">{{ $category->description }}</textarea>

                        <button type="submit" class="bg-blue-700 hover:bg-blue-900 text-white font-bold py-2 px-4 rounded mt-4">Actualizar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection