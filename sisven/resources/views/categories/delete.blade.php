@extends('layouts.app')

@section('content')
    <h1>Eliminar Categoría</h1>
    
    <p>¿Estás seguro de que deseas eliminar la categoría <strong>{{ $category->name }}</strong>?</p>
    <p><strong>Descripción:</strong> {{ $category->description }}</p>

    <form action="{{ route('categories.destroy', $category) }}" method="POST">
        @csrf
        @method('DELETE')

        <button type="submit" onclick="return confirm('¿Realmente deseas eliminar esta categoría?');">Eliminar</button>
        <a href="{{ route('categories.index') }}">Cancelar</a>
    </form>
@endsection