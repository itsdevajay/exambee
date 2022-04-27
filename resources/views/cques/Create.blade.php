@extends('cques.layout')
@section('content')

    <div class="card">
        <div class="card-header">Laravel Question</div>
        <div class="card-body">

            <form action="{{ url('cquiz') }}" method="post">
                @csrf
                <label>Question</label></br>
                <input type="text" name="question" id="question" class="form-control"></br>
                <label>OptionA</label></br>
                <input type="text" name="optiona" id="optiona" class="form-control"></br>
                <label>OptionB</label></br>
                <input type="text" name="optionb" id="optionb" class="form-control"></br>
                <label>OptionC</label></br>
                <input type="text" name="optionc" id="optionc" class="form-control"></br>
                <label>OptionD</label></br>
                <input type="text" name="optiond" id="optiond" class="form-control"></br>
                <label>Answer</label></br>
                <select id="answer" name="answer" class="form-control">
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                </select><br><br>
                <input type="submit" value="Save" class="btn btn-success"></br>
            </form>

        </div>
    </div>

@stop
