$(function(){
  $('.Toggle').click(function() {
      $(this).toggleClass('active');

      if ($(this).hasClass('active')) {
          $('.NavMenu').addClass('active');　		//クラスを付与
      } else {
          $('.NavMenu').removeClass('active');	//クラスを外す
      }
  });
  if ($(window).width() >900) {
    $('.turn').turnBox({
      width:500,
      height:40
    });
  }else {
    $('.turn').turnBox({
      width:300,
      height:40
    });
  }

  //turnbox フォーカス
  $('.focus').on("click",function(){

    $(this).each(function(){
      var focusring =$(this).parent().next().find('input');
      focusring.focus();
    });
  });
  $('input').keydown(function(event) {
  	if (event.key === "Space"){
  		alert(event.key + 'キーが押されました')
  	}
  });
  }
  //フォームの切り替え
  $('#category_select').change(function () {
    var val = $('#category_select').prop('selectedIndex');
    console.log(val);
    $('.form-type').fadeOut(100);
    setTimeout(function(){
      $('#' + 'type'+val ).fadeIn();
    },100)
  });

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
