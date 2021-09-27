<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;


class HomeController extends Controller
{
        /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
}

/**
 * Create a new controller instance.
 *
 * @return void
 */


// /**
//  * Show the application dashboard.
//  *
//  * @return \Illuminate\Contracts\Support\Renderable
//  */
// public function index()
// {
//     $score = new Score();
//     $scores = Score::all();

//     foreach ($scores as $score) {
//         $titles = $score->title;
//     }
//     $times =0;
//     foreach($scores as $score){
//         $times += $score->time;
//     }
//     $pages =0;
//     foreach($scores as $score){
//         $pages += $score->page;
//     }
//     $sum= $times + $pages;

//     $level="見習い";
//     if($sum >=12000){
//         $level ="歩く図書館";
//     }elseif($sum >=8000){
//         $level ="本の虫";
//     }elseif($sum >=4000){
//         $level ="読書家";
//     }elseif($sum >=2500){
//         $level ="たまに読みます";
//     }elseif($sum < 2500){
//         $level ="見習い";
//     }

//     return view('home', compact('scores','times','pages','sum','level','titles'));
// }