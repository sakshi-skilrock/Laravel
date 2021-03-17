<?php
//use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/', function () {
    $links = \App\Models\Link::all();

    return view('welcome', ['links' => $links]);
});
// with()
//$links = App\Models\Link::all();
//return view('welcome')->with('links', $links);

// dynamic method to name the variable
//return view('welcome')->withLinks($links);

Route::get('/submit', function () {
    return view('submit');
});


Route::post('/submit', function (Request $request) {
    //print_r("hello:");die;
    $data = $request->validate([
        'title' => 'required|max:255',
        'url' => 'required|url|max:255',
        'description' => 'required|max:255',
    ]);
    //print_r($data);die;

    
    $link = tap(new App\Models\Link($data))->save();
    //print_r($link);die;


    return redirect('/');
});
