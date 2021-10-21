<!doctype html>
<html lang="ja">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  　　
  <link rel="stylesheet" href="{{ asset('https://yondoko.site/css/index.blade.css')}}">

  <title>オリジナルサイト</title>
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
      <a class="navbar-brand" href="#">YONDOKO</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="
      #navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Side Menu
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="#age">最初の１冊</a>
              <a class="dropdown-item" href="#">要約チャンネル</a>
              <a class="dropdown-item" href="#">読書アイテム</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}">register</a>
          </li>
        </ul>
      </div>
    </nav>
    <div class="title">
      <div class="firstTitle">
        <h1>YONDOKO</h1>
        <p class="subTitle md-m-10">読んどこ</p>
      </div>
      <div class="secondTitle">
        <p>習慣×読書＝最高の自己投資</p>
      </div>
    </div>
  </header>
  <main>
    <!-- ナビたぶ -->
    <nav>
      <div class="nav nav-tabs" id="nav-tab" role="tablist">
        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Home</a>
        <a class="nav-item nav-link" id="nav-first-tab" data-toggle="tab" href="#nav-first" role="tab" aria-controls="nav-first" aria-selected="false">最初の１冊</a>
        <a class="nav-item nav-link" id="nav-channel-tab" data-toggle="tab" href="#nav-channel" role="tab" aria-controls="nav-channel" aria-selected="false">要約チャンネル</a>
        <a class="nav-item nav-link" id="nav-item-tab" data-toggle="tab" href="#nav-item" role="tab" aria-controls="nav-irem" aria-selected="false">読書セット</a>
      </div>
    </nav>
    <!-- タブ -->
    <div class="tab-content" id="nav-tabContent">
      <!-- ホームタブ -->
      <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
        <div class="container d-md-flex wrap">
          <div class="containerText">
            <h2>①本を読む</h2>
            <img src="images/container1.png" alt="本を読む人">
            <p>30分読書をするだけで大幅なストレス軽減が可能です。ミリオネアの89％が読書を習慣化しています。家に本の数が多い子どもほど将来の年収が高くなります。</p>
          </div>
          <div class="containerText center">
            <h2>②記録</h2>
            <img src="images/container2.png" alt="メモ">
            <p>人生の半分は習慣的な行動から成り立っています。習慣をコントロールすれば人生の半分をコントロールすることができます。日々の読書を習慣化して人生を豊かに。</p>
          </div>
          <div class="containerText">
            <h2>③レベルアップ</h2>
            <img src="images/container3.png" alt="階段">
            <p>記録を続けるたびに経験値が溜まりレベルが上がります。気づけば読書が生活の一部に。私はすでに活字中毒です。</p>
          </div>
        </div>
        <div class="about">
          <h2><a id="about">About</a></h2>
          <div class="mb-5 row">
            <div class="col-sm-7　container mx-auto mb-5">
              <img src="images/about.png" class="w-100 rounded-circle">
            </div>
            <div class="col-sm-5 container">
              <h3>読書とは</h3>
              <p class="p_scroll">ローリスクハイリターンで人生を変えられる最高の自己投資です。自分の体を実験体にして読書で得た知識を実践するのがたまらなく面白いです。インターバルトレーニングのHIITや16時間断食などを読書をきっかけに始めています。</p>
            </div>
          </div>
        </div>
        <div class="wrap　function">
          <h2 id="title_scroll" class="text-center"><a>Function</a></h2>
          <div class="container">
            <div class="mb-5 row">
              <div class="col-sm-8 f1_scroll">
                <h3>todoリストで記録</h3>
                <p>自分なりの言葉にまとめると記憶の定着率が上がります。ページ数や時間の記録も可能です。</p>
              </div>
              <div class="col-sm-4">
                <img src="images/function1.png" class="w-100 rounded-circle">
              </div>
            </div>
            <div class="row">
              <div class="col-sm-8 order-sm-2 f2_scroll">
                <h3>グラフで進捗管理</h3>
                <p>溜まった経験値を可視化することで継続を手助けします。小さな積み重ねを続ければ１年後の自分に感謝されます。</p>
              </div>
              <div class="col-sm-4 order-sm-1">
                <img src="images/function2.png" class="w-100 rounded-circle">
              </div>
            </div>
          </div>
        </div>
        <div class="login">
          <h2><a class="loginHead">Login</a></h2>
          <p class="firstSentence">YONDOKOは読書を始めるきっかけと習慣づくりのために作成しました。読書の素晴らしさを一人でも多くの人に知ってもらいたいです。</p>
          <p class="secondSentence">思考に気を付けなさい。サレはいつか言葉になるから。言葉に気をつけなさい。それはいつか行動になるから。行動に気をつけなさい。それはいつか習慣になるから。ーマザーテレサー</p>
          <button type="submit" name="btn" class="btn  bg-info formBtn">
          <a class="text-white" href="{{ route('login') }}">{{ __('ログイン') }}</a>
          
          </button>
          <p class="thirdSentence">
          <a class="text-dark" href="{{ route('register') }}">{{ __('新規登録はこちら←') }}</a>
          </p>
        </div>
      </div>
      <!-- 最初の１冊 -->
      <div class="tab-pane fade" id="nav-first" role="tabpanel" aria-labelledby="nav-first-tab">
        <h2>First reading</h2>
        <p class="mx-auto mt-3" style="max-width: 400px;">もともとは勉強嫌いで本もまともに読めなかった私ですが、本の世界に飛び込んでみると読みやすくて面白い本は意外にもたくさんあるものです。読みやすい物だけを厳選したのでぜひ参考にしてください。</p>
        <form　method="POST" action="data.php">
          @csrf
          <div class="form-group mx-auto mt-3" style="max-width: 400px;">
            <label for="inputState">性別を選択してください</label>
            <select id="sex" class="form-control" name="sex">
              <option selected>男性</option>
              <option>女性</option>
              <option>その他</option>
            </select>
          </div>
          <div class="form-group mx-auto mt-3" style="max-width: 400px;">
            <label for="inputState">年齢を選択してください</label>
            <select id="age" class="form-control" name="age">
              <option selected>10代</option>
              <option>20代</option>
              <option>30代</option>
              <option>40代</option>
              <option>50代</option>
            </select>
          </div>
          <div class="form-group mx-auto mt-3" style="max-width: 400px;">
            <label for="inputState">好きなジャンルを選択してください</label>
            <select id="category" class="form-control" name="category">
              <option selected>ビジネス</option>
              <option>お金</option>
              <option>健康</option>
              <option>自己啓発</option>
            </select>
          </div>
          <div class="form-group mx-auto mt-3" style="max-width: 400px;">
            <label for="inputState">読書歴を教えてください</label>
            <select id="history" class="form-control" name="history">
              <option selected>1年未満</option>
              <option>1〜3年</option>
              <option>3年以上</option>
            </select>
          </div>
          <button type="submit" class="btn btn-info mx-auto container mt-3" style="max-width: 100px;" id="first">Go</button>
        </form>
        <div id="recommend" class="container mx-auto mt-5 text-center" style="max-width: 400px; height: auto;"></div>
      </div>
      <div class="tab-pane fade" id="nav-channel" role="tabpanel" aria-labelledby="nav-channel-tab">
        <div>
          <h2>youtube Channel</h2>
          <p class="firstSentence mx-auto mt3" style="max-width: 400px;">要約サイトを活用すれば難易度の高い本でも理解を深めることができます。読んだ本の復習にも効果的です。</p>
          <div class="card mb-3 mx-auto mt-3" style="max-width: 540px;">
            <div class="row no-gutters">
              <div class="col-md-4">
                <img src="images/yc1.png" class="bd-placeholder-img" width="100%" height="250" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Image">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#868e96" />
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">中田敦彦のYouTube大学</h5>
                  <p class="card-text">僕の世代では武勇伝、下の世代ではレディオフィッシュで有名なオリラジのあっちゃんが持ち前のトーク力で本の内容をプレゼンしてくれます。</p>
                  <a href="https://www.youtube.com/c/NKTofficial" class="card-text">→詳細はこちら</a>
                </div>
              </div>
            </div>
            <div class="row no-gutters  mb-3 mx-auto mt-3" style="max-width: 540px;">
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">サムの本解説ch</h5>
                  <p class="card-text">2021年８月時点で登録者数35万人と圧倒的人気を誇る要約チャンネルです。ついつい見たくなるサムネ、要点を絞った割りやすい解説、聴きやすいトーンの話し方が魅力です。</p>
                  <a href="https://www.youtube.com/channel/UCcdd3kS52T9Zyo-SWfj86bA" class="card-text">→詳細はこちら</a>
                </div>
              </div>
              <div class="col-md-4">
                <img src="images/yc2.png" class="bd-placeholder-img" width="100%" height="250" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Image">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#868e96" />
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- 読書セット -->
      <div class="tab-pane fade" id="nav-item" role="tabpanel" aria-labelledby="nav-item-tab">
        <h2>Reading Item</h2>
        <p class="firstSentence mx-auto mt3" style="max-width: 400px;">読書をより充実させるおすすめアイテムを紹介します。</p>
        <div class="card-group">
          <div class="card">
            <img src="images/ri1.png" class="bd-placeholder-img card-img-top" width="100%" height="180" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Image cap">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="#868e96" />
            <div class="card-body">
              <h5 class="card-title">コーヒー</h5>
              <p class="card-text">コーヒーも読書と同様にリラックス効果があります。コーヒーの匂いを嗅ぐと右脳の情緒部分が刺激されて「アルファ波」というものが生じてリラックスできます。</p>
              <a href="http://anchor2fullsail.shop-pro.jp/" class="card-text"><small class="text-muted">地元気仙沼市にあるアンカーコーヒーネット販売←</small></a>
            </div>
          </div>
          <div class="card">
            <img src="images/ri2.png" class="bd-placeholder-img card-img-top" width="100%" height="180" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Image cap">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="#868e96" />
            <div class="card-body">
              <h5 class="card-title">BGM</h5>
              <p class="card-text">通常の音楽は読書の際に逆効果なケースが多いですが、雨や波の音などの自然音は集中力を高めます。</p>
              <a href="https://www.spotify.com/jp/premium/?utm_source=jp-ja_brand_contextual_text&utm_medium=paidsearch&utm_campaign=alwayson_apac_jp_performancemarketing_core_brand+contextual+text+exact+jp-ja+google&gclid=CjwKCAjwzOqKBhAWEiwArQGwaMxp5D-Kp5emPHgIzvraC1m00f6nN2qIHn-tMeQaBvz2Z3ceZXdL9BoCv8QQAvD_BwE&gclsrc=aw.ds" class="card-text"><small class="text-muted">spotify←</small></a>
            </div>
          </div>
          <div class="card">
            <img src="images/ri3.png" class="bd-placeholder-img card-img-top" width="100%" height="180" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Image cap">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="#868e96" />
            <div class="card-body">
              <h5 class="card-title">Kindle</h5>
              <p class="card-text">紙書籍の方が記憶の定着がいいのですが、持ち運びやすさやスペースを考えると購入せずにはいられません。</p>
              <a href="https://www.amazon.co.jp/dp/B08N41Y4Q2?&tag=googhydr-22&ref=pd_sl_96ciogash1_e_p51&adgrpid=111006960691&hvpone=&hvptwo=&hvadid=452017894470&hvpos=&hvnetw=g&hvrand=7522545869550013820&hvqmt=e&hvdev=c&hvdvcmdl=&hvlocint=&hvlocphy=1009127&hvtargid=kwd-332998515799&hydadcr=28344_11467286&gclid=CjwKCAjwzOqKBhAWEiwArQGwaHpeHwL_6zfWzZ7oGtJnrCk643mVfo3jjZeFni6QofsDgB2-71AFQhoCya4QAvD_BwE" class="card-text"><small class="text-muted">kindle paperwhite←</small></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- スライドメニュー -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-tarPOST="
          url:#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-tarPOST="
          url:#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-tarPOST="
          url:#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="carousel-caption  d-md-block">
            <div class="containerText">
              <h2>最初の１冊</h2>
              <img src="images/menu1.png" alt="本を読む人">
              <p class="mx-auto" style="max-width: 400px;">何を読んだらいいかわからない方へ。必要事項を記入するだけでオススメの本が表示されます。</p>
            </div>
          </div>
          <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: First slide">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="#777" />
          </svg>
        </div>
        <div class="carousel-item">
          <div class="carousel-caption  d-md-block">
            <div class="containerText center">
              <h2>要約サイト</h2>
              <img src="images/menu2.png" alt="youtube">
              <p class="mx-auto" style="max-width: 400px;">要約サイトを活用すれば難易度の高い本でも理解を深めることができます。読んだ本の復讐にも効果的です。</p>
            </div>
          </div>
          <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Second slide">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="#666" />
          </svg>
        </div>
        <div class="carousel-item">
          <div class="carousel-caption  d-md-block">
            <div class="containerText center">
              <h2>読書セット</h2>
              <img src="images/menu3.png" alt="道具">
              <p class="mx-auto" style="max-width: 400px;">環境を整えることで読書が捗ります。オススメの読書セットを紹介します。</p>
            </div>
          </div>
          <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Third slide">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="#555" />
          </svg>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </main>
  <div class="card bg-info text-white">
    <svg class="bd-placeholder-img bd-placeholder-img-lg card-img" width="100%" height="270" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Card image">
      <title>Placeholder</title>
      <rect width="100%" height="100%" fill="#868e96" /><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Card image</text>
    </svg>
    <div class="card-img-overlay bg-info">
      <h5 class="card-title">Writen by YOHEI MURAKAMI</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      <a href="https://yohei-portfolio.work/#link2" class="text-white bg-info font-weight-bold">portfolio←</a>
    </div>
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="{{ asset('/js/jquery.js')}}"></script>
  <script src="{{ asset('/js/index.blade.js')}}"></script>


</body>

</html>