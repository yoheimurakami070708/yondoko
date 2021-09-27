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
  // ドロップダウンリスト値取得
//   let dropdown  =$('.doropdown');
//   let dropdown-menu  =$('.doropdown-menu');
//   let dropdown-item  =$('.doropdown-item');
//   let dropdown-toggle  =$('.doropdown-toggle');
//   $('.dropdown-menu .dropdown-item').click(function(){
//     var visibleItem = $('.dropdown-toggle', $(this).closest('.dropdown'));
//     visibleItem.text($(this).attr('value'));
// });
});
