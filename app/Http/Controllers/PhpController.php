<?php

namespace App\Http\Controllers;
use App\Models\PHP;
use Illuminate\Http\Request;

class PhpController extends Controller
{
    public function index()
    {
        $questions = PHP::all();
        return view ('phpquestions.index')->with('questions', $questions);
    }

    public function create()
    {
        return view('phpquestions.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        PHP::create($input);
        return redirect('phpquiz')->with('flash_message', 'Question Added!');
    }

    public function show($id)
    {
        $question = PHP::find($id);
        return view('phpquestions.show')->with('questions', $question);
    }

    public function edit($id)
    {
        $question = PHP::find($id);
        return view('phpquestions.edit')->with('questions', $question);
    }

    public function update(Request $request, $id)
    {
        $question = PHP::find($id);
        $input = $request->all();
        $question->update($input);
        return redirect('phpquiz')->with('flash_message', 'Question Updated!');
    }

    public function destroy($id)
    {
        PHP::destroy($id);
        return redirect('phpquiz')->with('flash_message', 'Question deleted!');
    }
}
