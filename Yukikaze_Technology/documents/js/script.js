//以下のは宣言

$(function(){
//ここから記述
$('.Toggle').click(function() {
    $(this).toggleClass('active');

    if ($(this).hasClass('active')) {
        $('.NavMenu').addClass('active');　		//クラスを付与
    } else {
        $('.NavMenu').removeClass('active');	//クラスを外す
    }
});
$('.cate').click(function() {;
  const bottom = $(window).height() - 100;
  const fixTop = $(this).offset().top;
    var cate = $(this);
  $(this).animate({
    paddingBottom:bottom
  },200);
  setTimeout(function(){
    cate.find('h2').fadeOut(),
    cate.children('.cate-art').fadeIn()
  },1000);
  $(this).addClass('cate-anime');
});
$('.close').click(function(){
  var target = $(this).parent().parent()
  target.fadeOut();
  $('.cate').removeClass('cate-anime')
  setTimeout(function () {
    $('.cate').addClass('cate-re')
    $('.cate').fadeIn();
  }, 200);
})
//ギア回し
var rotate = function(gear, angle) {
 gear.css({
 "transform" : "rotate("+angle+"deg)"
 });
}
//スクロール矢印


//スクロール
$(window).scroll(function(){
 var sc=$(window).scrollTop();
 rotate($(".gear"), sc* (-1.9));
 if(sc<200){
   $('.top-letter').fadeIn();
   $('.top-logo').fadeIn();
   $('.scroll-arrow').fadeIn();
   $('.blank1').css({height:(600-(sc*0.5))+"px"});
 }else
 if(sc>900){
   $('.scroll-arrow').fadeOut();
   $('.top-logo').fadeOut();
 }
 //以下top
   $('.top-logo').css({width:((sc*30) + 500) + "px",})
                 .css({marginLeft:((sc)*-15)+ "px"})
                 .css({marginTop:((sc)*-15)+ "px"});
   $('.yukikaze').css({left:(40-sc)+"px"});
   $('.tech').css({left:(80+sc)+"px"});

//以下ロゴについて

});
window.onload = function (){
  hihyoji();
  mijisu();
  hyouji();
  $('.team-in').addClass('isAnimate');
}
//フェードイン
$(window).on('scroll', function (){
  var fadein = $('.fadein');
  var isAnimate = 'isAnimate';

  fadein.each(function () {

    var fadeinOffset = $(this).offset().top;
    var scrollPos = $(window).scrollTop();
    var wh = $(window).height();

    if(scrollPos > fadeinOffset - wh + (wh / 2) ){
      $(this).addClass(isAnimate);
    }
  });

  var fadeinex = $('.fadein-ex');

  fadeinex.each(function () {

//チームのカテゴリの棒
    var fadeinexOffset = $(this).offset().top;
    var scrollPos = $(window).scrollTop();
    var wh = $(window).height();

    if(scrollPos > fadeinexOffset - wh + (wh / 2) ){
      $(this).addClass(isAnimate);
      $('#border1').animate({
        width: '50%',},3000);
      setTimeout(function(){
        $('#border2').animate({
            height: '300px',},1500);
      },3000);
      setTimeout(function(){
        $('#border3').animate({
          width: '30%',
          left: '20%',},1000);
      },3500);
      setTimeout(function(){
        $('#border4').animate({
          width: '30%',},1000);
      },3500);
      setTimeout(function(){
        $('.height').animate({
          height: '200px',},1000);
      },4500);
      setTimeout(function(){
         $('.category-info').fadeIn(1000);
      },5500)
    };
  });
  //チームのFLLとはの画像切り替え
    var fadeinsp = $('.fadeinsp');

   fadeinsp.each(function () {

      var fadeinspOffset = $(this).offset().top;
      var scrollPos = $(window).scrollTop();
      var wh = $(window).height();

      if(scrollPos > fadeinspOffset - wh + (wh / 2) ){
        $(this).addClass(isAnimate);

        setTimeout(function(){
          $('#fll1').fadeOut();
        },2000);
        setTimeout(function(){
          $('#fll3').fadeIn(2000);
        },3000);
        setTimeout(function(){
          $('#fll4').fadeIn(2000);
        },6000);
        setTimeout(function(){
          $('#fll5').fadeIn(2000);
        },9000);
        setTimeout(function(){
          $('#fll4').fadeOut(2);
          $('#fll3').fadeOut(2);
          $('#fll2').fadeOut(2);
        },11000);
      }

  });
  //変数
  var size      = $('.fontsize-var').find('p');

  var fix       = $('.fix');
  var scroll    = $(window).scrollTop();
  var start     = $('.fix-area').offset().top;
  var end       = $('.fix-area').height() + start;
  var winHeight = $(window).height();
  var fixHeight = fix.height();
  var endFix    = end - fixHeight;

//乱数文字大きさ変
  var result    = Math.floor( Math.random() * (30 + 1 - 8) ) + 8
  var firstTop  = $('.fontsize-var').offset().top;

  size.each(function(){
    if (scroll > (firstTop-200)) {
      size.css({fontSize:'18px'});
    }else
    if (scroll < firstTop-200) {
      size.css({fontSize:(result)+"px"});
    }
  });

//frcの特徴のfixed
  var letter1  = $('#robo-back')
  var topLet1 = $('#robots').offset().top - 200;
  var bottomLet1 =  $('#managements').offset().top - 200;
  var content1 = $('#robo-back').height() + 30;

  var letter2  = $('#manage-back')
  var topLet2 = $('#managements').offset().top - 200;
  var bottomLet2 =  $('#outreaches').offset().top - 90;
  var content2 = $('#manage-back').height() + 30;

  var x = $(window).width();
  var min_x = 1000;

  if((scroll + content1) > bottomLet1){
  	letter1.css({
  		'position': 'absolute',
      'left': '40%'
  	});
  } else if(topLet1 < scroll){
  	if(min_x > x){
  		letter1.css({
  			'position': 'absolute',
				'top': scroll + 30
  		});
  	} else {
  		letter1.css({
  			'position': 'fixed',
				'top': '30px'
			});
		}
	} else {
		letter1.css({
			'position':'absolute',
			'top': topLet1 + 30
		});
	}

  if((scroll + content2) > bottomLet2){
    letter2.css({
      'position': 'absolute',
      'left': '40%'
    });
  } else if(topLet2 < scroll){
    if(min_x > x){
      letter2.css({
        'position': 'absolute',
        'top': scroll + 30
      });
    } else {
      letter2.css({
        'position': 'fixed',
        'top': '30px'
      });
    }
  } else {
    letter2.css({
      'position':'absolute',
      'top': topLet2 + 30
    });
  }

//Dean Kamenのfixed
  if (scroll+60 <= start) {
    fix.css("position","");
    fix.css("top","");
    fix.fadeIn(500);
    $('.dont-fix').css("opacity",'1')
  }else
  if (scroll >= end - winHeight) {
    fix.fadeOut(500);
    fix.
    $('.dont-fix').css("opacity",'0')
  }else {
    fix.fadeIn(500);
    $('.dont-fix').css("opacity",'1')
    fix.css("position","fixed");
    fix.css("top","150px");
  }

//終わり
});

//ここから実績
$('[name="fllyear"]:radio').change(function(){
   var value=$(this).val();
     if(value==2016){
       $('.2016').show(500);
       $('.2017').hide(500);
       $('.2018').hide(500);
       $('.2019').hide(500);
     } else if (value==2017) {
       $('.2016').hide(500);
       $('.2017').show(500);
       $('.2018').hide(500);
       $('.2019').hide(500);
     }  else if (value==2018) {
       $('.2016').hide(500);
       $('.2017').hide(500);
       $('.2018').show(500);
       $('.2019').hide(500);
     }  else if (value==2019) {
       $('.2016').hide(500);
       $('.2017').hide(500);
       $('.2018').hide(500);
       $('.2019').show(500);
     }

   });
$('[name="frcyear"]:radia').change(function(){
  if (value==2021) {
    $('.2021').show(500);
    $('.2022').hide(500);
    $('.2023').hide(500);
    $('.2024').hide(500);
  }
  else if (value==2022) {
    $('.2021').hide(500);
    $('.2022').show(500);
    $('.2023').hide(500);
    $('.2024').hide(500);
  }
  else if (value==2023) {
    $('.2021').hide(500);
    $('.2022').hide(500);
    $('.2023').show(500);
    $('.2024').hide(500);
  }
  else if (value==2024) {
    $('.2021').hide(500);
    $('.2022').hide(500);
    $('.2023').hide(500);
    $('.2024').show(500);
  }
});








//めも(いときが描いたやつ)
/*
サイトの高さをaとする
画面の高さをwとする
scroll量をscとする
この時
w=a-sc/a
1pxにax動かす
aw=x（a-sc）
  =ax-sx
 w=x-sx/a
aw=ax-sxより、x=aw/a-sc
*/

//以下から







/*$(".spirit-txts").on("click", function() {

});*/




//ここから下は記述しない
});
//マウスストーカー
const el=document.querySelector('.stoker')

