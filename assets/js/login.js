// JavaScript source code
$(document).ready(function () {
    $(".toggle-password").click(function () {
        $(this).toggleClass("fa-eye-slash fa-eye");
        var input = $($(this).attr("toggle"));
        if (input.attr("type") == "password") {
            input.attr("type", "text");
        } else {
            input.attr("type", "password");
        }
    });
});

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