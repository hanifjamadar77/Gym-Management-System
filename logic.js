// Go to Top Button Js
var btn = $('#button');

$(window).scroll(function() {
  if ($(window).scrollTop() > 300) {
    btn.addClass('show');
  } else {
    btn.removeClass('show');
  }
});

btn.on('click', function(e) {
  e.preventDefault();
  $('html, body').animate({scrollTop:0}, '300');
});


let get_start = document.querySelector("#watch_video");
function get_started(){
    window.open("https://youtu.be/eaRQF-7hhmo","_blank")
}

function reset(){
   document.getElementById("form").reset();
}
