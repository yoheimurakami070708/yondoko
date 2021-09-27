@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/home.blade.css')}}">
<div class="row justify-content-center">
  <header>
    <div class="title">
      <div class="firstTitle">
        <h1>MYYONDOYO</h1>
        <p class="subTitle md-m-10">まい読んどこ</p>
      </div>
      <div class="secondTitle">
        <p>習慣×読書＝最高の自己投資</p>
      </div>
    </div>
  </header>
</div>
<main>
  <h2>Status</h2>
  <div class="container mx-auto mt-5">
    <div class="row justify-content-center">
      <div class="card mx-5 ui">
        <div class="card-header text-center">
          ユーザー情報
        </div>
        <ul class="list-group list-group-flush text-center">
          <li class="list-group-item">
            <dt>ユーザー名</dt>
            <dd v-pre>{{ Auth::user()->name }}</dd>
          </li>
          <li class="list-group-item">
            <dt>トータルスコア</dt>
            <dd>
              @isset($scores)
              {{$calc['sum'] ?? ''}}
              @endif
            </dd>
          </li>
          <li class="list-group-item">
            <dt>レベル</dt>
            <dd>
              @isset($scores)
              {{$calc['level'] ?? ''}}
              @endif
            </dd>
          </li>
        </ul>
      </div>
      <div class="">
        <h3 class="text-center">カレンダー機能</h3>
        <canvas id="my_chart" height="250">
          Canvas not supported...
        </canvas>
      </div>
    </div>
    <div class="">
      <h2>Saving</h2>
      <!-- 題名・時間・ページ数・冊数・メモの記入欄 -->
      <!-- 記入し送信された値をstatusContainerに送る -->
      @include('common.errors')
      <div class="container mx-auto mt-3" style="max-width: 400px;">
        　　<form method="POST" action="{{ route('home.store') }}">
          @csrf
          <div class="form-group">
            <label for="title">題名</label>
            <input type="text" name="title" class="form-control" id="title" placeholder="テスト太郎">
            @if($errors->has('title'))
            <div class="text-danger">
              {{$errors->first('title')}}
            </div>
            @endif
          </div>
          <div class="form-group">
            <label for="time">時間</label>
            <input type="text" name="time" class="form-control" id="time" placeholder="分単位で記入してください" value="">
            @if($errors->has('time'))
            <div class="text-danger">
              {{$errors->first('time')}}
            </div>
            @endif
          </div>
          <div class="form-group">
            <label for="page">ページ数</label>
            <input type="page" name="page" class="form-control" id="page" placeholder="読んだページ数を記入してください" value="">
            @if($errors->has('page'))
            <div class="text-danger">
              {{$errors->first('page')}}
            </div>
            @endif
          </div>
          <div class="form-group">
            <label for="day">日付</label>
            <input type="date" name="day" class="form-control
            " id="day" placeholder="日付を入力してください">
            @if($errors->has('day'))
            <div class="text-danger">
              {{$errors->first('day')}}
            </div>
            @endif
          </div>
          <div class="form-group">
            <label for="comment">メモ</label>
            <input type="textarea" name="comment" class="form-control" id="comment" placeholder="ひとこと">
            @if($errors->has('comment'))
            <div class="text-danger">
              {{$errors->first('comment')}}
            </div>
            @endif
          </div>
          <button type="submit" name="btn" id="sumbtn" class="btn btn-info  container my-3 sb">Submit</button>
        </form>
      </div>
      @if (count($scores) > 0)
      <div class="panel panel-default">
        <h2>Record</h2>
        <div class="panel-body container mx-auto mt-5">
          <table class="table table-striped task-table">
            <!-- テーブルヘッダ -->
            <thead>
              <th>タスク</th>
              <th>時間（分）</th>
              <th>ページ数</th>
              <th>日付</th>
              <th>メモ</th>
            </thead>
            <!-- テーブル本体 -->
            <tbody>
              @foreach ($scores as $score)
              <tr>
                <td class="table-text">
                  <div>{{ $score->title }}</div>
                </td>
                <td class="table-text">
                  <div>{{ $score->time }}</div>
                </td>
                <td class="table-text">
                  <div>{{ $score->page }}</div>
                </td>
                <td class="table-text">
                  <div>{{ $score->day }}</div>
                </td>
                <td class="table-text">
                  <div>{{ $score->comment }}</div>
                </td>
                <!-- いいね機能 -->
                <td class="align-middle ">
                  @if ($user_id == $score -> user_id )
                  <button class="bg-transparent border-0 fav text-danger" data-id="data{{$score -> id}}" value="{{$score -> id}}"><i class="fas fa-heart"></i></button>
                  @else
                  <button class="bg-transparent border-0 fav" data-id="data{{$score -> id}}" value="{{$score -> id}}"><i class="fas fa-heart"></i></button>
                  @endif
                </td>
                <!-- 詳細ボタン -->
                <td>
                  <form action="{{ route('home.edit',$score->id) }}" method="GET">
                    @csrf
                    <button type="submit" class="btn btn-primary">更新</button>
                  </form>
                </td>
                <td>
                  <!-- 削除ボタン -->
                  <form action="{{ route('home.destroy',$score->id) }}" method="POST">
                    @method('delete')
                    @csrf
                    <button type="submit" class="btn btn-danger">削除</button>
                  </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
      @endif
