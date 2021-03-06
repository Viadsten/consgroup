var navToggle = document.querySelector(".header__toggle");
var mainNav = document.querySelector(".header__nav-wrapper");


var firstLine = document.querySelector(".toggle__line_first");


var cachedWidth = $(window).width();
$(window).resize(function(){
    var newWidth = $(window).width();
    if(newWidth !== cachedWidth){
      $(window).resize(function() {
        if(document.documentElement.clientWidth > 800) {
          mainNav.style.display = "flex";
        }

        if(document.documentElement.clientWidth > 700) {
          news_media2();
        }
        if(document.documentElement.clientWidth > 1000) {
          news_media3();
        }
        if(document.documentElement.clientWidth > 1250) {
          news_media4();
        }
      });

      $(window).resize(function() {
        if(document.documentElement.clientWidth < 800) {
          mainNav.style.display = "none";
        }
        if(document.documentElement.clientWidth < 700) {
          news_media1();
        }
      });
        cachedWidth = newWidth;
    }
});




var burger = document.getElementById("checkbox");
var m = 0;

burger.addEventListener('change', ()=>{
  if (m == 0){
    $("#navigation").slideDown('300');
    m = 1;
  }
  else{
    $("#navigation").slideUp('300');
    m = 0;
  }

})


var slider = document.getElementById("Range");
var output = document.querySelectorAll("#rangeOutput");
var profit = document.getElementById("profit");
const tsla = 1.47;
const aapl = 1.9;
const gold = 1.2;
var tsla_text = document.getElementById("tsla-text");
var aapl_text = document.getElementById("aapl-text");
var gold_text = document.getElementById("gold-text");
var radio_count = 0;

 for (var i = 0; i < output.length; i++) {
          output[i].innerHTML = slider.value;
        }
profit.innerHTML = Math.round(slider.value * tsla);


slider.oninput = function invest() {
  for (var i = 0; i < output.length; i++) {
    output[i].innerHTML = slider.value;
  }
    radio_count = check_invest();
    profit.innerHTML = Math.round(slider.value * radio_count);
}

var invst_btn = document.getElementsByName('invest-radio');

$(function(){
  $(invst_btn).click(function() {
        for (var i = 0; i < output.length; i++) {
          output[i].innerHTML = slider.value;
        }

        radio_count = check_invest();
        checkLine();
        profit.innerHTML = Math.round(slider.value * radio_count);
  });
});

function check_invest()
{
    for (var j = 0; j < invst_btn.length; j++) {
        if (invst_btn[j].type == "radio" && invst_btn[j].checked) {

          if (j == 0){
            tsla_text.style.display = "block";
            aapl_text.style.display = "none";
            gold_text.style.display = "none";
            return (tsla);
          }
          else if (j == 1){
            tsla_text.style.display = "none";
            aapl_text.style.display = "block";
            gold_text.style.display = "none";
            return (aapl);
          }
          else {
            tsla_text.style.display = "none";
            aapl_text.style.display = "none";
            gold_text.style.display = "block";
            return(gold);
          }
        }
    }
}

check_invest();

var el = $('.invest svg');
var col = document.querySelectorAll("#gr_col");
var lineR = document.querySelector("#gr_lineR");
var lineY = document.querySelector("#gr_lineY");
var lineG = document.querySelector("#gr_lineG");

$(window).scroll(function(){
  if ( $(this).scrollTop() > el.offset().top - 400) {

    checkLine();
    for (var i = 0; i < col.length; i++) {
      col[i].classList.add("gr_col1");
    }
  }
});


function checkLine(){
  radio_count = check_invest();
  if (radio_count == tsla){
    lineY.classList.add("graph-line");
    lineG.classList.remove("graph-line");
    lineR.classList.remove("graph-line");

  }else if (radio_count == aapl){
    lineG.classList.add("graph-line");
    lineY.classList.remove("graph-line");
    lineR.classList.remove("graph-line");
  }else{
    lineR.classList.add("graph-line");
    lineG.classList.remove("graph-line");
    lineY.classList.remove("graph-line");
  }

}


