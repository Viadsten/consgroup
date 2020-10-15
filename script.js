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
      });

      $(window).resize(function() {
        if(document.documentElement.clientWidth < 800) {
          mainNav.style.display = "none";
        }
      });
        cachedWidth = newWidth;
    }
});


var burger = document.getElementById("checkbox");
var i = 0;

burger.addEventListener('change', ()=>{
  if (i == 0){
    $("#navigation").slideDown('300');
    i = 1;
  }
  else{
    $("#navigation").slideUp('300');
    i = 0;
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
  if ( $(this).scrollTop() > el.offset().top - 1100) {

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