</main>
</div>
<!-- ページネーション -->
<div class="d-flex container my-5">
  @for($i =1; $i <= $page; $i++) <a href="?p={{$i}}" class="mx-auto">{{$i}}</a>
    @endfor
</div>
<div class="card bg-info text-white">
  <svg class="bd-placeholder-img bd-placeholder-img-lg card-img" width="100%" height="270" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Card image">
    <title>Placeholder</title>
    <rect width="100%" height="100%" fill="#868e96" /><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Card image</text>
  </svg>
  <div class="card-img-overlay bg-info">
    <h5 class="card-title">Writen by YOHEI MURAKAMI</h5>
    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    <p class="card-text">portfolio</p>
  </div>
</div>

<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"></script>
{{--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>--}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
{{--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>--}}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
<script src="{{ asset('/js/home.blade.js')}}"></script>
<script>
  //データ取得
  const scores = @json($scoresAll);

  //デフォルト変数設定(初期値)
  const payload = [''] //グラフ表示用
  const labels = [''] //ラベル表示用
  const days = new Array() //表示データ検索用

  // 一番左端にも値を表示したい場合は
  // const payload = new Array()
  // const labels = new Array()

  //今日から5日間ではなく、4日前から本日を含む5日間のデータを取得 (未来のスコアは不明のため）
  // pushは末尾に要素追加
  // momentとformatで現在時刻を表示
  for (var i = 0; i <= 4; i++) {
    days.push(moment(new Date()).add(-i, 'days').format("YYYY-MM-DD"))
    labels.push(moment(new Date()).add(-i, 'days').format("YYYY年MM月DD日"))
  }

  // データが大きい順に入っているので小さい順に変更
  days.sort();

  // mapは配列データ（days）に使う
  days.map(v => {
    var sum = 0
    //取得した日時と一致するデータを取得　
    let fetch = scores.filter(val => val.day === v)
    //取得した日時のスコアを日別で計算して配列に保存
    $.each(fetch, function(k, v) {
      sum = sum + v.page + v.time
    })
    payload.push(sum)
  })


  // let day1 = moment().add('days', 1).format("YYYY年MM月DD日");
  // let day2 = moment().add('days', 2).format("YYYY年MM月DD日");
  // let day3 = moment().add('days', 3).format("YYYY年MM月DD日");
  // let day4 = moment().add('days', 4).format("YYYY年MM月DD日");

  const ctx = document.getElementById('my_chart');
  const chart_cv = new Chart(ctx, {
    type: 'line', // グラフの種類
    data: {
      datasets: [{
        label: 'スコア',
        data: payload,
        backgroundColor: 'skyblue'
      }],
      labels: labels.sort(),
    }
  })
</script>
<script src="{{ mix('js/fav.js') }}"></script>
@endsection
