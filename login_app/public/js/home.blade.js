$(function () {
  var count = setInterval(changecard, 60000);//ミリ秒数
  i = 1;
  
  // 初回はcard1は表示、card2は非表示
  $("#card1").show();
  $("#card2").hide();
  
  function changecard() {
    if (i == 1) {
      // card1を非表示、card2を表示
      $("#card1").hide();
      $("#card2").show();
    }
    if (i == 2) {
      // card1を表示、card2を非表示
      $("#card1").show();
      $("#card2").hide();
    }
    i++;
    // 3まで行ったら1に戻す
    if (3 <= i) {
      i = 1;
    }
  }
});