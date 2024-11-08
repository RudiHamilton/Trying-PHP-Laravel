<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/rudi', function(){
    $peoplesInfo = [
        ["Name" => "Rudi","Age" => 19, "ID" => "1"],
        ["Name" => "Stephen","Age" => 34, "ID" => "2"],
    ];

    return view('rudi.index',["Greetings" => "hello", "peoplesInfo" => $peoplesInfo]);
});
//makes the route an wildcard and provides the wildcard as a argument in the function
Route::get('/rudi/{ID}', function($ID){
    $peoplesInfo = [
        ["Name" => "Rudi","Age" => 19, "ID" => "1"],
        ["Name" => "Stephen","Age" => 34, "ID" => "2"],
    ];
    // fetch record with ID
    return view('rudi.show',["ID" => $ID]);
});