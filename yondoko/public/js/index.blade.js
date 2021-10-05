'use strict'


$(function(){
  $(window).on('scroll',function(){
    let scrollTop =$(document).scrollTop();
    let containerText =$('.containerText');
    let containerTextTop = containerText.offset().top;
    let p_scroll =$('.p_scroll');
    let p_scrollTop = p_scroll.offset().top;
    let f1_scroll =$('.f1_scroll');
    let f1_scrollTop = f1_scroll.offset().top;
    let f2_scroll =$('.f2_scroll');
    let f2_scrollTop = f2_scroll.offset().top;
    let login =$('.login');
    let loginHead =$('.loginHead');
    let firstSentence =$('.firstSentence');
    let secondSentence =$('.secondSentence');
    let thridSentence =$('.thridSentence');
    let loginTop = login.offset().top;
    if(scrollTop > containerTextTop-200){
      $('.containerText').animate({'opacity':'1','top':'0'},300)
    }
    if(scrollTop > p_scrollTop-200){
      $('.p_scroll').animate({'opacity':'1','top':'0'},300)
    }
    if(scrollTop > f1_scrollTop-200){
      $('.f1_scroll').animate({'opacity':'1','top':'0'},300)
    }
    if(scrollTop > f2_scrollTop-200){
      $('.f2_scroll').animate({'opacity':'1','top':'0'},300)
    }
    if(scrollTop > loginTop-200){
      $('.loginHead').animate({'opacity':'1','bottom':'0'},300);
      $('.firstSentence').delay(300).animate({'opacity':'1','top':'0'},300);
      $('.secondSentence').delay(600).animate({'opacity':'1','top':'0'},300);
      $('.thirdSentence').delay(900).animate({'opacity':'1','animation-interation-count':'3'},300);      
    }
  })
});

$(() =>{
  $('#first').on('click',()=>{
    let age = $('#age').val();
    if(age == "10代"){
      $('#recommend').append('<h2 class="frH">DIE WITH ZERO</h2>','<img src="images/fr1.png" class="frImg">','<a href="https://www.amazon.co.jp/DIE-ZERO-%E4%BA%BA%E7%94%9F%E3%81%8C%E8%B1%8A%E3%81%8B%E3%81%AB%E3%81%AA%E3%82%8A%E3%81%99%E3%81%8E%E3%82%8B%E7%A9%B6%E6%A5%B5%E3%81%AE%E3%83%AB%E3%83%BC%E3%83%AB-%E3%83%93%E3%83%AB%E3%83%BB%E3%83%91%E3%83%BC%E3%82%AD%E3%83%B3%E3%82%B9/dp/4478109680"　class="frA">→アマゾン購入ページ</a>');
    }else if(age == "20代")
    {
      $('#recommend').append('<h2 class="frH">嫌われる勇気</h2>','<img src="images/fr2.png" class="frImg">','<a href="https://www.amazon.co.jp/%E5%AB%8C%E3%82%8F%E3%82%8C%E3%82%8B%E5%8B%87%E6%B0%97%E2%80%95%E2%80%95%E2%80%95%E8%87%AA%E5%B7%B1%E5%95%93%E7%99%BA%E3%81%AE%E6%BA%90%E6%B5%81%E3%80%8C%E3%82%A2%E3%83%89%E3%83%A9%E3%83%BC%E3%80%8D%E3%81%AE%E6%95%99%E3%81%88-%E5%B2%B8%E8%A6%8B-%E4%B8%80%E9%83%8E/dp/4478025819/ref=asc_df_4478025819/?tag=jpgo-22&linkCode=df0&hvadid=295686184540&hvpos=&hvnetw=g&hvrand=16550021737258390755&hvpone=&hvptwo=&hvqmt=&hvdev=c&hvdvcmdl=&hvlocint=&hvlocphy=1009127&hvtargid=pla-524063789426&psc=1&th=1&psc=1"　class="frA">→アマゾン購入ページ</a>');
    }
    else if(age == "30代")
    {
      $('#recommend').append('<h2 class="frH">最高の体調</h2>','<img src="images/fr3.png" class="frImg">','<a href="https://www.amazon.co.jp/%E6%9C%80%E9%AB%98%E3%81%AE%E4%BD%93%E8%AA%BF-%E9%80%B2%E5%8C%96%E5%8C%BB%E5%AD%A6%E3%81%AE%E3%82%A2%E3%83%97%E3%83%AD%E3%83%BC%E3%83%81%E3%81%A7%E3%80%81%E9%81%8E%E5%8E%BB%E6%9C%80%E9%AB%98%E3%81%AE%E3%82%B3%E3%83%B3%E3%83%87%E3%82%A3%E3%82%B7%E3%83%A7%E3%83%B3%E3%82%92%E5%AE%9F%E7%8F%BE%E3%81%99%E3%82%8B%E6%96%B9%E6%B3%95-ACTIVE-HEALTH-001/dp/4295402125/ref=asc_df_4295402125/?tag=jpgo-22&linkCode=df0&hvadid=287837704232&hvpos=&hvnetw=g&hvrand=14005355207853319334&hvpone=&hvptwo=&hvqmt=&hvdev=c&hvdvcmdl=&hvlocint=&hvlocphy=1009127&hvtargid=pla-524541197746&psc=1&th=1&psc=1"　class="frA">→アマゾン購入ページ</a>');
    }
    else{
      $('#recommend').append('<h2 class="frH">>超客観力</h2>','<img src="images/fr4.png" class="frImg">','<a href="https://www.amazon.co.jp/%E3%83%A0%E3%83%80%E3%81%AB%E6%82%A9%E3%81%BE%E3%81%AA%E3%81%84%E7%90%86%E6%83%B3%E3%81%AE%E8%87%AA%E5%88%86%E3%81%AB%E3%81%AA%E3%82%8C%E3%82%8B-%E8%B6%85%E5%AE%A2%E8%A6%B3%E5%8A%9B-%E3%83%A1%E3%83%B3%E3%82%BF%E3%83%AA%E3%82%B9%E3%83%88DaiGo/dp/4908154236/ref=sr_1_1?adgrpid=105225794398&dchild=1&gclid=CjwKCAjwzOqKBhAWEiwArQGwaKXuCouEUwIkz9MArvLpUPNeqttHZy_uVjlZs5MvYHnUpSDI6gnp7xoCgVEQAvD_BwE&hvadid=448200077409&hvdev=c&hvlocphy=1009127&hvnetw=g&hvqmt=e&hvrand=3436814818297761651&hvtargid=kwd-880892576563&hydadcr=26164_11169480&jp-ad-ap=0&keywords=%E8%B6%85%E5%AE%A2%E8%A6%B3%E5%8A%9B&qid=1633350744&sr=8-1"　class="frA">→アマゾン購入ページ</a>');
    }
  });
  $('#recommend').on('click',e =>{
    if(e.target.nodeName !== 'H2' || !confirm('Are you sure')){
      return;
    }
    $('#recommend').remove();
  })
});