var news_card = document.querySelectorAll("#news-card");
var news_btn_left = document.querySelector("#news-left");
var news_btn_right = document.querySelector("#news-right");
/*
function news_mobile(x){
  for (var i = 0; i < news_card.length; i++) {
    if ((news_card[i].classList.contains('news-active')) && (x == 1)){
      news_card[i].classList.remove('news-active');
      if(document.documentElement.clientWidth > 699) {
        if (i == news_card.length - 1){
          i = - 1;
        }
        i = i + 1;
        console.log(i, '1');
        news_card[i].classList.add('news-active');
        news_2(i, x);
        break;
      }

      if (i == news_card.length - 1){
        i = -1;
      }
        i = i + 1;
        news_card[i].classList.add('news-active');
        break;
    }

    else if ((news_card[i].classList.contains('news-active')) && (x == 0)){
      if(document.documentElement.clientWidth > 699) {
        if ( i == 0){
          console.log('disabled');
          news_btn_left.disabled = true;
          break;
        }
        i = i + 1;
        news_card[i].classList.remove('news-active');
        i = i - 2;
        console.log(i, '-1');
        news_card[i].classList.add('news-active');
        news_2(i, x);
        break;
      }
      news_card[i].classList.remove('news-active');
      if (i == 0){
        i = news_card.length;
      }
      i = i - 1;
      news_card[i].classList.add('news-active');
      break;
    }

  }
}

function news_2(j, y){
  if(y == 1){
    if (j == news_card.length - 2){
      news_btn_right.disabled = true;
    }

    j = j + 1;
    console.log(j, '2');

    news_card[j].classList.add('news-active');
  }
  if(y == 0){
    if (j == 0){
      console.log(j);
      console.log('disabled');
      news_btn_left.disabled = true;
    }else{
    j = j - 1;
    console.log(j, '-2');
    news_card[j].classList.add('news-active');}
  }
}*/

function news_mobile(x){
  for (var i = 0; i < news_card.length; i++) {
    if ((news_card[i].classList.contains('news-active')) && (x == 1)){
      news_card[i].classList.remove('news-active');
      if (i == news_card.length - 1){
        i = -1;
      }
        i = i + 1;
        news_card[i].classList.add('news-active');

        break;

    }
    else if ((news_card[i].classList.contains('news-active')) && (x == 0)){
      news_card[i].classList.remove('news-active');
      if (i == 0){
        i = news_card.length;
      }
      i = i - 1;
      news_card[i].classList.add('news-active');
      break;
    }

  }
}

if(window.matchMedia('(min-width: 700px)').matches){
	news_media2();
}

if(window.matchMedia('(min-width: 1000px)').matches){
	news_media3();
}

if(window.matchMedia('(min-width: 1250px)').matches){
	news_media4();
}


function news_media4(){
  for (var i = 0; i < news_card.length; i++) {
    if ( i == 0 || i == 1 || i == 2 || i == 3){
      news_card[i].classList.add('news-active');
    }
    else {
      news_card[i].classList.remove('news-active');
    }
  }
}

function news_media3(){
  for (var i = 0; i < news_card.length; i++) {
    if ( i == 0 || i == 1 || i == 2){
      news_card[i].classList.add('news-active');
    }
    else {
      news_card[i].classList.remove('news-active');
    }
  }
}

function news_media2(){
  for (var i = 0; i < news_card.length; i++) {
    if ( i == 0 || i == 1){
      news_card[i].classList.add('news-active');
    }
    else {
      news_card[i].classList.remove('news-active');
    }
  }
}

function news_media1(){
  for (var i = 0; i < news_card.length; i++) {
    if ( i == 0){
      news_card[i].classList.add('news-active');
    }
    else {
      news_card[i].classList.remove('news-active');
    }
  }
}
