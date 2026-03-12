@extends('layouts.app')
@section('content') 
<div class="container2">
<h2>Modifier la tâche</h2>
<form action="{{ route('tasks.update', $task->id) }}" method="POST">
 @csrf
 @method('PUT')
 <input type="text" name="titre" value="{{ $task->titre }}">
 <textarea name="description">{{ $task->description }}</textarea>
 <select name="statut">
 <option value="en_cours" {{ $task->statut == 'en_cours' ?
'selected' : '' }}>
 En cours
 </option>
 <option value="tremine" {{ $task->statut == 'tremine' ?
'selected' : '' }}>
 Terminé
 </option>
 </select>
<button type="submit">Mettre à jour</button>
</form>
</div>
@endsection