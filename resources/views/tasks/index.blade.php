@extends('layouts.app')
@section('content')
<div class="container3">
<h1>Liste des tâches</h1>
<a href="{{ route('tasks.create') }}">Ajouter une tâche</a>
@foreach ($tasks as $task)
 <h3>{{ $task->titre }}</h3>
 <p>{{ $task->description }}</p>
 <p>{{ $task->statut }}</p>
 <a href="{{ route('tasks.edit', $task->id) }}">Modifier</a>
 <form action="{{ route('tasks.destroy', $task->id) }}"
method="POST">
 @csrf
 @method('DELETE')
 <button type="submit">Supprimer</button>
 </form>
@endforeach
</div>
@endsection