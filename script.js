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
  console.log("check");
  if (i == 0){
    $("#navigation").slideDown('300');
    i = 1;
  }
  else{
    $("#navigation").slideUp('300');
    i = 0;
  }

})



