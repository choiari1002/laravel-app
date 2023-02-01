<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TestimonialController;

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
    // welcome.blade.php
    $books = [
        'Harry Potter',
        'Laravel'
    ];
    return view('welcome', [
        'books'=>$books
    ]);
});

Route::get('/app/hello', '\App\Http\Controllers\HelloController@myTeam');
Route::get('/app/customer', '\App\Http\Controllers\CustomersController@list');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// FIXME: 밑부터 추가

// Route::resource('events', WebEventsController::class)->only(['show']);
// Route::resource('events.corporations', WebCorporationsController::class)->only(['show']);

// Route::prefix('dashboard')->group(function () {
//     Route::get('/', [AccessController::class, 'index']);
//     Route::post('/signin', [AccessController::class, 'signin']);
//     Route::get('/signout', [AccessController::class, 'signout']);

//     Route::middleware(['admin.auth'])->group(function () {
//         Route::resource('main', MainController::class)->only(['index']);
//         Route::patch('configurations/upsert/{id}', [ConfigurationsController::class, 'upsert']);
//         Route::post('corporations/update_orders', [CorporationsController::class, 'update_orders']);
//         Route::resource('corporations', CorporationsController::class)->except(['show', 'delete']);
//         Route::resource('corporations.positions', PositionsController::class);
//         Route::resource('jobfair_events', JobfairEventsController::class);
//         Route::resource('mentorship_events', MentorshipEventsController::class);
//         Route::resource('seminar_events', SeminarEventsController::class);
//         Route::resource('mentors', MentorsController::class);
//         Route::post('questions/update_orders', [QuestionsController::class, 'update_orders']);
//         Route::resource('questions', QuestionsController::class);
//     });
// });

// Route::prefix('dashboard')->group(function () {

    // Route::middleware(['admin.auth'])->group(function () {
        // Route::resource('main', MainController::class)->only(['index']);
        // Route::patch('configurations/upsert/{id}', [ConfigurationsController::class, 'upsert']);
        // Route::post('corporations/update_orders', [CorporationsController::class, 'update_orders']);
        // Route::resource('corporations', CorporationsController::class)->except(['show', 'delete']);
        // Route::resource('corporations.positions', PositionsController::class);
        // Route::resource('jobfair_events', JobfairEventsController::class);
        // Route::resource('mentorship_events', MentorshipEventsController::class);
        // Route::resource('seminar_events', SeminarEventsController::class);
        // Route::resource('mentors', MentorsController::class);
        // Route::post('questions/update_orders', [QuestionsController::class, 'update_orders']);
        // Route::resource('questions', QuestionsController::class);

        // Route::resource('dashboard/testimonials', TestimonialController::class);
    // });
// });

// FIXME: 경로가 위처럼 잘 안 걸려서 아래처럼 일단 작성했습니다. 방법 물어보기!
Route::get('dashboard/testimonials/index', '\App\Http\Controllers\TestimonialController@index');
Route::get('dashboard/testimonials/create', '\App\Http\Controllers\TestimonialController@create');