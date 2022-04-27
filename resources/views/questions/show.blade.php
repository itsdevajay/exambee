@extends('questions.layout')
@section('content')


    <div class="card">
        <div class="card-header">Laravel Question</div>
        <div class="card-body">


            <div class="card-body">
                <h5 class="card-title">Question : {{ $questions->question }}</h5>
                <p class="card-text">OptionA : {{ $questions->optiona }}</p>
                <p class="card-text">OptionB : {{ $questions->optionb }}</p>
                <p class="card-text">OptionC : {{ $questions->optionc }}</p>
                <p class="card-text">OptionD : {{ $questions->optiond }}</p>
                <p class="card-text">Answer : {{ $questions->answer }}</p>
            </div>

            </hr>

        </div>
    </div>
@endsection
