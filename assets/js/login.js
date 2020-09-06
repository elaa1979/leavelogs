// JavaScript source code
$(document).ready(function () {
    $(".toggle-password").click(function () {
        $(this).toggleClass("fa-eye-slash fa-eye");        
    });
});
function passToggle() {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
//
function randomImage() {
    var images = [
        '../assets/images/log-bg-1.jpg',
        '../assets/images/log-bg-2.jpg'];
    var size = images.length;
    var x = Math.floor(size * Math.random());
    console.log(x);
    var element = document.getElementsByClassName('home-intro');
    console.log(element);
    element[0].style["background-image"] = "url(" + images[x] + ")";
}

document.addEventListener("DOMContentLoaded", randomImage);
