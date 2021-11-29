<?php

use Illuminate\Support\Facades\Route;

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
// Route::get('/', function () {
//     return view('landing');
// });
Route::get('/', function () {
    return view('landingsale');
});

Route::get('/register', function () {
    return view('register');
});
Route::get('/contract', function () {
    return view('contract');
});
Route::get('/promotion', function () {
    return view('promotion');
});
Route::get('/award', function () {
    return view('award');
});

Route::get('/thai', function () {
    return view('/huays/thai');
});
Route::get('/tgs', function () {
    return view('/huays/tgs');
});
Route::get('/aomsin', function () {
    return view('/huays/aomsin');
});
Route::get('/laos', function () {
    return view('/huays/laos');
});
Route::get('/hanoy', function () {
    return view('/huays/hanoy');
});

Route::get('/maley', function () {
    return view('/huays/maley');
});
Route::get('/yeekee', function () {
    return view('/huays/yeekee');
});
Route::get('/pingpong', function () {
    return view('/huays/pingpong');
});
Route::get('/singgapore', function () {
    return view('/huays/singgapore');
});
Route::get('/stockthai', function () {
    return view('/huays/stockthai');
});
Route::get('/stocknikkei', function () {
    return view('/huays/stocknikkei');
});

Route::get('/stockchina', function () {
    return view('/huays/stockchina');
});

Route::get('/stockhangseng', function () {
    return view('/huays/stockhangseng');
});
Route::get('/stockkorea', function () {
    return view('/huays/stockkorea');
});
Route::get('/stocktaiwan', function () {
    return view('/huays/stocktaiwan');
});
Route::get('/stockindia', function () {
    return view('/huays/stockindia');
});
Route::get('/stockgerman', function () {
    return view('/huays/stockgerman');
});

Route::get('/stockeng', function () {
    return view('/huays/stockeng');
});

Route::get('/stockdownjones', function () {
    return view('/huays/stockdownjones');
});

Route::get('/stockrussia', function () {
    return view('/huays/stockrussia');
});

Route::get('/stockegypt', function () {
    return view('/huays/stockegypt');
});
