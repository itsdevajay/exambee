<?php

namespace App\Http\Controllers;
use App\Models\Cplus;
use Illuminate\Http\Request;

class CplusController extends Controller
{
    public function index()
    {
        $questions = Cplus::all();
        return view ('cplusquestions.index')->with('questions', $questions);
    }

    public function create()
    {
        return view('cplusquestions.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        Cplus::create($input);
        return redirect('cplusquiz')->with('flash_message', 'Question Added!');
    }

    public function show($id)
    {
        $question = Cplus::find($id);
        return view('cplusquestions.show')->with('questions', $question);
    }

    public function edit($id)
    {
        $question = Cplus::find($id);
        return view('cplusquestions.edit')->with('questions', $question);
    }

    public function update(Request $request, $id)
    {
        $question = Cplus::find($id);
        $input = $request->all();
        $question->update($input);
        return redirect('cplusquiz')->with('flash_message', 'Question Updated!');
    }

    public function destroy($id)
    {
        Cplus::destroy($id);
        return redirect('cplusquiz')->with('flash_message', 'Question deleted!');
    }
}
