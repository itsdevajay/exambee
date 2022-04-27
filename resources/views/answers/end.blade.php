
<div class="container-fluid">
    <div class="row">
        <div class="4"></div>
        <div class="4">
            <label>Correct: <small>{{Session::get('correct')}}</small></label><br>
            <label>Incorrect: <small>{{Session::get('wrong')}}</small></label><br>
            <label>Result: <small>{{Session::get('correct')}}/{{Session::get('correct') + Session::get('wrong')}}</small></label><br>
            <a href="/"><button>Finish</button></a>
        </div>
        <div class="4"></div>
    </div>
</div>
<br><br>
<a href="#"><button>Home</button></a>
