<?php

namespace App\Http\Controllers;
use App\Models\Question;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function startquiz()
    {

        Session::put("next",'1');
        Session::put("wrong",'0');
        Session::put("correct",'0');

        $question = Question::all()->first();
        return view('answers.answerDesk')->with(['questions'=>$question]);
    }

    public function submitanswer(Request $request)
    {
        $next=Session::get('next');
        $wrong=Session::get('wrong');
        $correct=Session::get('correct');

        $next+=1;

        if($request->dbanswer==$request->answer)
        {
            $correct=+1;
        }
        else{
            $wrong=+1;
        }

        Session::put("next",$next);
        Session::put("wrong",$wrong);
        Session::put("correct",$correct);

        $i=0;
        $questions=Question::all();

        foreach ($questions as $question)
        {
            $i++;
            if ($questions->count() < $next) {
                return view('answers.end');
            }
            if ($i==$next){
                return view('answers.answerDesk')->with(['questions'=>$question]);
            }
        }
    }


}
