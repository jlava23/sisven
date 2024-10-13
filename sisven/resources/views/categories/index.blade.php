@extends('layouts.app')

@section('content')
    <h1>Categorías</h1>
    <a href="{{ route('categories.create') }}">Crear Nueva Categoría</a>

    @if (session('success'))
        <div>{{ session('success') }}</div>
    @endif

    <ul>
        @foreach ($categories as $category)
            <li>
                <strong>Nombre:</strong> {{ $category->name }} <br>
                <strong>Descripción:</strong> {{ $category->description }} <br>
                <a href="{{ route('categories.edit', $category) }}">Editar</a>
                <form action="{{ route('categories.destroy', $category) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('¿Realmente deseas eliminar esta categoría?');">Eliminar</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection