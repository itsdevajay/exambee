
<div class="container-fluid">
        <form action="/submitanswer" method="post">
            @csrf
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-4">
            <h4>{{Session::get('next')}}:{{ $questions->question }}</h4>
            <input value="optiona" type="radio" name="answer"> (A) <small>{{ $questions->optiona }}</small><br>
            <input value="optionb" type="radio" name="answer"> (B) <small>{{ $questions->optionb }}</small><br>
            <input value="optionc" type="radio" name="answer"> (C) <small>{{ $questions->optionc }}</small><br>
            <input value="optiond" type="radio" name="answer"> (D) <small>{{ $questions->optiond }}</small><br>
            <input value="{{ $questions->answer }}" style="visibility: hidden;" name="dbanswer">
        </div>
        <div class="col-md-5"></div>
    </div>
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-4">
            <button type="submit" style="background-color: #002147; 
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;">Next</button>
        </div>
        <div class="col-md-5"></div>

    </div>
        </form>

</div>


