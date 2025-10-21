<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/', function() {
    return 'oawesidfasodpncasoicns/odincswdincf';
});

Route::delete('posts/{id}', function () {
    return response()->json([
        'message' => 'Post deleted successfully'
    ]);
});

Route::get('posts/{post}', function () {
    return 'kjdfnjvdjn';
});

Route::fallback( function () {
    return response()->json([
        'message' => 'Not found',
        'code' => 404

    ],404);
});
