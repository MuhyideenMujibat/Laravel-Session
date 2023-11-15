<?php 

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserAuth;

Route::post("user",[UserAuth::class,'userLogin']);
// Route::view("login","login");
Route::view("profile","profile");

Route::get("/login",function(){
    if(session()->has('fullname')){
      
        return redirect("profile");
    }
 return view('login');
});

Route::get("/logout",function(){
    if(session()->has('fullname')){
        session()->pull('fullname');
    }
  return redirect("login");
});
