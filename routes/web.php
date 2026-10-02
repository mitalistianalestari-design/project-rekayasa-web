Route::get('/', function () {
    return view('page.home');
});


route::get('/profile', [MahasiswaController::class, 'index']);

Route::get('/about', function () {
    return view('page.about');
});