<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\WeightTarget;
use App\Models\WeightLog;
use App\Http\Requests\AuthorRequest;

class AuthorController extends Controller
{
  //ログインの処理
  public function weight_logs(){
    $weighttargets = WeightTarget::all();
    $weightlogs = WeightLog::all();
    return view('wight_logs',['weighttargets' => $weighttargets,'weightlogs'=> $weightlogs]);
  }

  public function register(AuthorRequest $request){
    $form =$request->only(['name', 'email', 'password']);
    User::create($form);
    return view('auth.register');
  }

  public function register_step2(){
    
    return view('auth.register_step2');
  }



}
