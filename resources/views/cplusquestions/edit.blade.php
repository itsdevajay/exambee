@extends('cplusquestions.layout')
@section('content')

    <div class="card">
        <div class="card-header">HTML Question</div>
        <div class="card-body">

            <form action="{{ url('cplusquiz/' .$questions->id) }}" method="post">
                {!! csrf_field() !!}
                @method("PATCH")
                <input type="hidden" name="id" id="id" value="{{$questions->id}}" id="id" />
                <label>Question</label></br>
                <input type="text" name="question" id="question" value="{{$questions->question}}" class="form-control"></br>
                <label>OptionA</label></br>
                <input type="text" name="optiona" id="optiona" value="{{$questions->optiona}}" class="form-control"></br>
                <label>OptionB</label></br>
                <input type="text" name="optionb" id="optionb" value="{{$questions->optionb}}" class="form-control"></br>
                <label>OptionC</label></br>
                <input type="text" name="optionc" id="optionc" value="{{$questions->optionc}}" class="form-control"></br>
                <label>OptionD</label></br>
                <input type="text" name="optiond" id="optiond" value="{{$questions->optiond}}" class="form-control"></br>
                <label>Answer</label></br>
                <select id="answer" name="answer" class="form-control">
                    <option value="{{$questions->optiona}}">A</option>
                    <option value="{{$questions->optionb}}">B</option>
                    <option value="{{$questions->optionc}}">C</option>
                    <option value="{{$questions->optiond}}">D</option>
                </select><br>
                <input type="submit" value="Update" class="btn btn-success"></br>
            </form>

        </div>
    </div>

@stop

