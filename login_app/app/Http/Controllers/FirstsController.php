<?php

namespace App\Http\Controllers;

use App\Models\First;
use App\Models\Score;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class firstsController extends Controller
{
    public function index(Request $request){
      $firsts = Score::where("scores.user_id",Auth::user() -> id)
      -> get();
      $sex=$request->input('sex');
      $age=$request->input('age');
      $category=$request->input('category');
      $history=$request->input('history');

      $data=[
        'sex'=>$sex,
        'age'=>$age,
        'category'=>$category,
        'history'=>$history
      ];
      echo json_encode($data);
      return view("index",$data);
      var_dump($data);
    }
    
}