let mouseX=0;
let mouseY=0;
let currentX=0;
let currentY=0;
document.body.addEventListener('mousemove',(event)=>{
  mouseX=event.clientX;
  mouseY=event.clientY;
});

tick();
function tick(){
  requestAnimationFrame(tick);
  currentX += (mouseX - currentX) * 0.005;
  currentY += (mouseY - currentY) * 0.005;
  el.style.transform=`translate(${currentX}px,${currentY}px)`;
}
//マウスストーカーここまで




//ここから1文字ずつ表示
/* ----- 可変 ----- */
var id = ['typA','typB','typC','typD','typE']; //指定するidを指定
var txSp = 100; // テキストの表示速度（製作中:10,完成：１００）
var dly = 1000; // 次の文章までの待ち時間(製作中:10,完成：１００0）

/* ----- 可変　----- */
var count = 0;
var tx = [];
var txCount = [];



function mijisu(){ // 文字数カウントの初期設定
  for(n=0;n<id.length;n++){
    txCount[n] = 0;
  }
}

function hihyoji(){ // 要素をtx[i]に保持させ、非表示にする
  for(i=0;i<id.length;i++){
    id[i] = document.getElementById(id[i]);
    tx[i] = id[i].firstChild.nodeValue; // 初期の文字列
    id[i].innerHTML = '';
  }
}

function hyouji(){ //　一文字ずつ表示させる
  id[count].innerHTML = tx[count].substr( 0, ++txCount[count] )+"_"; // テキストの指定した数の間の要素を表示
  if(tx[count].length != txCount[count]){ // Count が初期の文字列の文字数と同じになるまでループ
    setTimeout("hyouji()",txSp); // 次の文字へ進む
  }else{
  id[count].innerHTML = tx[count].substr( 0, ++txCount[count] ); // テキストの指定した数の間の要素を表示
    count++; // 次の段落に進む為のカウントアップ
    if(count != id.length){ // id数が最後なら終了
    setTimeout("hyouji()",dly); // 次の段落へ進む
    }
  }
}
