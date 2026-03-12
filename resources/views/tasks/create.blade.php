@extends('layouts.app')
@section('content')
<div class="container1">
<h2>Ajouter une tâche</h2>
<form action="{{ route('tasks.store') }}" method="POST">
 @csrf
 <input type="text" name="titre" placeholder="Titre">
 <textarea name="description" placeholder="Description"></textarea>
 <select name="statut">
 <option value="en_cours">En cours</option>
 <option value="tremine">Terminé</option>
 </select>
 <button type="submit">Ajouter</button>
</form>
</div>
@endsection
