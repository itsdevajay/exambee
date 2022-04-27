<?php

namespace App\Http\Controllers;
use App\Models\PY;
use Illuminate\Http\Request;

class Python extends Controller
{
    public function index()
    {
        $questions = PY::all();
        return view ('pyquestions.index')->with('questions', $questions);
    }

    public function create()
    {
        return view('pyquestions.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        PY::create($input);
        return redirect('pyquiz')->with('flash_message', 'Question Added!');
    }

    public function show($id)
    {
        $question = PY::find($id);
        return view('pyquestions.show')->with('questions', $question);
    }

    public function edit($id)
    {
        $question = PY::find($id);
        return view('pyquestions.edit')->with('questions', $question);
    }

    public function update(Request $request, $id)
    {
        $question = PY::find($id);
        $input = $request->all();
        $question->update($input);
        return redirect('pyquiz')->with('flash_message', 'Question Updated!');
    }

    public function destroy($id)
    {
        PY::destroy($id);
        return redirect('pyquiz')->with('flash_message', 'Question deleted!');
    }
}
