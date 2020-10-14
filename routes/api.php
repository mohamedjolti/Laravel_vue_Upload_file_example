<?php

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post("/photo",function(Request $request){

 

      // Get filename with extension
      $filenameWithExt = $request->file('photo')->getClientOriginalName();

      // Get just the filename
      $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);


      // Get extension
      $extension = $request->file('photo')->getClientOriginalExtension();

      // Create new filename
      $filenameToStore = $filename.'_'.time().'.'.$extension;

      // Uplaod image
      $path= $request->file('photo')->storeAs('public/photos/', $filenameToStore);
      
      return response()->json($request->file("photo")->getClientOriginalName(),200);


});
Route::get("/hello",function(Request $req){
    return response()->json("hello",200);
});