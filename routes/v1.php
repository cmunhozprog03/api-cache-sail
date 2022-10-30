<?php

use App\Http\Controllers\Api\{
  CourseController
};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/courses', [CourseController::class, 'index']);
Route::post('/courses', [CourseController::class, 'store']);
Route::get('/courses/{identify}', [CourseController::class, 'show']);
Route::delete('/courses/{identify}', [CourseController::class, 'destroy']);
Route::put('/courses/{course}', [CourseController::class, 'update']);


Route::get('/', function(){
  return response()->json([
    'success' => true,
  ]);
});
