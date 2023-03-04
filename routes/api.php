<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Category;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/catActiveImage', function () {
    $cats = Category::get();
    $resultados = [];
    foreach ($cats as $cat) {
        $catIcons = $cat->multimedia()->where('multimedia_type_id', '1')->pluck('url');
        $urlCat = ['catId' => $cat->id, 'urls' => $catIcons];
        array_push($resultados, $catIcons);
    }
    return response()->json($resultados);
});
