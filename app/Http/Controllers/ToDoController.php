<?php

namespace App\Http\Controllers;
use App\Models\ToDo;
use Illuminate\Http\Request;


class ToDoController extends Controller
{
    public function index()
    {
        $todos = ToDo::all();
        return view("todos.index", compact("todos"));
    }
    
    public function show(ToDo $todo) {
        return view("todos.show", compact("todo"));
    }
    
    public function create(ToDo $todo) {
        return view("todos.create", compact("todo"));
    }
    
    public function store(Request $request) {
        $validated = $request->validate([
            "content" => ["required", "max:255"]
          ]);
        ToDo::create([
            "content" => $validated["content"],
            "completed" => false
          ]);
        return redirect("/todos");
    }
    
    public function edit(ToDo $todo) {
        $todos = ToDo::all();
        return view("todos.edit", compact("todo"));
    }
    
    public function update(Request $request, ToDo $todo) {
        $validated = $request->validate([
            "content" => ["required", "max:255"],
            "completed" => ["boolean"]
          ]);
        $todo->content = $validated["content"];
        $todo->completed = $validated["completed"];
        $todo->save();
        return redirect("/todos");
    }

    public function destroy(ToDo $todo) {
        $todo->delete();
        return redirect("/todos");
    }
}

