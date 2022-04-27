<?php

namespace App\Http\Controllers;

use App\Models\JS;
use Illuminate\Http\Request;

class JsController extends Controller
{
    public function index()
    {
        $questions = JS::all();
        return view ('jsquestions.index')->with('questions', $questions);
    }

    public function create()
    {
        return view('jsquestions.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        JS::create($input);
        return redirect('jsquiz')->with('flash_message', 'Question Added!');
    }

    public function show($id)
    {
        $question = JS::find($id);
        return view('jsquestions.show')->with('questions', $question);
    }

    public function edit($id)
    {
        $question = JS::find($id);
        return view('jsquestions.edit')->with('questions', $question);
    }

    public function update(Request $request, $id)
    {
        $question = JS::find($id);
        $input = $request->all();
        $question->update($input);
        return redirect('jsquiz')->with('flash_message', 'Question Updated!');
    }

    public function destroy($id)
    {
       JS::destroy($id);
        return redirect('jsquiz')->with('flash_message', 'Question deleted!');
    }
}
