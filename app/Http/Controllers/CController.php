<?php

namespace App\Http\Controllers;

use App\Models\Clanguage;
use Illuminate\Http\Request;

class CController extends Controller
{
    public function index()
    {
        $questions = Clanguage::all();
        return view ('cques.index')->with('questions', $questions);
    }

    public function create()
    {
        return view('cques.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        Clanguage::create($input);
        return redirect('cquiz')->with('flash_message', 'Question Added!');
    }

    public function show($id)
    {
        $question = Clanguage::find($id);
        return view('cques.show')->with('questions', $question);
    }

    public function edit($id)
    {
        $question = Clanguage::find($id);
        return view('cques.edit')->with('questions', $question);
    }

    public function update(Request $request, $id)
    {
        $question = Clanguage::find($id);
        $input = $request->all();
        $question->update($input);
        return redirect('cquiz')->with('flash_message', 'Question Updated!');
    }

    public function destroy($id)
    {
        Clanguage::destroy($id);
        return redirect('cquiz')->with('flash_message', 'Question deleted!');
    }
}
