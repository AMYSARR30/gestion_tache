<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreTaskRequest;
use App\Http\Requests\UpdateTaskRequest;
use App\Models\Task;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
   public function index()
      {
       $tasks = Task::all();
       return view('tasks.index', compact('tasks'));
    }

    public function create()
     {
        return view('tasks.create');
    } 


    public function store(Request $request)
        {
        $request->validate([
        'titre' => 'required|string|max:255',
        'description' => 'nullable|string',
        'statut' => 'required|in:en_cours,tremine'
        ]);
        Task::create($request->all());
        return redirect()->route('tasks.index')
        ->with('success', 'Tâche ajoutée avec succès');
        }

    
    public function edit(Task $task)
 {
 return view('tasks.edit', compact('task'));
 }
 public function update(Request $request, Task $task)
 {
 $request->validate([
 'titre' => 'required|string|max:255',
 'description' => 'nullable|string',
 'statut' => 'required|in:en_cours,tremine'
 ]);
 $task->update($request->all());
 return redirect()->route('tasks.index')
 ->with('success', 'Tâche mise à jour');
 }
 public function destroy(Task $task)
 {
 $task->delete();
 return redirect()->route('tasks.index')
 ->with('success', 'Tâche supprimée');
 }
}
