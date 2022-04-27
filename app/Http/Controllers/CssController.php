<?php

namespace App\Http\Controllers;

use App\Models\CSS;
use Illuminate\Http\Request;

class CssController extends Controller
{
    public function index()
    {
        $questions = CSS::all();
        return view ('cssquestions.index')->with('questions', $questions);
    }

    public function create()
    {
        return view('cssquestions.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        CSS::create($input);
        return redirect('cssquiz')->with('flash_message', 'Question Added!');
    }

    public function show($id)
    {
        $question = CSS::find($id);
        return view('cssquestions.show')->with('questions', $question);
    }

    public function edit($id)
    {
        $question = CSS::find($id);
        return view('cssquestions.edit')->with('questions', $question);
    }

    public function update(Request $request, $id)
    {
        $question = CSS::find($id);
        $input = $request->all();
        $question->update($input);
        return redirect('cssquiz')->with('flash_message', 'Question Updated!');
    }

    public function destroy($id)
    {
        CSS::destroy($id);
        return redirect('cssquiz')->with('flash_message', 'Question deleted!');
    }
}
