<?php

namespace App\Http\Controllers;
use App\Models\Diary;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class DiaryController extends Controller
{
    public function index()
    {
        $diaries = Diary::all();
        return view("diaries.index", compact("diaries"));
    }

    public function create(Diary $diaries) {
        return view("diaries.create", compact("diaries"));
    }

    public function show(Diary $diary) {
        return view("diaries.show", compact("diary"));
    }

    public function store(Request $request) {
        $validated = $request->validate([
            "title" => ["required", "max:100"],
            "body" => ["required", "max:255"],
            "date" => ["required", Rule::date()->format('Y-m-d')]
          ]);
        Diary::create([
            "title" => $validated["title"],
            "body" => $validated["body"],
            "date" => $validated["date"],

          ]);
        return redirect("/diary");
    }

    public function edit(Diary $diary) {
        $diaries = Diary::all();
        return view("diaries.edit", compact("diary"));
    }
    
    public function update(Request $request, Diary $diary) {
        $validated = $request->validate([
            "title" => ["required", "max:100"],
            "body" => ["required", "max:255"],
            "date" => ["required", Rule::date()->format('Y-m-d')]
          ]);
        $diary->title = $validated["title"];
        $diary->body = $validated["body"];
        $diary->date = $validated["date"];
        $diary->save();
        return redirect("/diary");
    }
}
