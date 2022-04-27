<?php

namespace App\Http\Controllers;
use App\Models\HTML;
use Illuminate\Http\Request;

class HtmlController extends Controller
{
    public function index()
    {
        $questions = HTML::all();
        return view ('htmlquestions.index')->with('questions', $questions);
    }

    public function create()
    {
        return view('htmlquestions.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        HTML::create($input);
        return redirect('htmlquiz')->with('flash_message', 'Question Added!');
    }

    public function show($id)
    {
        $question = HTML::find($id);
        return view('htmlquestions.show')->with('questions', $question);
    }

    public function edit($id)
    {
        $question = HTML::find($id);
        return view('htmlquestions.edit')->with('questions', $question);
    }

    public function update(Request $request, $id)
    {
        $question = HTML::find($id);
        $input = $request->all();
        $question->update($input);
        return redirect('htmlquiz')->with('flash_message', 'Question Updated!');
    }

    public function destroy($id)
    {
        HTML::destroy($id);
        return redirect('htmlquiz')->with('flash_message', 'Question deleted!');
    }
}
