<?php

namespace App\Http\Controllers;
use App\Models\Question;
use Illuminate\Http\Request;
use Symfony\Component\CssSelector\XPath\Extension\FunctionExtension;

class QuestionController extends Controller
{

    public function index()
    {
        $questions = Question::all();
        return view ('questions.index')->with('questions', $questions);
    }

    public function create()
    {
        return view('questions.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        Question::create($input);
        return redirect('question')->with('flash_message', 'Question Added!');
    }

    public function show($id)
    {
        $question = Question::find($id);
        return view('questions.show')->with('questions', $question);
    }

    public function edit($id)
    {
        $question = Question::find($id);
        return view('questions.edit')->with('questions', $question);
    }

    public function update(Request $request, $id)
    {
        $question = Question::find($id);
        $input = $request->all();
        $question->update($input);
        return redirect('question')->with('flash_message', 'Question Updated!');
    }

    public function destroy($id)
    {
        Question::destroy($id);
        return redirect('question')->with('flash_message', 'Question deleted!');
    }

    
}


