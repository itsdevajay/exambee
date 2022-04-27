<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\CController;
use App\Http\Controllers\HtmlController;
use App\Http\Controllers\CssController;
use App\Http\Controllers\PhpController;
use App\Http\Controllers\JsController;
use App\Http\Controllers\Python;
use App\Http\Controllers\CplusController;






/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});
Route::get("/home",[HomeController::class,"index"]);

Route::get('/quizmanagess', function () {
    return view('admin.quizmanagess');
});


Route::get("/redirects",[HomeController::class,"redirects"]);
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function()
{
    return view('dashboard');
})->name('dashboard');




Route::resource('/question', QuestionController::class);

Route::resource('/question', QuestionController::class);


Route::get('/answerDesk', function () {
    return view('answers.answerDesk');
});
Route::get('/questions', function () {
    return view('questions');
});
Route::get('/start', function () {
    return view('answers.start');
});
Route::get('/end', function () {
    return view('answers.end');
});

Route::any('/startquiz',[QuizController::class ,'startquiz']);
Route::any('/submitanswer',[QuizController::class ,'submitanswer']);

Route::resource('/cquiz', CController::class);
Route::resource('/htmlquiz', HtmlController::class);
Route::resource('/cssquiz', CssController::class);
Route::resource('/phpquiz', PhpController::class);
Route::resource('/jsquiz', JsController::class);
Route::resource('/pyquiz', Python::class);
Route::resource('/cplusquiz', CplusController::class);