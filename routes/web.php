<?php

use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return new Response('hello', 200, ['Content-Type' => 'text/plain']);
});
