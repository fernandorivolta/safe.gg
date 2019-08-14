<?php

use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/myhistory', function (Request $request) {
    $result = True;
    $apicontroller = new ApiController;
    if (!$result){
        print_r("oi");
    }else{
        $user_match_history = $apicontroller->user_match_history($request->input('id'));
    }
    return response()->json($user_match_history);
});
