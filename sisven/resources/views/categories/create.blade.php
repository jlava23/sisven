@extends('layouts.app')

@section('content')
    <h1>Crear Nueva Categoría</h1>

    <form action="{{ route('categories.store') }}" method="POST">
        @csrf
        <label for="name">Nombre:</label>
        <input type="text" id="name" name="name" required>

        <label for="description">Descripción:</label>
        <textarea id="description" name="description"></textarea>
        
        <button type="submit">Crear</button>
    </form>
@endsection