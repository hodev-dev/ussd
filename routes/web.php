<?php

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;

Route::get('/', function (Request $request) {
    $call = $request['call'];
    return new Response((string) $call, 200, ['Content-Type' => 'text/plain']);
});
