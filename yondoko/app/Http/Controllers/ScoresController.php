<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Score;
use Illuminate\Support\Facades\Auth;

class ScoresController extends Controller
{
    private $_limit = 5;
    public function __construct()
    {
        $this->middleware("auth");
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $scoresAll = Score::where("scores.user_id",Auth::user() -> id)
        -> leftjoin('favs', 'scores.id', '=', 'favs.scores_id')
        -> orderBy("scores.id","desc")
        -> get();

        $allCount = count($scoresAll);

        $pageNum = $allCount / $this-> _limit;
        $pageNum = ceil($pageNum);

        $p =$request ->input('p');
        if(empty($p)){
            $p = 1;
        }

        $offset =($p - 1)*$this->_limit;

        $scores = Score::where("scores.user_id",Auth::user() -> id)
        -> leftjoin('favs', 'scores.id', '=', 'favs.scores_id')
        -> orderBy("scores.id","desc")
        ->offset($offset)
        ->limit($this->_limit)
        -> get();

        $calc = $this -> _sumScores();

        $data = [
            "scores" => $scores,
            "scoresAll" => $scoresAll,
            "user_id" => Auth::user()->id,
            "calc" => $calc,
            "page"=> $pageNum
        ];

        return view("home",$data);
    }

    private function _sumScores() {
        //クラスのインスタンス化をしているのにL:42で静的クラスで呼び出しをかけているのは何故でしょうか？
        //静的、動的の呼び出しは一度確認してみて下さい。


        //データを全件呼び出してその中の内容で計算しているのだと思いますが、ユーザで絞り込まないとだめなのでは？

        //$score = new Score();
        //$scores = Score::all();


        $scores = Score::where("scores.user_id",Auth::user() -> id)->get();

        foreach ($scores as $score) {
            //この書き方だと最後のデータの名前しか代入できていませんが大丈夫でしょうか？
            $titles = $score->title;
        }


        //分ける必要がないのでまとめておきます。
        $times = 0;
        $pages = 0;
        foreach ($scores as $score) {
            $times += $score->time;
            $pages += $score->page;
        }

        $sum = $times + $pages;

//        $pages = 0;
//        foreach ($scores as $score) {
//            $pages += $score->page;
//        }


        $level = "見習い"; //デフォルトで書いてもらっているので
        if ($sum >= 12000) {
            $level = "歩く図書館";
        } elseif ($sum >= 8000) {
            $level = "本の虫";
        } elseif ($sum >= 4000){
            $level = "読書家";
        } elseif ($sum >= 2500){
            $level = "たまに読みます";
        }else {
            $level = "見習い";
        }

        // viewとの紐付け

        $payload = [
            'times' => $times,
            'pages' => $pages,
            'sum' => $sum,
            'level' => $level
        ];

        return $payload;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        /**
         * 前提として、Createメソッドは新規登録を行う際などに別のページがあれば
         * そのページを表示するというために用意されている関数です。
         * 今回のデータを取得して、何かを表示するという目的は
         * Create関数にの定義に背いた使用方法になります。
         */
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // requestはバリデーションの時に使える
    public function store(Request $request)
    {
        //  バリデーション
        $validator = Validator::make($request->all(), [
            "title" => "required|max:255",
            "time" => "required|max:255",
            "page" => "required|max:10000",
            "day" => "required",
            "comment" => "max:255"
        ]);
        if ($validator->fails()) {
            return redirect()
                ->route("home")
                ->withInput()
                ->withErrors($validator);
        }

        // 登録
        $score = new Score;
        $score->title = $request->title;
        $score->user_id = Auth::user()->id;
        $score->time = $request->input('time');
        $score->page = $request->input('page');
        $score->day = $request->day;
        $score->comment = $request->comment;
        $score->save();

        // 一覧画面に戻る
        return redirect()->route("home");
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
        /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $score=Score::find($id);
      return view("scoreedit",["score"=>$score]);
    }

        /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //  バリデーション
        $validator = Validator::make($request->all(), [
            "title" => "required|max:255",
              "time" => "required|max:255",
            "page" => "required|max:10000",
            "day" => "required",
            "comment" => "max:255"
        ]);
        if ($validator->fails()) {
            return redirect()
                ->route("home",$id)
                ->withInput()
                ->withErrors($validator);
        }
        // 登録
        $score = Score::find($id);

        $score->title = $request->title;
        $score->time = $request->input('time');
        $score->page = $request->input('page');
        $score->day = $request->day;
        $score->comment = $request->comment;
        $score->save();

        // 一覧画面に戻る
        return redirect()->route("home");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // 削除ボタン
        $score = Score::find($id);
        $score->delete();
        return redirect()->route("home");
    }
}
