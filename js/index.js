var header = document.getElementById('header');
var windowHeight = window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight;
header.style.height = windowHeight + 'px';

function responsiveNav() {
  var x = document.getElementById("topnav");
  if (x.className === "topnav") {
      x.className += " responsive";
  } else {
      x.className = "topnav";
  }
}